<?php

namespace App\Services;

use App\Models\Aluno;
use Illuminate\Support\Facades\DB;

class AlunoService
{
    public function listar()
    {
        return Aluno::orderBy('nome')->paginate(15);
    }

    public function buscar($id)
    {
        return Aluno::findOrFail($id);
    }

    public function criar(array $data)
    {
        return DB::transaction(function () use ($data) {
            return Aluno::create($data);
        });
    }

    public function atualizar($id, array $data)
    {
        $aluno = $this->buscar($id);

        return DB::transaction(function () use ($aluno, $data) {
            $aluno->update($data);
            return $aluno;
        });
    }

    public function deletar($id)
    {
        $aluno = $this->buscar($id);
        return $aluno->delete();
    }
}
