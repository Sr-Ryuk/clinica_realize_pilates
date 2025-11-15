<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agendamento;
use App\Models\Aula;
use App\Models\Aluno;
use App\Models\Matricula;

class AgendamentosSeeder extends Seeder
{
    public function run(): void
    {
        Agendamento::create([
            'aula_id' => Aula::first()->id,
            'aluno_id' => Aluno::first()->id,
            'matricula_id' => Matricula::first()->id,
            'status' => 'confirmado',
            'criado_por' => 1
        ]);
    }
}
