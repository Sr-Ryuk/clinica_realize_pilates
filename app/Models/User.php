<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function aluno(): HasOne
    {
        return $this->hasOne(Aluno::class, 'user_id', 'id');
    }

    public function instrutor(): HasOne
    {
        return $this->hasOne(Instrutor::class, 'usuario_id', 'id');
    }
}
