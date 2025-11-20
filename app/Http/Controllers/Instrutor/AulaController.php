<?php

namespace App\Http\Controllers\Instrutor;

use App\Http\Controllers\Controller;

class AulaController extends Controller
{
    public function index()
    {
        return view('instrutor.aulas.index');
    }
}
