<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Response;

class AdministradorOperadorMiddleware
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
        if ($request->user() && !Auth::user()->hasRole('operador') && !Auth::user()->hasRole('administrador'))
        {
            return new Response(view('unauthorized')->with('role', 'OPERADOR'));
        }
        return $next($request);
    }
}
