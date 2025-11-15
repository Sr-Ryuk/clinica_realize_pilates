<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $table = 'salas';

    protected $fillable = [
        'nome',
        'capacidade',
        'descricao',
        'equipamentos',
    ];

    protected $casts = [
        'equipamentos' => 'array',
    ];

    public function aulas()
    {
        return $this->hasMany(Aula::class);
    }
}
