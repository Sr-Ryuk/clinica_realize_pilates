<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContatoEmergencia;
use App\Models\Aluno;

class ContatosEmergenciaSeeder extends Seeder
{
    public function run(): void
    {
        ContatoEmergencia::create([
            'aluno_id' => Aluno::first()->id,
            'nome' => 'Ana Maria',
            'parentesco' => 'Mãe',
            'telefone' => '3538110000',
            'celular' => '35999998877',
            'criado_por' => 1
        ]);
    }
}
