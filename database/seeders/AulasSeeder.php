<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Aula;
use App\Models\Sala;
use App\Models\Instrutor;
use App\Models\User;

class AulasSeeder extends Seeder
{
    public function run(): void
    {
        // Buscar admin, sala e instrutor
        $admin = User::where('role', 'admin')->first();
        $sala = Sala::first();
        $instrutor = Instrutor::first();

        // Validar dependências
        if (!$admin || !$sala || !$instrutor) {
            return;
        }

        // Criar/atualizar aula
        Aula::updateOrCreate(
            [
                // chave única recomendada
                'data_aula' => now()->toDateString(),
                'horario_inicio' => '08:00',
                'instrutor_id' => $instrutor->id,
            ],
            [
                'uuid' => Str::uuid(),

                'horario_fim' => '09:00',
                'duracao_minutos' => 60,
                'sala_id' => $sala->id,

                'tipo_aula' => 'grupo',
                'modalidade' => 'Pilates Solo',

                'vagas_total' => 6,
                'vagas_ocupadas' => 0,

                'status' => 'agendada',
                'criado_por' => $admin->id,
            ]
        );
    }
}
