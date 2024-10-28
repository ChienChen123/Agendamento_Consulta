<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Medico;
use App\Models\Paciente;
use Illuminate\Validation\ValidationException;;
use App\Services\TelegramService;


class PacienteController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::where("pac_ativo", "1")->with('medico')->get();
        $medicos = Medico::where("med_ativo", "1")->get();
    
        // Defina os horários disponíveis
        $horariosDisponiveis = $this->horariosPermitidos;
    
        // Obtenha os agendamentos já feitos para a data de hoje
        $dataHoje = date('Y-m-d');
    
        $agendamentos = Paciente::where("pac_ativo", "1")
            ->where("pac_data", $dataHoje)
            ->pluck('pac_horario')
            ->map(function ($horario) {
                return date('H:i', strtotime($horario));
            })
            ->toArray();
    
        // Log para verificar os horários ocupados
        \Log::info("Horários ocupados para a data $dataHoje: ", $agendamentos);
    
        // Filtra os horários disponíveis removendo os ocupados
        $horariosDisponiveis = array_diff($horariosDisponiveis, $agendamentos);
    
        // Log para verificar os horários disponíveis após a filtragem
        \Log::info("Horários disponíveis após filtragem: ", $horariosDisponiveis);
    
        return view('paciente.index', compact('pacientes', 'medicos', 'horariosDisponiveis'));
    }
    
    



    private $horariosPermitidos = ['08:00', '09:00', '10:00', '11:00', '14:00', '15:00', '16:00', '17:00'];
    public function salvarNovoPaciente(Request $request, TelegramService $telegramService)
{
    $request->validate([
        'med_id' => 'required|exists:medico,id',
        'pac_nome' => 'required|string|max:255',
        'pac_sobrenome' => 'required|string|max:255',
        'pac_cpf' => 'required|string|max:11',
        'pac_endereco' => 'required|string|max:255',
        'pac_telefone' => 'required|string|max:15',
        'pac_sexo' => 'required|in:Masculino,Feminino,Outro',
        'pac_data' => 'required|date',
        'pac_horario' => 'required|date_format:H:i',
    ]);

    $diaSemana = date('N', strtotime($request->pac_data));
    if ($diaSemana >= 6) {
        return redirect()->back()->withErrors(['pac_data' => 'Agendamentos só são permitidos de segunda a sexta-feira.']);
    }

    $horarioExistente = Paciente::where('med_id', $request->med_id)
        ->where('pac_data', $request->pac_data)
        ->where('pac_horario', $request->pac_horario)
        ->exists();

    if ($horarioExistente) {
        return redirect()->back()->withErrors(['pac_horario' => 'Esse horário já está reservado. Por favor, selecione outro.']);
    }

    // Criar novo paciente
    $paciente = Paciente::create($request->all());

    // Preparar a mensagem do Telegram
    $nomeCliente = $paciente->pac_nome;
    $sobrenomeCliente = $paciente->pac_sobrenome;
    $nomeClinica = 'Clínica do Povo';
    $medico = Medico::find($paciente->med_id);
    $nomeMedico = $medico->med_nome;
    $data = date('d/m/Y', strtotime($paciente->pac_data));
    $horario = $paciente->pac_horario;

    $mensagem = "Olá, Sr(a) {$nomeCliente}{$sobrenomeCliente}, aqui é da {$nomeClinica}. Seu agendamento com doutor(a) {$nomeMedico} foi agendado para {$data} às {$horario} horas. Obrigado!";

    $chatId = '6124260229';
    $telegramService->sendMessage($chatId, $mensagem);

    if ($request->input('redirect') === 'index') {
        return redirect()->route('pacientes.index');
    }
    return redirect('/');
}


// Somente teste
public function testarTelegram(TelegramService $telegramService)
{
    $chatId = '7752095050';
    $mensagem = 'Ola aqui quem fala é o Chen';

    $telegramService->sendMessage($chatId, $mensagem);

    return response()->json(['status' => 'Mensagem enviada!']);
}




