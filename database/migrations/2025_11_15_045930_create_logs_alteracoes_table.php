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
        Schema::create('logs_alteracoes', function (Blueprint $table) {
            $table->id();

            $table->string('tabela_afetada', 50);
            $table->unsignedBigInteger('registro_id');

            $table->enum('acao', ['INSERT', 'UPDATE', 'DELETE']);

            $table->json('dados_anteriores')->nullable();
            $table->json('dados_novos')->nullable();

            $table->foreignId('usuario_id')->nullable()->constrained('users')->nullOnDelete();

            $table->string('ip', 45)->nullable();
            $table->text('user_agent')->nullable();

            $table->timestamp('data_alteracao')->useCurrent();

            $table->timestamps();

            // índices úteis
            $table->index('tabela_afetada');
            $table->index('registro_id');
            $table->index('data_alteracao');
            $table->index('usuario_id');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs_alteracoes');
    }
};
