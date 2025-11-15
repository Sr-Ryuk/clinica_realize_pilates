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
        Schema::create('evolucao_aluno', function (Blueprint $table) {
            $table->id();

            $table->foreignId('aluno_id')->constrained('alunos')->cascadeOnDelete();
            $table->foreignId('instrutor_id')->constrained('instrutores')->cascadeOnDelete();

            $table->date('data_avaliacao')->default(now());

            $table->enum('tipo_avaliacao', ['inicial', 'periodica', 'final'])->default('periodica');

            $table->decimal('peso', 5, 2)->nullable();
            $table->decimal('altura', 4, 2)->nullable();

            $table->json('flexibilidade')->nullable();
            $table->json('forca_muscular')->nullable();
            $table->json('resistencia')->nullable();
            $table->json('equilibrio')->nullable();
            $table->json('postura')->nullable();

            $table->integer('nivel_dor')->nullable();
            $table->json('localizacao_dor')->nullable();

            $table->enum('qualidade_sono', ['otima', 'boa', 'regular', 'ruim'])->nullable();
            $table->enum('nivel_energia', ['muito_baixo', 'baixo', 'medio', 'alto', 'muito_alto'])->nullable();

            $table->json('objetivos_atingidos')->nullable();
            $table->json('novos_objetivos')->nullable();

            $table->text('observacoes_instrutor')->nullable();
            $table->text('observacoes_aluno')->nullable();
            $table->text('recomendacoes')->nullable();

            $table->foreignId('criado_por')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evolucao_aluno');
    }
};
