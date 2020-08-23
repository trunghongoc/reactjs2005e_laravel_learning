<?php

namespace App\Http\Middleware;

use Closure;

class AuthJWT
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            return $next($request);
        } else {
            return response()->json([
                'message' => 'You are should be login before access this route'
            ]);
        }
    }
}
