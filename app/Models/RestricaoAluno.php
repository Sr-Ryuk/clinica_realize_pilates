<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RestricaoAluno extends Model
{
    protected $table = 'restricoes_aluno';

    protected $fillable = [
        'aluno_id',
        'tipo',
        'descricao',
        'data_registro',
        'ativo',
        'criado_por'
    ];

    protected $casts = [
        'data_registro' => 'date',
        'ativo' => 'boolean',
    ];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }
}
