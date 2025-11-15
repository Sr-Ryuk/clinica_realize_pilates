<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table = 'matriculas';

    protected $fillable = [
        'aluno_id',
        'plano_id',
        'instrutor_preferencial_id',
        'data_inicio',
        'data_fim',
        'status',
        'observacoes',
        'criado_por'
    ];

    protected $casts = [
        'data_inicio' => 'date',
        'data_fim' => 'date',
    
        'horarios_preferenciais' => 'array',
    ];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function plano()
    {
        return $this->belongsTo(Plano::class);
    }

    public function instrutorPreferencial()
    {
        return $this->belongsTo(Instrutor::class, 'instrutor_preferencial_id');
    }

    public function mensalidades()
    {
        return $this->hasMany(Mensalidade::class);
    }

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class);
    }
}
