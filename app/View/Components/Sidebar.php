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
        $role = UserRole::tryFrom(Auth::user()?->role ?? 'admin');

        $this->items = match ($role) {

            UserRole::ADMIN => [
                ['label' => 'Dashboard',     'icon' => 'bi-speedometer2',     'url' => route('admin.dashboard')],
                ['label' => 'Alunos',        'icon' => 'bi-people-fill',      'url' => route('admin.alunos.index')],
                ['label' => 'Instrutores',   'icon' => 'bi-person-badge-fill', 'url' => '#'],
                ['label' => 'Financeiro',    'icon' => 'bi-cash-stack',       'url' => '#'],
            ],

            UserRole::INSTRUTOR => [
                ['label' => 'Agenda',        'icon' => 'bi-calendar-week',    'url' => route('instrutor.dashboard')],
                ['label' => 'Minhas Turmas', 'icon' => 'bi-people',           'url' => '#'],
            ],

            UserRole::ALUNO => [
                ['label' => 'Aulas',         'icon' => 'bi-calendar3',        'url' => route('aluno.dashboard')],
                ['label' => 'Pagamentos',    'icon' => 'bi-wallet2',          'url' => '#'],
            ],

            default => [],
        };
    }

    public function render()
    {
        return view('components.sidebar');
    }
}
