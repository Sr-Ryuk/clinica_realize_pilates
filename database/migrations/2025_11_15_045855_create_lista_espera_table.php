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
        Schema::create('lista_espera', function (Blueprint $table) {
            $table->id();

            $table->foreignId('aula_id')->constrained('aulas')->cascadeOnDelete();
            $table->foreignId('aluno_id')->constrained('alunos')->cascadeOnDelete();
            $table->foreignId('matricula_id')->constrained('matriculas');

            $table->integer('prioridade')->default(1);

            $table->enum('status', ['ativa', 'atendida', 'cancelada', 'expirada'])
                ->default('ativa');

            $table->boolean('notificado')->default(false);
            $table->timestamp('data_notificacao')->nullable();

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
        Schema::dropIfExists('lista_espera');
    }
};
