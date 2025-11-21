<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAlunoRequest;
use App\Http\Requests\UpdateAlunoRequest;
use App\Services\AlunoService;

class AlunoController extends Controller
{
    protected $service;

    public function __construct(AlunoService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $alunos = $this->service->listar();
        return view('admin.alunos.index', compact('alunos'));
    }

    /**
     * CREATE → não usa mais view própria
     * (é feito via modal no index)
     */
    public function create()
    {
        abort(404); // opcional, só pra evitar uso indevido
    }

    public function store(StoreAlunoRequest $request)
    {
        $this->service->criar($request->validated());

        return redirect()
            ->route('admin.alunos.index')
            ->with('success', 'Aluno cadastrado com sucesso!');
    }

    /**
     * SHOW → usado pelo modal de edição (AJAX)
     * retorna APENAS o partial do formulário
     */
    public function show($id)
    {
        $aluno = $this->service->buscar($id);

        return view('admin.alunos.partials.form', compact('aluno'));
    }

    /**
     * EDIT → não usa mais view própria
     */
    public function edit($id)
    {
        abort(404); // evitar acesso direto por URL
    }

    public function update(UpdateAlunoRequest $request, $id)
    {
        $this->service->atualizar($id, $request->validated());

        return redirect()
            ->route('admin.alunos.index')
            ->with('success', 'Aluno atualizado!');
    }

    public function destroy($id)
    {
        $this->service->deletar($id);

        return redirect()
            ->route('admin.alunos.index')
            ->with('success', 'Aluno removido!');
    }
}
