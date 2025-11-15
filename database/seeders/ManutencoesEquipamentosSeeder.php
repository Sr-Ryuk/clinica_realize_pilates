<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ManutencaoEquipamento;
use App\Models\Equipamento;

class ManutencoesEquipamentosSeeder extends Seeder
{
    public function run(): void
    {
        ManutencaoEquipamento::create([
            'equipamento_id' => Equipamento::first()->id,
            'tipo' => 'preventiva',
            'data_manutencao' => '2025-01-10',
            'descricao' => 'Lubrificação geral e ajuste de molas.',
            'proxima_manutencao' => '2025-07-10',
            'criado_por' => 1
        ]);
    }
}
