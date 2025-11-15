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
        Schema::create('aulas', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();

            $table->date('data_aula');
            $table->time('horario_inicio');
            $table->time('horario_fim');
            $table->integer('duracao_minutos');

            $table->foreignId('sala_id')->constrained('salas')->cascadeOnUpdate();
            $table->foreignId('instrutor_id')->constrained('instrutores')->cascadeOnUpdate();

            $table->enum('tipo_aula', ['individual', 'duo', 'trio', 'grupo']);
            $table->string('modalidade')->nullable();

            $table->integer('vagas_total');
            $table->integer('vagas_ocupadas')->default(0);

            $table->enum('status', [
                'agendada',
                'confirmada',
                'realizada',
                'cancelada',
                'reagendada'
            ])->default('agendada');

            $table->text('motivo_cancelamento')->nullable();
            $table->text('descricao')->nullable();
            $table->json('equipamentos_necessarios')->nullable();
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
        Schema::dropIfExists('aulas');
    }
};
