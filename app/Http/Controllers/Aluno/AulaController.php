<?php

namespace App\Http\Controllers\Aluno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    public function index()
    {
        return view('aluno.aulas.index');
    }

    public function agendar($id)
    {
        //
    }

    public function cancelar($id)
    {
        //
    }
}
