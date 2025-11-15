<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ListaEspera;
use App\Models\Aula;
use App\Models\Aluno;
use App\Models\Matricula;

class ListaEsperaSeeder extends Seeder
{
    public function run(): void
    {
        ListaEspera::create([
            'aula_id' => Aula::first()->id,
            'aluno_id' => Aluno::first()->id,
            'matricula_id' => Matricula::first()->id,
            'prioridade' => 1,
            'status' => 'ativa',
            'criado_por' => 1
        ]);
    }
}
