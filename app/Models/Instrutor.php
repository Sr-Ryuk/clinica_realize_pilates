<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Instrutor extends Model
{
    protected $table = 'instrutores';

    protected $fillable = [
        'uuid',
        'usuario_id',
        'nome',
        'cpf',
        'rg',
        'telefone',
        'celular',
        'email',
        'data_nascimento',
        'sexo',
        'crefito',
        'registro_profissional',
        'data_registro',
        'especialidades',
        'certificacoes',
        'formacao_academica',
        'experiencia_anos',
        'modalidades',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado',
        'cep',
        'data_admissao',
        'data_demissao',
        'salario_base',
        'comissao_percentual',
        'forma_pagamento',
        'pix_chave',
        'banco',
        'agencia',
        'conta',
        'carga_horaria_semanal',
        'valor_hora_aula',
        'cor_agenda',
        'permite_agendamento_online',
        'observacoes',
        'documentos',
        'foto_url',
        'ativo',
        'motivo_inativacao',
        'criado_por',
        'atualizado_por'
    ];

    protected static function booted()
    {
        static::creating(function ($instrutor) {
            if (!$instrutor->uuid) {
                $instrutor->uuid = Str::uuid()->toString();
            }
        });
    }

    protected $casts = [
        'data_nascimento' => 'date',
        'data_admissao' => 'date',
        'data_registro' => 'date',
        'data_demissao' => 'date',
        'especialidades' => 'array',
        'certificacoes' => 'array',
        'formacao_academica' => 'array',
        'modalidades' => 'array',
        'documentos' => 'array',
        'ativo' => 'boolean',
    ];

    public function aulas()
    {
        return $this->hasMany(Aula::class);
    }
}
