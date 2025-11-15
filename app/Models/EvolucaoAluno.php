<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EvolucaoAluno extends Model
{
    protected $table = 'evolucao_aluno';

    protected $fillable = [
        'aluno_id',
        'instrutor_id',
        'data_avaliacao',
        'tipo_avaliacao',
        'peso',
        'altura',
        'flexibilidade',
        'forca_muscular',
        'resistencia',
        'equilibrio',
        'postura',
        'nivel_dor',
        'localizacao_dor',
        'qualidade_sono',
        'nivel_energia',
        'objetivos_atingidos',
        'novos_objetivos',
        'observacoes_instrutor',
        'observacoes_aluno',
        'recomendacoes',
        'criado_por'
    ];

    protected $casts = [
        'data_avaliacao' => 'date',
        'flexibilidade' => 'array',
        'forca_muscular' => 'array',
        'resistencia' => 'array',
        'equilibrio' => 'array',
        'postura' => 'array',
        'localizacao_dor' => 'array',
        'objetivos_atingidos' => 'array',
        'novos_objetivos' => 'array',
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
