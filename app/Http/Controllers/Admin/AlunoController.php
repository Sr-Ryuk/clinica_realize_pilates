<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return view('admin.alunos.index');
    }

    public function create()
    {
        return view('admin.alunos.create');
    }

    public function store(Request $request)
    {
        // futuramente → chamar CreateAlunoAction
    }

    public function show($id)
    {
        return view('admin.alunos.show', compact('id'));
    }

    public function edit($id)
    {
        return view('admin.alunos.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // futuramente → chamar UpdateAlunoAction
    }

    public function destroy($id)
    {
        // futuramente → chamar DeleteAlunoAction
    }
}
