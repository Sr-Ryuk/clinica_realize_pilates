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
        Schema::create('equipamentos', function (Blueprint $table) {
            $table->id();

            $table->string('codigo')->unique();
            $table->string('nome');
            $table->enum('tipo', [
                'reformer',
                'cadillac',
                'chair',
                'barrel',
                'ladder_barrel',
                'spine_corrector',
                'magic_circle',
                'bola_suica',
                'rolo',
                'faixa_elastica',
                'outros'
            ]);

            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('numero_serie')->nullable();

            $table->text('descricao')->nullable();
            $table->json('especificacoes')->nullable();
            $table->decimal('capacidade_peso', 6, 2)->nullable();

            $table->date('data_aquisicao')->nullable();
            $table->decimal('valor_aquisicao', 10, 2)->nullable();
            $table->string('fornecedor')->nullable();
            $table->string('nota_fiscal')->nullable();

            $table->foreignId('sala_id')->nullable()->constrained('salas')->nullOnDelete();
            $table->string('posicao')->nullable();

            $table->date('data_ultima_manutencao')->nullable();
            $table->date('proxima_manutencao')->nullable();

            $table->integer('periodicidade_manutencao_dias')->default(180);

            $table->string('responsavel_manutencao')->nullable();

            $table->enum('status', ['disponivel', 'em_uso', 'manutencao', 'inativo'])
                ->default('disponivel');

            $table->text('motivo_inativacao')->nullable();
            $table->integer('vida_util_anos')->nullable();

            $table->foreignId('uso_exclusivo_instrutor')->nullable()->constrained('instrutores')->nullOnDelete();

            $table->boolean('requer_treinamento')->default(false);

            $table->text('observacoes')->nullable();
            $table->string('manual_url')->nullable();

            $table->json('fotos')->nullable();

            $table->boolean('ativo')->default(true);

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
        Schema::dropIfExists('equipamentos');
    }
};
