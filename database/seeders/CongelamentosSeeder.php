<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Congelamento;
use App\Models\Matricula;

class CongelamentosSeeder extends Seeder
{
    public function run(): void
    {
        Congelamento::create([
            'matricula_id' => Matricula::first()->id,
            'data_inicio' => now()->toDateString(),
            'data_fim' => now()->addDays(10)->toDateString(),
            'motivo' => 'Viagem de férias.',
            'criado_por' => 1
        ]);
    }
}
