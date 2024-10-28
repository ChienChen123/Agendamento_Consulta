<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->id();
            $table->foreignId('med_id')->constrained('medico')->onDelete('cascade');
            $table->string('pac_nome');
            $table->string('pac_sobrenome');
            $table->string('pac_cpf')->unique();
            $table->string('pac_endereco');
            $table->string('pac_telefone');
            $table->enum('pac_sexo', ['Masculino', 'Feminino', 'Outro']);
            $table->date('pac_data');
            $table->time('pac_horario')->format('H:i'); 
            $table->boolean('pac_ativo')->default(1);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paciente');
    }
};
