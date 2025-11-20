<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstrutorController extends Controller
{
    public function index()
    {
        return view('admin.instrutores.index');
    }

    public function create()
    {
        return view('admin.instrutores.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('admin.instrutores.show', compact('id'));
    }

    public function edit($id)
    {
        return view('admin.instrutores.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
