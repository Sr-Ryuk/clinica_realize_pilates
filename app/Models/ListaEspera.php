<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListaEspera extends Model
{
    protected $table = 'lista_espera';

    protected $fillable = [
        'aluno_id',
        'aula_id',
        'data',
        'status',
        'observacoes'
    ];

    protected $casts = [
        'data' => 'date',
    ];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function aula()
    {
        return $this->belongsTo(Aula::class);
    }
}
