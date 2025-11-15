<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Instrutor;
use App\Models\User;

class InstrutorSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::firstOrCreate(
            ['email' => 'instrutor@clinica.com'],
            [
                'name' => 'Maria Instrutora',
                'password' => bcrypt('12345678'),
                'role' => 'instrutor'
            ]
        );

        Instrutor::firstOrCreate([
            'cpf' => '111.222.333-44',
        ], [
            'usuario_id' => $user->id,
            'nome' => 'Maria Instrutora',
            'celular' => '35999998888',
            'email' => $user->email,
            'data_nascimento' => '1990-01-10',
            'sexo' => 'F',
            'especialidades' => ['Pilates Clínico', 'Reabilitação'],
            'valor_hora_aula' => 50,
            'criado_por' => 1,
        ]);
    }
}
