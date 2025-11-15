<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ManutencaoEquipamento extends Model
{
    protected $table = 'manutencoes_equipamentos';

    protected $fillable = [
        'equipamento_id',
        'data_manutencao',
        'tipo',
        'descricao',
        'custo',
        'responsavel',
        'status',
        'proxima_manutencao',
        'observacoes',
        'criado_por'
    ];

    protected $casts = [
        'data_manutencao' => 'date',
        'proxima_manutencao' => 'date',
        'custo' => 'decimal:2',
    
        'pecas_trocadas' => 'array',
    ];

    public function equipamento()
    {
        return $this->belongsTo(Equipamento::class);
    }
}
