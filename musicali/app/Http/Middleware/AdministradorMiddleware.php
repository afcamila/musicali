<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Response;

class AdministradorMiddleware
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
        //dd($request->user());
        if ($request->user() && !Auth::user()->hasRole('administrador'))
        {
            return new Response(view('unauthorized')->with('role', 'ADMINISTRADOR'));
        }
        return $next($request);
    }
}
