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
        Schema::create('planos', function (Blueprint $table) {
            $table->id();

            $table->string('nome');
            $table->text('descricao')->nullable();

            $table->enum('tipo_aula', ['individual', 'duo', 'trio', 'grupo']);

            $table->integer('aulas_por_semana');
            $table->integer('total_aulas_mes')->nullable();
            $table->integer('duracao_aula')->default(55);

            $table->boolean('permite_reposicao')->default(true);
            $table->integer('validade_dias')->nullable();

            $table->json('modalidades_incluidas')->nullable();

            $table->decimal('valor_mensal', 10, 2);
            $table->decimal('valor_aula_avulsa', 10, 2)->nullable();
            $table->decimal('taxa_matricula', 10, 2)->default(0);

            $table->decimal('desconto_semestral', 5, 2)->nullable();
            $table->decimal('desconto_anual', 5, 2)->nullable();

            $table->integer('max_faltas_mes')->default(2);
            $table->boolean('permite_troca_horario')->default(true);
            $table->integer('horas_antecedencia_troca')->default(4);

            $table->boolean('permite_congelamento')->default(true);
            $table->integer('max_congelamentos_ano')->default(1);
            $table->integer('dias_minimo_congelamento')->nullable();
            $table->integer('dias_maximo_congelamento')->nullable();

            $table->json('nivel_recomendado')->nullable();
            $table->integer('idade_minima')->nullable();
            $table->integer('idade_maxima')->nullable();

            $table->boolean('destaque')->default(false);
            $table->integer('ordem_exibicao')->default(0);

            $table->boolean('ativo')->default(true);

            $table->date('data_inicio_vigencia')->default(now());

            $table->date('data_fim_vigencia')->nullable();

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
        Schema::dropIfExists('planos');
    }
};
