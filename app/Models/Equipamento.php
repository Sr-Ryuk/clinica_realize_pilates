<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    protected $table = 'equipamentos';

    protected $fillable = [
        'nome',
        'descricao',
        'quantidade',
        'data_aquisicao',
        'vida_util_meses',
        'status',
        'localizacao',
        'observacoes',
        'criado_por'
    ];

    protected $casts = [
        'data_aquisicao' => 'date',
    
        'especificacoes' => 'array',
    
        'fotos' => 'array',
    ];

    public function manutencoes()
    {
        return $this->hasMany(ManutencaoEquipamento::class, 'equipamento_id');
    }
}
