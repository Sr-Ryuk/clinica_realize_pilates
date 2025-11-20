<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Congelamento;
use App\Models\Matricula;
use App\Models\User;

class CongelamentosSeeder extends Seeder
{
    public function run(): void
    {
        // Buscar administrador real
        $admin = User::where('role', 'admin')->first();

        // Buscar matrícula
        $matricula = Matricula::first();

        // Evita crash caso seeds rodem fora de ordem
        if (!$matricula || !$admin) {
            return;
        }

        // Criar ou atualizar congelamento da matrícula
        Congelamento::updateOrCreate(
            ['matricula_id' => $matricula->id], // chave única por matrícula
            [
                'data_inicio' => now()->toDateString(),
                'data_fim' => now()->addDays(10)->toDateString(),
                'motivo' => 'Viagem de férias.',
                'criado_por' => $admin->id,
            ]
        );
    }
}
