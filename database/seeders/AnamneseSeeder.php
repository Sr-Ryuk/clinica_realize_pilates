<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Anamnese;
use App\Models\Aluno;
use App\Models\Instrutor;

class AnamneseSeeder extends Seeder
{
    public function run(): void
    {
        Anamnese::create([
            'aluno_id' => Aluno::first()->id,
            'instrutor_id' => Instrutor::first()->id,
            'peso' => 68.5,
            'altura' => 1.72,
            'observacoes' => 'Aluno saudável, sem limitações.',
            'criado_por' => 1
        ]);
    }
}
