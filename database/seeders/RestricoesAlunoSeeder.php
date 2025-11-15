<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RestricaoAluno;
use App\Models\Aluno;

class RestricoesAlunoSeeder extends Seeder
{
    public function run(): void
    {
        RestricaoAluno::create([
            'aluno_id' => Aluno::first()->id,
            'tipo' => 'leve',
            'prioridade' => 'baixa',
            'descricao' => 'Leve desconforto lombar.',
            'criado_por' => 1
        ]);
    }
}
