<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Congelamento extends Model
{
    protected $table = 'congelamentos';

    protected $fillable = [
        'aluno_id',
        'matricula_id',
        'data_inicio',
        'data_fim',
        'motivo',
        'status',
        'criado_por'
    ];

    protected $casts = [
        'data_inicio' => 'date',
        'data_fim' => 'date',
    ];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function matricula()
    {
        return $this->belongsTo(Matricula::class);
    }
}
