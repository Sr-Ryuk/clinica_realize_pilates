<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('instrutores', function (Blueprint $table) {
            $table->id();

            // UUID compatível com qualquer MySQL
            $table->char('uuid', 36)->unique()->nullable();

            $table->foreignId('usuario_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('nome', 100);
            $table->string('cpf', 14)->unique();
            $table->string('rg', 20)->nullable();
            $table->string('telefone', 20)->nullable();
            $table->string('celular', 20);
            $table->string('email', 100)->nullable();
            $table->date('data_nascimento');
            $table->enum('sexo', ['M', 'F', 'outro', 'prefiro_nao_informar'])->nullable();

            // Documentação profissional
            $table->string('crefito', 20)->nullable();
            $table->string('registro_profissional', 50)->nullable();
            $table->date('data_registro')->nullable();

            // Qualificações
            $table->json('especialidades')->nullable();
            $table->json('certificacoes')->nullable();
            $table->json('formacao_academica')->nullable();
            $table->integer('experiencia_anos')->nullable();
            $table->json('modalidades')->nullable();

            // Endereço
            $table->string('endereco', 200)->nullable();
            $table->string('numero', 20)->nullable();
            $table->string('complemento', 100)->nullable();
            $table->string('bairro', 100)->nullable();
            $table->string('cidade', 100)->nullable();
            $table->string('estado', 2)->nullable();
            $table->string('cep', 10)->nullable();

            // Dados trabalhistas
            $table->date('data_admissao')->nullable();
            $table->date('data_demissao')->nullable();
            $table->decimal('salario_base', 10, 2)->nullable();
            $table->decimal('comissao_percentual', 5, 2)->nullable();
            $table->enum('forma_pagamento', [
                'dinheiro',
                'pix',
                'cartao_credito',
                'cartao_debito',
                'boleto',
                'transferencia',
                'cheque'
            ])->nullable();
            $table->string('pix_chave', 100)->nullable();
            $table->string('banco', 100)->nullable();
            $table->string('agencia', 20)->nullable();
            $table->string('conta', 30)->nullable();

            // Configurações
            $table->integer('carga_horaria_semanal')->nullable();
            $table->decimal('valor_hora_aula', 10, 2)->nullable();
            $table->string('cor_agenda', 7)->default('#3788d8');
            $table->boolean('permite_agendamento_online')->default(true);

            // Observações
            $table->text('observacoes')->nullable();
            $table->json('documentos')->nullable();
            $table->string('foto_url', 500)->nullable();
            $table->boolean('ativo')->default(true);
            $table->text('motivo_inativacao')->nullable();

            $table->foreignId('criado_por')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('atualizado_por')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();

            $table->index('cpf');
            $table->index('nome');
            $table->index('ativo');
            $table->index('usuario_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('instrutores');
    }
};
