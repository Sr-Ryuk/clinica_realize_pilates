<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ListaEspera;
use App\Models\Aula;
use App\Models\Aluno;
use App\Models\Matricula;
use App\Models\User;

class ListaEsperaSeeder extends Seeder
{
    public function run(): void
    {
        // Buscar dependências
        $admin = User::where('role', 'admin')->first();
        $aluno = Aluno::first();
        $aula = Aula::first();
        $matricula = Matricula::first();

        // Evita erro caso falte dependência
        if (!$admin || !$aluno || !$aula || !$matricula) {
            return;
        }

        ListaEspera::updateOrCreate(
            [
                'aula_id' => $aula->id,
                'aluno_id' => $aluno->id,
            ],
            [
                'matricula_id' => $matricula->id,
                'prioridade' => 1,
                'status' => 'ativa',
                'criado_por' => $admin->id,
            ]
        );
    }
}
