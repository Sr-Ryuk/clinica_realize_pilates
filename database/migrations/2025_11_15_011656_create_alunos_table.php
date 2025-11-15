<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');

            $table->string('nome');
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();
            $table->string('email')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->enum('sexo', ['masculino', 'feminino', 'outro'])->nullable();

            $table->string('endereco')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('cep')->nullable();

            $table->string('objetivo_principal')->nullable();
            $table->string('nivel_pratica')->nullable();
            $table->string('preferencia_instrutor')->nullable();
            $table->string('foto_url')->nullable();

            $table->boolean('ativo')->default(1);
            $table->text('observacoes')->nullable();
            $table->unsignedBigInteger('criado_por')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
