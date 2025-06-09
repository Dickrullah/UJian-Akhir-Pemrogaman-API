<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Auth\AuthenticationException;

class Authenticate extends Middleware
{
    /**
     * Handle unauthenticated request.
     */
    protected function unauthenticated($request, array $guards)
    {
        throw new AuthenticationException(
            'Unauthenticated.', $guards, $this->redirectTo($request)
        );
    }

    /**
     * Determine where to redirect unauthenticated users.
     */
    protected function redirectTo(Request $request): ?string
    {
        // Jika request berasal dari route API, kirimkan response JSON 401
        if ($request->is('api/*')) {
            abort(response()->json(['message' => 'Unauthorized.'], 401));
        }

        // Jika bukan API, redirect ke halaman login web
        return route('login');
    }
}

