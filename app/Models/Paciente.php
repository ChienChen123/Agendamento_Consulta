<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'paciente';
    
    protected $fillable = [
        'med_id',
        'pac_nome',
        'pac_sobrenome',
        'pac_cpf',
        'pac_endereco',
        'pac_telefone',
        'pac_sexo',
        'medico',
        'area',
        'pac_data',
        'pac_horario',
    ];

    // Relacionamento com o Médico

    public function medico()
    {
        return $this->belongsTo(Medico::class, 'med_id');
    }


}