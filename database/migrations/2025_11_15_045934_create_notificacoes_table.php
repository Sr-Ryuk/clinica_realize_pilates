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
        Schema::create('notificacoes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('usuario_id')->constrained('users')->cascadeOnDelete();

            $table->string('titulo', 200);
            $table->text('mensagem');

            $table->enum('tipo', [
                'info',
                'warning',
                'error',
                'success',
                'reminder'
            ])->default('info');

            $table->boolean('lida')->default(false);
            $table->timestamp('data_leitura')->nullable();

            $table->string('acao_url', 500)->nullable();

            $table->enum('prioridade', ['baixa', 'media', 'alta'])->default('media');

            $table->timestamp('data_expiracao')->nullable();
            $table->timestamp('data_envio')->useCurrent();

            $table->timestamps();

            $table->index('usuario_id');
            $table->index('lida');
            $table->index('data_envio');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificacoes');
    }
};
