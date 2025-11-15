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
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('aluno_id')->constrained('alunos')->cascadeOnDelete();
            $table->foreignId('plano_id')->constrained('planos');

            $table->date('data_inicio');
            $table->date('data_fim')->nullable();

            $table->date('data_primeiro_vencimento');
            $table->integer('dia_vencimento');

            $table->decimal('valor_mensal', 10, 2);
            $table->decimal('valor_taxa_matricula', 10, 2)->default(0);

            $table->decimal('desconto_percentual', 5, 2)->default(0);
            $table->decimal('desconto_valor', 10, 2)->default(0);
            $table->decimal('acrescimo_valor', 10, 2)->default(0);
            $table->decimal('valor_final', 10, 2);

            $table->integer('aulas_contratadas')->nullable();
            $table->integer('aulas_utilizadas')->default(0);

            $table->foreignId('instrutor_preferencial_id')->nullable()->constrained('instrutores')->nullOnDelete();
            $table->json('horarios_preferenciais')->nullable();

            $table->enum('status', [
                'ativa',
                'suspensa',
                'cancelada',
                'finalizada',
                'aguardando_pagamento',
                'em_analise'
            ])->default('ativa');

            $table->timestamp('suspensa_em')->nullable();
            $table->text('motivo_suspensao')->nullable();

            $table->timestamp('cancelada_em')->nullable();
            $table->enum('motivo_cancelamento', [
                'mudanca',
                'financeiro',
                'insatisfacao',
                'saude',
                'objetivo_alcancado',
                'outros'
            ])->nullable();
            $table->text('detalhes_cancelamento')->nullable();

            $table->timestamp('finalizada_em')->nullable();

            $table->boolean('contrato_assinado')->default(false);
            $table->timestamp('data_assinatura_contrato')->nullable();
            $table->string('arquivo_contrato_url')->nullable();
            $table->string('ip_assinatura', 45)->nullable();

            $table->text('observacoes')->nullable();

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
        Schema::dropIfExists('matriculas');
    }
};
