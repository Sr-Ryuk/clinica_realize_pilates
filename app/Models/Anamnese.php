<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anamnese extends Model
{
    protected $table = 'anamnese';

    protected $fillable = [
        'aluno_id',
        'instrutor_id',
        'data_avaliacao',
        'peso',
        'altura',
        'circunferencia_cintura',
        'circunferencia_quadril',
        'avaliacao_postural',
        'testes_fisicos',
        'restricoes',
        'observacoes',
        'proxima_avaliacao',
        'criado_por'
    ];

    protected $casts = [
        'data_avaliacao' => 'date',
        'proxima_avaliacao' => 'date',
        'avaliacao_postural' => 'array',
        'testes_fisicos' => 'array',
        'restricoes' => 'array',
    ];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function instrutor()
    {
        return $this->belongsTo(Instrutor::class);
    }
}
