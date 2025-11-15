<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aluno;

class DashboardController extends Controller
{
    public function index()
    {
        $alunosAtivos = Aluno::where('ativo', 1)->count();

        return view('admin.dashboard', compact('alunosAtivos'));
    }
}
