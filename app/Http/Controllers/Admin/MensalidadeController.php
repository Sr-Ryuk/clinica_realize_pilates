<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class MensalidadeController extends Controller
{
    public function index()
    {
        return view('admin.mensalidades.index');
    }
}
