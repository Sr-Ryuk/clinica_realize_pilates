<?php

namespace App\Http\Controllers\Aluno;

use App\Http\Controllers\Controller;

class FinanceiroController extends Controller
{
    public function index()
    {
        return view('aluno.mensalidades.index');
    }
}
