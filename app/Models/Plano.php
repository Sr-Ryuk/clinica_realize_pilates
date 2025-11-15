<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    protected $table = 'planos';

    protected $fillable = [
        'nome',
        'descricao',
        'tipo_aula',
        'aulas_por_semana',
        'total_aulas_mes',
        'duracao_aula',
        'permite_reposicao',
        'validade_dias',
        'modalidades_incluidas',
        'valor_mensal',
        'valor_aula_avulsa',
        'taxa_matricula',
        'desconto_semestral',
        'desconto_anual',
        'max_faltas_mes',
        'permite_troca_horario',
        'horas_antecedencia_troca',
        'permite_congelamento',
        'max_congelamentos_ano',
        'dias_minimo_congelamento',
        'dias_maximo_congelamento',
        'nivel_recomendado',
        'idade_minima',
        'idade_maxima',
        'destaque',
        'ordem_exibicao',
        'ativo',
        'data_inicio_vigencia',
        'data_fim_vigencia',
        'criado_por',
        'atualizado_por'
    ];

    protected $casts = [
        'data_inicio_vigencia' => 'date',
        'data_fim_vigencia' => 'date',
        'modalidades_incluidas' => 'array',
        'nivel_recomendado' => 'array',
        'ativo' => 'boolean',
    ];

    public function matriculas()
    {
        return $this->hasMany(Matricula::class);
    }
}
