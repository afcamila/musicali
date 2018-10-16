<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Response;

class AlunoMiddleware
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
        if ($request->user() && !Auth::user()->hasRole('aluno'))
        {
            return new Response(view('unauthorized')->with('role', 'ALUNO'));
        }
        return $next($request);
    }
}
