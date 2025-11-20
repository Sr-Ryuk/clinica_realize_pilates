<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    public function index()
    {
        return view('admin.aulas.index');
    }

    public function create()
    {
        return view('admin.aulas.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('admin.aulas.show', compact('id'));
    }

    public function edit($id)
    {
        return view('admin.aulas.edit', compact('id'));
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
