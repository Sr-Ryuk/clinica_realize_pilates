<?php

namespace App\Http\Controllers\Instrutor;

use App\Http\Controllers\Controller;

class AnamneseController extends Controller
{
    public function index()
    {
        return view('instrutor.anamneses.index');
    }
}
