<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Instrutor;
use App\Models\User;

class InstrutorSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::where('role', 'admin')->first();

        $user = User::updateOrCreate(
            ['email' => 'instrutor@clinica.com'],
            [
                'name' => 'Maria Instrutora',
                'password' => Hash::make('12345678'),
                'role' => 'instrutor',
                'email_verified_at' => now()
            ]
        );

        Instrutor::updateOrCreate(
            ['usuario_id' => $user->id],
            [
                'nome' => 'Maria Instrutora',
                'cpf' => '111.222.333-44',
                'celular' => '35999998888',
                'email' => $user->email,
                'data_nascimento' => '1990-01-10',
                'sexo' => 'F',
                'especialidades' => json_encode(['Pilates Clínico', 'Reabilitação']),
                'valor_hora_aula' => 50,
                'criado_por' => $admin->id,
            ]
        );
    }
}
