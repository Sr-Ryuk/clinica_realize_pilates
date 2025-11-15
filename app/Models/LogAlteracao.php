<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogAlteracao extends Model
{
    protected $table = 'logs_alteracoes';

    protected $fillable = [
        'usuario_id',
        'entidade',
        'entidade_id',
        'acao',
        'dados_antigos',
        'dados_novos',
        'ip',
        'user_agent'
    ];

    protected $casts = [
        'dados_antigos' => 'array',
        'dados_novos' => 'array',
    
        'dados_anteriores' => 'array',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
