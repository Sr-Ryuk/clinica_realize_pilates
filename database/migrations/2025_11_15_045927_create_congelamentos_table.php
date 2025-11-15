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
        Schema::create('congelamentos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('matricula_id')->constrained('matriculas')->cascadeOnDelete();

            $table->date('data_inicio');
            $table->date('data_fim');

            $table->text('motivo');

            $table->foreignId('aprovado_por')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('data_aprovacao')->nullable();

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
        Schema::dropIfExists('congelamentos');
    }
};
