<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /*public function authenticated(Request $request)
    {
    // Logic that determines where to send the user
        if($request->user()->hasRole('aluno')){
            return redirect('/alunos');
        }
        if($request->user()->hasRole('professor')){
            return redirect('/professor/home');
        }
        if($request->user()->hasRole('operador')){
            return redirect('/operador/home');
        }
        if($request->user()->hasRole('admin')){
            return redirect('/administrador/home');
        }
    }*/

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /*public function authenticated(Request $request)
    {
         // Logic that determines where to send the user
        if($request->user()->hasRole('aluno')){
            return redirect('/home');
        }
        if($request->user()->hasRole('administrador')){
            return redirect('/administradores/home');
        }
        if($request->user()->hasRole('operador')){
            return redirect('/operadores/home');
        }
        if($request->user()->hasRole('professor')){
            return redirect('/professores/home');
        }
    }*/

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
