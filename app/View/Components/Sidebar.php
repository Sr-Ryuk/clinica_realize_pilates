<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
use App\Enums\UserRole;

class Sidebar extends Component
{
    public array $items;

    public function __construct()
    {
        $role = Auth::user()?->role ?? UserRole::ADMIN;

        $this->items = match ($role) {

            UserRole::ADMIN => [
                ['label' => 'Dashboard', 'icon' => 'bi-speedometer2', 'url' => route('dashboard')],
                ['label' => 'Alunos', 'icon' => 'bi-people-fill', 'url' => '#'],
                ['label' => 'Instrutores', 'icon' => 'bi-person-badge-fill', 'url' => '#'],
                ['label' => 'Financeiro', 'icon' => 'bi-cash-stack', 'url' => '#'],
            ],

            UserRole::INSTRUTOR => [
                ['label' => 'Agenda', 'icon' => 'bi-calendar-week', 'url' => '#'],
                ['label' => 'Minhas Turmas', 'icon' => 'bi-people', 'url' => '#'],
            ],

            UserRole::ALUNO => [
                ['label' => 'Aulas', 'icon' => 'bi-calendar3', 'url' => '#'],
                ['label' => 'Pagamentos', 'icon' => 'bi-wallet2', 'url' => '#'],
            ],

            default => [],
        };
    }

    public function render()
    {
        return view('components.sidebar');
    }
}
