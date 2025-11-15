<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matricula;
use App\Models\Aluno;
use App\Models\Plano;

class MatriculasSeeder extends Seeder
{
    public function run(): void
    {
        $aluno = Aluno::first();
        $plano = Plano::first();

        Matricula::create([
            'aluno_id' => $aluno->id,
            'plano_id' => $plano->id,

            'data_inicio' => now()->toDateString(),
            'data_primeiro_vencimento' => now()->addDays(5)->toDateString(),
            'dia_vencimento' => 10,

            'valor_mensal' => $plano->valor_mensal,
            'valor_final' => $plano->valor_mensal,

            'aulas_contratadas' => $plano->total_aulas_mes,
            'instrutor_preferencial_id' => null,

            'status' => 'ativa',
            'criado_por' => 1,
        ]);
    }
}
