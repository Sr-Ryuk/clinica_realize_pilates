<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EvolucaoAluno;
use App\Models\Aluno;
use App\Models\Instrutor;

class EvolucaoAlunoSeeder extends Seeder
{
    public function run(): void
    {
        EvolucaoAluno::create([
            'aluno_id' => Aluno::first()->id,
            'instrutor_id' => Instrutor::first()->id,
            'tipo_avaliacao' => 'inicial',
            'peso' => 68.5,
            'altura' => 1.72,
            'observacoes_instrutor' => 'Bom alinhamento postural.',
            'criado_por' => 1
        ]);
    }
}
