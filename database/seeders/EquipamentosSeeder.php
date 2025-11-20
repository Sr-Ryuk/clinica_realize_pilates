<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Equipamento;
use App\Models\Sala;
use App\Models\User;

class EquipamentosSeeder extends Seeder
{
    public function run(): void
    {
        // Buscar admin real e sala existente
        $admin = User::where('role', 'admin')->first();
        $sala = Sala::first();

        // Evita crash caso falte prerequisitos
        if (!$admin || !$sala) {
            return;
        }

        // Criar ou atualizar equipamento
        Equipamento::updateOrCreate(
            ['codigo' => 'EQ001'], // chave única recomendada
            [
                'nome' => 'Reformer',
                'tipo' => 'reformer',
                'marca' => 'Metalife',
                'modelo' => 'Pro Max',
                'data_aquisicao' => '2022-06-10',
                'valor_aquisicao' => 12000,
                'sala_id' => $sala->id,
                'status' => 'disponivel',
                'criado_por' => $admin->id,
            ]
        );
    }
}
