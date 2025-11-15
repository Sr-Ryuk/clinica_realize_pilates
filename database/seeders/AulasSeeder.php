<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aula;
use App\Models\Sala;
use App\Models\Instrutor;

class AulasSeeder extends Seeder
{
    public function run(): void
    {
        $sala = Sala::first();
        $instrutor = Instrutor::first();

        Aula::create([
            'uuid' => \Str::uuid(),

            'data_aula' => now()->toDateString(),
            'horario_inicio' => '08:00',
            'horario_fim' => '09:00',
            'duracao_minutos' => 60,

            'sala_id' => $sala->id,
            'instrutor_id' => $instrutor->id,

            'tipo_aula' => 'grupo',
            'modalidade' => 'Pilates Solo',

            'vagas_total' => 6,
            'vagas_ocupadas' => 0,

            'status' => 'agendada',
            'criado_por' => 1,
        ]);
    }
}
