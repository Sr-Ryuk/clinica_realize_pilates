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
        Schema::create('salas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('capacidade');
            $table->text('descricao')->nullable();
            $table->json('equipamentos')->nullable();
            $table->json('recursos')->nullable();
            $table->string('localizacao')->nullable();
            $table->string('cor_agenda', 7)->default('#4CAF50');
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
        Schema::dropIfExists('salas');
    }
};
