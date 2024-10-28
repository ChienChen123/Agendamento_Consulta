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
        Schema::create('medico', function (Blueprint $table) {
            $table->id();
            $table->string("med_nome", 255);
            $table->string("med_endereco", 255);
            $table->string("med_telefone", 15);  
            $table->string("med_cpf", 11);
            $table->string("med_especialidade", 255);  
            $table->string("med_email", 100);
            $table->string("med_cfm", 11);
            $table->boolean("med_ativo")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medico_tables');
    }
};
