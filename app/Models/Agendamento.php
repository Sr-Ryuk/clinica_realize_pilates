<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $table = 'agendamentos';

    protected $fillable = [
        'aula_id',
        'aluno_id',
        'matricula_id',
        'instrutor_id',
        'data',
        'hora_inicio',
        'hora_fim',
        'status',
        'presenca',
        'observacoes'
    ];

    protected $casts = [
        'data' => 'date',
        'presenca' => 'boolean',
    ];

    public function aula()
    {
        return $this->belongsTo(Aula::class);
    }

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function matricula()
    {
        return $this->belongsTo(Matricula::class);
    }

    public function instrutor()
    {
        return $this->belongsTo(Instrutor::class);
    }
}
