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
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('aula_id')->constrained('aulas')->cascadeOnDelete();
            $table->foreignId('aluno_id')->constrained('alunos')->cascadeOnDelete();
            $table->foreignId('matricula_id')->constrained('matriculas');

            $table->enum('status', [
                'agendado',
                'confirmado',
                'presente',
                'falta',
                'cancelado'
            ])->default('agendado');

            $table->timestamp('check_in')->nullable();
            $table->timestamp('check_out')->nullable();

            $table->integer('tempo_permanencia_minutos')->nullable();

            $table->text('observacoes_aluno')->nullable();
            $table->text('observacoes_instrutor')->nullable();

            $table->integer('nota_aula')->nullable();
            $table->text('comentario_avaliacao')->nullable();

            $table->foreignId('criado_por')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();

            $table->unique(['aula_id', 'aluno_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendamentos');
    }
};
