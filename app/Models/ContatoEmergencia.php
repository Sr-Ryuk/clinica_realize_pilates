<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContatoEmergencia extends Model
{
    protected $table = 'contatos_emergencia';

    protected $fillable = [
        'aluno_id',
        'nome',
        'parentesco',
        'telefone',
        'celular',
        'observacoes',
        'criado_por'
    ];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }
}
