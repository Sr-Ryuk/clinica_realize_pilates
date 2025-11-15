<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plano;


class PlanosSeeder extends Seeder
{
    public function run(): void
    {
        $planos = [
            [
                'nome' => 'Pilates Individual',
                'descricao' => 'Aulas individuais com instrutor dedicado.',
                'tipo_aula' => 'individual',
                'aulas_por_semana' => 2,
                'total_aulas_mes' => 8,
                'valor_mensal' => 450.00,
            ],
            [
                'nome' => 'Pilates Duo',
                'descricao' => 'Aulas em dupla.',
                'tipo_aula' => 'duo',
                'aulas_por_semana' => 2,
                'total_aulas_mes' => 8,
                'valor_mensal' => 300.00,
            ],
            [
                'nome' => 'Pilates em Grupo',
                'descricao' => 'Aulas em grupo com até 6 alunos.',
                'tipo_aula' => 'grupo',
                'aulas_por_semana' => 2,
                'total_aulas_mes' => 8,
                'valor_mensal' => 200.00,
            ]
        ];

        foreach ($planos as $p) {
            Plano::firstOrCreate(
                ['nome' => $p['nome']],
                array_merge($p, [
                    'duracao_aula'   => 55,
                    'taxa_matricula' => 0,
                    'criado_por'     => 1
                ])
            );
        }
    }
}
