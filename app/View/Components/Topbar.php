<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class Topbar extends Component
{
    public string $title;
    public string $userName;

    public function __construct(string $title = 'Painel', string $userName = null)
    {
        $this->title = $title;
        $this->userName = $userName ?? Auth::user()->name;
    }

    public function render()
    {
        return view('components.topbar');
    }
}
