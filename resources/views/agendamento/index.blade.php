<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento Consulta</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="card shadow-sm" style="width: 100%; max-width: 700px;">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Agendamento de Consulta</h2>
            <form method="POST" action="{{ route('pacientes.salvar') }}">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="pac_nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="pac_nome" name="pac_nome" placeholder="Digite o nome" required>
                    </div>
                    <div class="col-md-6">
                        <label for="pac_sobrenome" class="form-label">Sobrenome:</label>
                        <input type="text" class="form-control" id="pac_sobrenome" name="pac_sobrenome" placeholder="Digite o sobrenome" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="pac_cpf" class="form-label">CPF:</label>
                        <input type="text" class="form-control" id="pac_cpf" name="pac_cpf" placeholder="Digite o CPF" required>
                    </div>
                    <div class="col-md-6">
                        <label for="pac_endereco" class="form-label">Endereço:</label>
                        <input type="text" class="form-control" id="pac_endereco" name="pac_endereco" placeholder="Digite o endereço" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="pac_telefone" class="form-label">Telefone:</label>
                        <input type="text" class="form-control" id="pac_telefone" name="pac_telefone" placeholder="Digite o telefone" required>
                    </div>
                    <div class="col-md-6">
                        <label for="pac_sexo" class="form-label">Sexo:</label>
                        <select class="form-select" id="pac_sexo" name="pac_sexo" required>
                            <option selected disabled>Selecione...</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                            <option value="Outro">Outro</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="med_id" class="form-label">Médico:</label>
                    <select class="form-select" id="med_id" name="med_id" required>
                     @foreach($medicos as $med)
                        <option value="{{ $med->id }}">{{ $med->med_nome }} - {{ $med->med_especialidade }}</option>
                    @endforeach
           
                    </select>
                </div>

                <div class="mb-3">
                    <label for="pac_data" class="form-label">Data:</label>
                    <input type="date" class="form-control" id="pac_data" name="pac_data" required onfocus="limitarDiasUteis()">
                </div>

                <script>
                            function limitarDiasUteis() {
                            const inputData = document.getElementById("pac_data");
                            const hoje = new Date().toISOString().split("T")[0];
                            inputData.setAttribute("min", hoje);
                            inputData.addEventListener("input", function() {
                            const diaSemana = new Date(this.value).getUTCDay();
                            if (diaSemana === 0 || diaSemana === 6) { // Domingo ou Sábado
                                this.value = '';
                            alert("Agendamentos só podem ser feitos de segunda a sexta-feira.");
                                    }
                     });
                       }

                </script>


               <div class="mb-3">
                        <label for="pac_horario" class="form-label">Horário:</label>
                        <select class="form-select" id="pac_horario" name="pac_horario" required>
                             <option disabled selected>Selecione um horário</option>
                                 @if(isset($horariosDisponiveis))
                                     @foreach($horariosDisponiveis as $horario)
                                        <option value="{{ $horario }}">{{ $horario }}</option>
                                    @endforeach
                                 @endif
                        </select>
              </div>

                <button type="submit" class="btn btn-primary w-100" name = 'redirect' value='principal'>Agendar</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">


</script>
</body>
</html>
