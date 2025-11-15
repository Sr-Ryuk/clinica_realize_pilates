<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sala;

class SalasSeeder extends Seeder
{
    public function run(): void
    {
        $salas = [
            [
                'nome' => 'Sala Principal',
                'capacidade' => 8,
                'descricao' => 'Sala equipada com Reformer, Cadillac, Chair e Barrel.',
                'equipamentos' => ['Reformer', 'Cadillac', 'Chair', 'Barrel'],
            ],
            [
                'nome' => 'Sala Terapia',
                'capacidade' => 4,
                'descricao' => 'Sala para atendimentos individuais e terapêuticos.',
                'equipamentos' => ['Reformer', 'Cadillac'],
            ],
            [
                'nome' => 'Sala Grupo',
                'capacidade' => 12,
                'descricao' => 'Espaço amplo para aulas de grupo e acessórios.',
                'equipamentos' => ['Mat', 'Bola Suíça', 'Rolo', 'Faixas'],
            ],
        ];

        foreach ($salas as $s) {
            Sala::create([
                'nome'         => $s['nome'],
                'capacidade'   => $s['capacidade'],
                'descricao'    => $s['descricao'],
                'equipamentos' => $s['equipamentos'],
                'ativo'        => 1,
                'criado_por'   => 1,
            ]);
        }
    }
}
