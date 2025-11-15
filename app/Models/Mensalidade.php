<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensalidade extends Model
{
    protected $table = 'mensalidades';

    protected $fillable = [
        'matricula_id',
        'valor',
        'desconto',
        'valor_final',
        'competencia',
        'data_vencimento',
        'data_pagamento',
        'status',
        'metodo_pagamento',
        'observacoes',
        'criado_por'
    ];

    protected $casts = [
        'data_vencimento' => 'date',
        'data_pagamento' => 'date',
        'valor' => 'decimal:2',
        'valor_final' => 'decimal:2',
        'desconto' => 'decimal:2'
    ];

    public function matricula()
    {
        return $this->belongsTo(Matricula::class);
    }
}
