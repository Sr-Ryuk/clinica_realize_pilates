<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ManutencaoEquipamento;
use App\Models\Equipamento;
use App\Models\User;

class ManutencoesEquipamentosSeeder extends Seeder
{
    public function run(): void
    {
        // Buscar dependências
        $admin = User::where('role', 'admin')->first();
        $equipamento = Equipamento::first();

        // Evita crash caso algo não exista
        if (!$admin || !$equipamento) {
            return;
        }

        ManutencaoEquipamento::updateOrCreate(
            [
                'equipamento_id' => $equipamento->id,
                'data_manutencao' => '2025-01-10', // chave única ideal
            ],
            [
                'tipo' => 'preventiva',
                'descricao' => 'Lubrificação geral e ajuste de molas.',
                'proxima_manutencao' => '2025-07-10',
                'criado_por' => $admin->id,
            ]
        );
    }
}
