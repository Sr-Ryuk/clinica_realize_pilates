<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = $request->user();

        if (!$user) {
            return redirect()->route('login');
        }

        // Se for enum -> usa value
        // Se for string -> usa direto
        $userRole = is_object($user->role) && property_exists($user->role, 'value')
            ? $user->role->value
            : $user->role;

        if (!in_array($userRole, $roles)) {
            abort(403, 'Acesso negado.');
        }

        return $next($request);
    }
}
