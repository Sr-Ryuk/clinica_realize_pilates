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
        Schema::create('restricoes_aluno', function (Blueprint $table) {
            $table->id();

            $table->foreignId('aluno_id')->constrained('alunos')->cascadeOnDelete();

            $table->enum('tipo', ['leve', 'moderada', 'grave', 'temporaria', 'permanente']);
            $table->enum('prioridade', ['baixa', 'media', 'alta', 'critica'])->default('media');

            $table->text('descricao');
            $table->json('exercicios_evitar')->nullable();
            $table->json('exercicios_recomendados')->nullable();
            $table->text('cuidados_especiais')->nullable();

            $table->date('data_inicio')->default(now());
            $table->date('data_fim')->nullable();

            $table->boolean('temporaria')->default(false);
            $table->boolean('ativa')->default(true);

            $table->foreignId('criado_por')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restricoes_aluno');
    }
};
