<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class ProfessorMiddleware
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
        if ($request->user() && !Auth::user()->hasRole('professor'))
        {
            return new Response(view('unauthorized')->with('role', 'PROFESSOR'));
        }
        return $next($request);
    }
}
