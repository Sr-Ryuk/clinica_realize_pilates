<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class Topbar extends Component
{
    public string $username;
    public string $avatar;

    public function __construct()
    {
        // Usuário logado (ou null)
        $user = Auth::user();

        // Evita erro se estiver sem usuário (ex: preview de componente)
        $this->username = $user?->name ?? 'Usuário';

        // Avatar baseado no nome
        $this->avatar = "https://ui-avatars.com/api/?name=" . urlencode($this->username);
    }

    public function render()
    {
        return view('admin.components.topbar');
    }
}
