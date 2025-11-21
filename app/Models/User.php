<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    protected $hidden = [
        'password',
    ];

    public function aluno()
    {
        return $this->hasOne(Aluno::class);
    }

    public function instrutor()
    {
        return $this->hasOne(Instrutor::class, 'usuario_id');
    }
}
