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
        Schema::create('contatos_emergencia', function (Blueprint $table) {
            $table->id();

            $table->foreignId('aluno_id')->constrained('alunos')->cascadeOnDelete();

            $table->string('nome');
            $table->string('parentesco', 50);
            $table->string('telefone', 20);
            $table->string('celular', 20)->nullable();

            $table->text('observacoes')->nullable();

            $table->foreignId('criado_por')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contatos_emergencia');
    }
};
