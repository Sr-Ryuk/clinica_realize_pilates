<?php

namespace App\Http\Controllers\Instrutor;

use App\Http\Controllers\Controller;

class EvolucaoController extends Controller
{
    public function index()
    {
        return view('instrutor.evolucoes.index');
    }
}
