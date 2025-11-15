<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Equipamento;

class EquipamentosSeeder extends Seeder
{
    public function run(): void
    {
        Equipamento::create([
            'codigo' => 'EQ001',
            'nome' => 'Reformer',
            'tipo' => 'reformer',
            'marca' => 'Metalife',
            'modelo' => 'Pro Max',
            'data_aquisicao' => '2022-06-10',
            'valor_aquisicao' => 12000,
            'sala_id' => 1,
            'status' => 'disponivel',
            'criado_por' => 1,
        ]);
    }
}
