<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agendamento;
use App\Models\Aula;
use App\Models\Aluno;
use App\Models\Matricula;
use App\Models\User;

class AgendamentosSeeder extends Seeder
{
    public function run(): void
    {
        // Buscar dependências
        $admin = User::where('role', 'admin')->first();
        $aluno = Aluno::first();
        $aula = Aula::first();
        $matricula = Matricula::first();

        // Evita erro caso alguma entidade não exista
        if (!$admin || !$aluno || !$aula || !$matricula) {
            return;
        }

        Agendamento::updateOrCreate(
            [
                'aula_id' => $aula->id,
                'aluno_id' => $aluno->id,
            ],
            [
                'matricula_id' => $matricula->id,
                'status' => 'confirmado',
                'criado_por' => $admin->id,
            ]
        );
    }
}
