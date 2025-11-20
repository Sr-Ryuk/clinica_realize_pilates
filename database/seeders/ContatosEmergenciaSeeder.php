<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContatoEmergencia;
use App\Models\Aluno;
use App\Models\User;

class ContatosEmergenciaSeeder extends Seeder
{
    public function run(): void
    {
        // Buscar o admin real
        $admin = User::where('role', 'admin')->first();

        // Buscar o aluno
        $aluno = Aluno::first();

        // Garantir integridade
        if (!$aluno || !$admin) {
            return; // evita crash caso seeds rodem fora de ordem
        }

        // Criar ou atualizar contato de emergência
        ContatoEmergencia::updateOrCreate(
            ['aluno_id' => $aluno->id], // chave única por aluno
            [
                'nome' => 'Ana Maria',
                'parentesco' => 'Mãe',
                'telefone' => '3538110000',
                'celular' => '35999998877',
                'criado_por' => $admin->id,
            ]
        );
    }
}
