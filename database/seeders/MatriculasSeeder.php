<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matricula;
use App\Models\Aluno;
use App\Models\Plano;
use App\Models\User;

class MatriculasSeeder extends Seeder
{
    public function run(): void
    {
        // Buscar dependências
        $admin = User::where('role', 'admin')->first();
        $aluno = Aluno::first();
        $plano = Plano::first();

        // Evitar crash caso algo esteja faltando
        if (!$admin || !$aluno || !$plano) {
            return;
        }

        Matricula::updateOrCreate(
            [
                'aluno_id' => $aluno->id, // chave única
            ],
            [
                'plano_id' => $plano->id,

                'data_inicio' => now()->toDateString(),
                'data_primeiro_vencimento' => now()->addDays(5)->toDateString(),
                'dia_vencimento' => 10,

                'valor_mensal' => $plano->valor_mensal,
                'valor_final' => $plano->valor_mensal,

                'aulas_contratadas' => $plano->total_aulas_mes,
                'instrutor_preferencial_id' => null,

                'status' => 'ativa',
                'criado_por' => $admin->id,
            ]
        );
    }
}
