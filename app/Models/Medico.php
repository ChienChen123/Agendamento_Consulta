<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = "medico";

    protected $fillable = [
        'med_nome',
        'med_endereco',
        'med_telefone',
        'med_cpf',
        'med_especialidade',
        'med_email',
        'med_cfm',
        'med_ativo',
    ];

    // Relacionamento com o Paciente

        // Relacionamento com Produto
        public function paciente()
        {
            return $this->hasMany(Paciente::class, 'med_id');
        }  
}
