<?php

namespace App\Enums;

enum UserRole: string
{
    case ADMIN = 'admin';
    case INSTRUTOR = 'instrutor';
    case ALUNO = 'aluno';
}
