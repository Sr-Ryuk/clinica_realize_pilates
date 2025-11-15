<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $table = 'aulas';

    protected $fillable = [
        'sala_id',
        'instrutor_id',
        'modalidade',
        'dia_semana',
        'hora_inicio',
        'hora_fim',
        'capacidade_maxima',
        'ativa'
    ];

    protected $casts = [
        'ativa' => 'boolean',
    
        'equipamentos_necessarios' => 'array',
    ];

    public function sala()
    {
        return $this->belongsTo(Sala::class);
    }

    public function instrutor()
    {
        return $this->belongsTo(Instrutor::class);
    }

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class, 'aula_id');
    }
}
