<?php

namespace App\Http\Middleware;

use Closure;

class UserTypeMiddleware
{
    public function handle($request, Closure $next, $usertype)
    {
        $user = auth()->user();

        if ($user->usertype !== $usertype) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
