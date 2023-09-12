<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{

    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Get the authenticated user
        $user = Auth::user();

  

        if (in_array($user->role, $roles)) {
            return $next($request);
        }

        // Redirect or return an error response if the user doesn't have the required role.
        return abort(403, 'Unauthorized. You are logged in as: ' . $user->role);
    }
}
