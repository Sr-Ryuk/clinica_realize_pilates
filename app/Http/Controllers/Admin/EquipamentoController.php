<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EquipamentoController extends Controller
{
    public function index()
    {
        return view('admin.equipamentos.index');
    }

    public function create()
    {
        return view('admin.equipamentos.create');
    }

    public function store(Request $request) {}

    public function edit($id)
    {
        return view('admin.equipamentos.edit', compact('id'));
    }

    public function update(Request $request, $id) {}

    public function destroy($id) {}
}
