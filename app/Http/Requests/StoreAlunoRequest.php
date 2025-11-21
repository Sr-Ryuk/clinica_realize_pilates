<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlunoRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nome' => 'required|string|max:120',
            'email' => 'nullable|email|max:255',
            'telefone' => 'nullable|string|max:20',
            'data_nascimento' => 'nullable|date',
            'status' => 'required|in:ativo,inativo',
        ];
    }
}
