<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';

    protected $fillable = [
        'user_id',
        'nome',
        'cpf',
        'rg',
        'telefone',
        'celular',
        'email',
        'data_nascimento',
        'sexo',
        'endereco',
        'bairro',
        'cidade',
        'estado',
        'cep',
        'objetivo_principal',
        'nivel_pratica',
        'preferencia_instrutor',
        'foto_url',
        'ativo',
        'observacoes',
        'criado_por',
    ];

    protected $casts = [
        'data_nascimento' => 'date',
        'ativo' => 'boolean',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function matriculas()
    {
        return $this->hasMany(Matricula::class);
    }

    public function anamnese()
    {
        return $this->hasMany(Anamnese::class);
    }

    public function evolucao()
    {
        return $this->hasMany(EvolucaoAluno::class);
    }

    public function restricoes()
    {
        return $this->hasMany(RestricaoAluno::class);
    }

    public function congelamentos()
    {
        return $this->hasMany(Congelamento::class);
    }
}