public function formularioNovoPaciente()
{
    $medicos = Medico::all();

    // Lista de horários permitidos
    $horariosPermitidos = $this->horariosPermitidos;

    // Obter a data selecionada (ou defina uma data padrão)
    $dataSelecionada = request()->input('pac_data', date('Y-m-d')); // Padrão para a data atual

    // Obter horários ocupados para a data selecionada
    $horariosOcupados = Paciente::where('pac_data', $dataSelecionada)
        ->pluck('pac_horario')
        ->map(function ($horario) {
            return date('H:i', strtotime($horario));
        })
        ->toArray();

    // Filtrar os horários permitidos para mostrar apenas os disponíveis
    $horariosDisponiveis = array_diff($horariosPermitidos, $horariosOcupados);

    return view('paciente.index', compact('medicos', 'horariosDisponiveis'));
}



    
public function agendarConsulta(Request $request)
{
    \Log::info('Acessando a página de agendamento');

    // Carrega os médicos ativos do banco de dados
    $medicos = Medico::where("med_ativo", "1")->get();

    // Pega todos os horários permitidos
    $horariosPermitidos = $this->horariosPermitidos;

    // Verifica se a data e o médico foram passados pelo request
    $data = $request->input('pac_data');
    $medicoId = $request->input('med_id');

    \Log::info("Data recebida para agendamento: $data");
    \Log::info("Médico ID recebido: $medicoId");

    // Inicializa a variável para os horários disponíveis
    $horariosDisponiveis = $horariosPermitidos; // Começa com todos os horários permitidos

    // Se a data e o médico foram informados, filtra os horários ocupados
    if ($data && $medicoId) {
        // Pega os horários ocupados para a data e médico específicos
        $horariosOcupados = Paciente::where('pac_data', $data)
            ->where('med_id', $medicoId)
            ->pluck('pac_horario')
            ->map(function ($horario) {
                return date('H:i', strtotime($horario));
            })
            ->toArray();

        \Log::info("Horários ocupados para o médico ID $medicoId na data $data: ", $horariosOcupados);

        // Filtra os horários disponíveis
        $horariosDisponiveis = array_diff($horariosPermitidos, $horariosOcupados);
    }

    \Log::info("Horários disponíveis para agendamento: ", $horariosDisponiveis);

    return view('agendamento.index', compact('medicos', 'horariosDisponiveis'));
}


    public function detalhesPaciente(Paciente $paciente)
    {
        
        return view('paciente.index', compact('paciente'));
    }

    public function formularioAlterar($id)
{
    $medicos = Medico::all();
    $paciente = Paciente::where('pac_ativo', 1)->where('id', $id)->firstOrFail();

    // Lista de horários permitidos
    $horariosPermitidos = $this->horariosPermitidos;

    // Obter horários ocupados para o paciente e data
    $horariosOcupados = Paciente::where('pac_data', $paciente->pac_data)
        ->where('id', '!=', $paciente->id) // Ignorar o próprio paciente
        ->pluck('pac_horario')
        ->map(function ($horario) {
            return date('H:i', strtotime($horario));
        })
        ->toArray();

    // Filtrar os horários permitidos para mostrar apenas os disponíveis
    $horariosDisponiveis = array_diff($horariosPermitidos, $horariosOcupados);

  

    return view('paciente.alterar', compact('paciente', 'medicos', 'horariosDisponiveis'));
}


public function salvarAlterarPaciente(Request $request)
{
    try {
        // Remover espaços em branco
        $request['pac_horario'] = trim($request['pac_horario']);

        // Validação dos dados
        $request->validate([
            'id' => 'required|exists:paciente,id',
            'pac_nome' => 'required|string|max:255',
            'pac_sobrenome' => 'required|string|max:255',
            'pac_cpf' => 'required|string|max:11',
            'pac_endereco' => 'required|string|max:255',
            'pac_telefone' => 'required|string|max:15',
            'pac_sexo' => 'required|in:Masculino,Feminino,Outro',
            'pac_data' => 'required|date',
            'pac_horario' => 'required|date_format:H:i',
        ]);

        // Restrição de dias úteis
        $diaSemana = date('N', strtotime($request->pac_data));
        if ($diaSemana >= 6) { // 6 = Sábado, 7 = Domingo
            return redirect()->back()->withErrors(['pac_data' => 'Agendamentos só são permitidos de segunda a sexta-feira.']);
        }

        // Verificar se o horário já está reservado para o médico na mesma data
        $horarioExistente = Paciente::where('med_id', $request->med_id)
            ->where('pac_data', $request->pac_data)
            ->where('pac_horario', $request->pac_horario)
            ->where('id', '!=', $request->id) // Ignorar o próprio paciente durante a edição
            ->exists();

        if ($horarioExistente) {
            return redirect()->back()->withErrors(['pac_horario' => 'Esse horário já está reservado. Por favor, selecione outro.']);
        }

        // Verificar se o horário já está reservado para outro paciente na mesma data e médico
    $horarioReservado = Paciente::where('pac_data', $request->pac_data)
    ->where('pac_horario', $request->pac_horario)
    ->where('id', '!=', $request->id) // Ignorar o paciente atual ao editar
    ->exists();

if ($horarioReservado) {
    // Redirecionar com uma mensagem de erro se o horário já estiver ocupado
    return redirect()
        ->back()
        ->withErrors(['pac_horario' => 'O horário escolhido já está reservado. Por favor, escolha outro horário.'])
        ->withInput();
}

        // Encontrar o paciente
        $paciente = Paciente::findOrFail($request->id);
        $paciente->pac_data = $request->pac_data;
        $paciente->pac_horario = $request->pac_horario;
        $paciente->save();
        
        // Atualizar os dados, exceto o 'id'
        $paciente->update($request->except('id'));

        // Redirecionar com mensagem de sucesso
        return redirect()->route('pacientes.index')->with('success', 'Paciente atualizado com sucesso!');
    } 
    
    
    
    catch (\Throwable $e) {
        // Retornar erro de validação
        dd($e->getMessage(), $e->getLine(), $e->getTrace());
    }
}


    

    public function destroy($id)
{
    $pac = Paciente::where("id", $id)->first();
        
    if ($pac) {
        $pac->pac_ativo = 0;
        $pac->save();
        return redirect('/pacientes')->with('success', 'Paciente excluído com sucesso.');
    } else {
        return redirect('/pacientes')->withErrors('Paciente não encontrado.');
    }
    return redirect()->route('pacientes.index')->with('success', 'Paciente removido com sucesso!');

}

    
}
