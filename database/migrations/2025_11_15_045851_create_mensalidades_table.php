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
        Schema::create('mensalidades', function (Blueprint $table) {
            $table->id();
            $table->string('numero_titulo')->unique();

            $table->foreignId('matricula_id')->constrained('matriculas')->cascadeOnDelete();
            $table->foreignId('aluno_id')->constrained('alunos')->cascadeOnDelete();

            $table->date('mes_referencia');
            $table->string('competencia', 7);

            $table->decimal('valor_base', 10, 2);
            $table->decimal('desconto', 10, 2)->default(0);
            $table->decimal('acrescimo', 10, 2)->default(0);
            $table->decimal('multa', 10, 2)->default(0);
            $table->decimal('juros', 10, 2)->default(0);
            $table->decimal('valor_total', 10, 2);

            $table->date('data_vencimento');
            $table->timestamp('data_pagamento')->nullable();
            $table->integer('dias_atraso')->nullable();
            $table->decimal('valor_pago', 10, 2)->nullable();

            $table->enum('forma_pagamento', [
                'dinheiro',
                'pix',
                'cartao_credito',
                'cartao_debito',
                'boleto',
                'transferencia',
                'cheque'
            ])->nullable();

            $table->enum('status', [
                'pendente',
                'pago',
                'atrasado',
                'cancelado',
                'estornado',
                'em_analise'
            ])->default('pendente');

            $table->string('numero_transacao')->nullable();
            $table->string('autorizacao')->nullable();
            $table->string('nsu')->nullable();
            $table->string('comprovante_url')->nullable();

            $table->foreignId('recebido_por')->nullable()->constrained('users')->nullOnDelete();

            $table->json('historico')->nullable();

            $table->boolean('enviado_cobranca')->default(false);
            $table->timestamp('data_envio_cobranca')->nullable();

            $table->boolean('notificado')->default(false);
            $table->timestamp('data_notificacao')->nullable();

            $table->foreignId('criado_por')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('atualizado_por')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensalidades');
    }
};
