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
        Schema::create('manutencoes_equipamentos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('equipamento_id')->constrained('equipamentos')->cascadeOnDelete();

            $table->enum('tipo', ['preventiva', 'corretiva', 'emergencial']);
            $table->date('data_manutencao');

            $table->text('descricao');
            $table->text('problema_identificado')->nullable();
            $table->text('solucao_aplicada')->nullable();

            $table->json('pecas_trocadas')->nullable();
            $table->decimal('custo', 10, 2)->nullable();

            $table->string('empresa_responsavel')->nullable();
            $table->string('tecnico_responsavel')->nullable();

            $table->date('proxima_manutencao')->nullable();
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
        Schema::dropIfExists('manutencoes_equipamentos');
    }
};
