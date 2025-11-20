<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    public function index()
    {
        return view('admin.agendamentos.index');
    }

    public function create()
    {
        return view('admin.agendamentos.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('admin.agendamentos.show', compact('id'));
    }

    public function destroy($id)
    {
        //
    }
}
