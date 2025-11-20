<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Anamnese;
use App\Models\Aluno;
use App\Models\Instrutor;
use App\Models\User;

class AnamneseSeeder extends Seeder
{
    public function run(): void
    {
        // Buscar registros necessários
        $admin = User::where('role', 'admin')->first();
        $aluno = Aluno::first();
        $instrutor = Instrutor::first();

        // Garantir integridade
        if (!$aluno || !$instrutor || !$admin) {
            return; // evita crash caso seeds rodem fora de ordem
        }

        // Criar ou atualizar anamnese do aluno
        Anamnese::updateOrCreate(
            ['aluno_id' => $aluno->id], // chave única por aluno
            [
                'instrutor_id' => $instrutor->id,
                'peso' => 68.5,
                'altura' => 1.72,
                'observacoes' => 'Aluno saudável, sem limitações.',
                'criado_por' => $admin->id,
            ]
        );
    }
}
