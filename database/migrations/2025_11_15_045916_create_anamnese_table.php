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
        Schema::create('anamnese', function (Blueprint $table) {
            $table->id();

            $table->foreignId('aluno_id')->constrained('alunos')->cascadeOnDelete();
            $table->foreignId('instrutor_id')->constrained('instrutores')->cascadeOnDelete();

            $table->date('data_avaliacao')->default(now());

            $table->decimal('peso', 5, 2)->nullable();
            $table->decimal('altura', 4, 2)->nullable();
            $table->decimal('circunferencia_cintura', 5, 2)->nullable();
            $table->decimal('circunferencia_quadril', 5, 2)->nullable();

            $table->json('avaliacao_postural')->nullable();
            $table->json('testes_fisicos')->nullable();
            $table->json('restricoes')->nullable();

            $table->text('observacoes')->nullable();

            $table->date('proxima_avaliacao')->nullable();

            $table->foreignId('criado_por')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anamnese');
    }
};
