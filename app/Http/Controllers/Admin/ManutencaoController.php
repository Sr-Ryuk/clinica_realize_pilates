<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManutencaoController extends Controller
{
    public function index()
    {
        return view('admin.manutencoes.index');
    }

    public function create()
    {
        return view('admin.manutencoes.create');
    }

    public function store(Request $request) {}

    public function edit($id)
    {
        return view('admin.manutencoes.edit', compact('id'));
    }

    public function update(Request $request, $id) {}

    public function destroy($id) {}
}
