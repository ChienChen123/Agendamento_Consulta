<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico;


class MedicoController extends Controller
{
    public function index() 
    {
        $medicos = Medico::where("med_ativo", "1")->get();
        return view('medico.index', compact('medicos'));
    }

    public function IncluirMedico(Request $request) 
    {
        $request->validate([
            'med_nome' => 'required|string|max:255',
            'med_endereco' => 'required|string|max:255',
            'med_telefone' => 'required|numeric',
            'med_cpf' => 'required|string|max:14',
            'med_especialidade' => 'required|string|max:255',
            'med_email' => 'required|email|max:255',
            'med_cfm' => 'required|string|max:255',
        ]);

        Medico::create([
            'med_nome' => $request->input("med_nome"),
            'med_endereco' => $request->input("med_endereco"),
            'med_telefone' => $request->input("med_telefone"),
            'med_cpf' => $request->input("med_cpf"),
            'med_especialidade' => $request->input("med_especialidade"),
            'med_email' => $request->input("med_email"),
            'med_cfm' => $request->input("med_cfm"),
            'med_ativo' => 1,
        ]);

        return redirect('/medico')->with('success', 'Médico cadastrado com sucesso.');
    }

    public function ExcluirMedico($id)
    {
        $med = Medico::where("id", $id)->first();
        
        if ($med) {
            $med->med_ativo = 0;
            $med->save();
            return redirect('/medico')->with('success', 'Médico excluído com sucesso.');
        } else {
            return redirect('/medico')->withErrors('Médico não encontrado.');
        }
    }

    public function BuscarAlteracao($id) 
    {
        $medico = Medico::where("id", $id)->first();
        return view('medico.alterar', compact('medico'));
    }

    public function ExecutaAlteracao(Request $request)
    {
        $request->validate([
            'med_nome' => 'required|string|max:255',
            'med_endereco' => 'required|string|max:255',
            'med_telefone' => 'required|numeric',
            'med_cpf' => 'required|string|max:14',
            'med_especialidade' => 'required|string|max:255',
            'med_email' => 'required|email|max:255',
            'med_cfm' => 'required|string|max:255',
        ]);

        $medico = Medico::where("id", $request->input('id'))->first();

        if ($medico) {
            $medico->update($request->only([
                'med_nome', 
                'med_endereco', 
                'med_telefone', 
                'med_cpf', 
                'med_especialidade', 
                'med_email', 
                'med_cfm'
            ]));

            return redirect('/medico')->with('success', 'Médico atualizado com sucesso.');
        } else {
            return redirect('/medico')->withErrors('Médico não encontrado.');
        }
    }
}


