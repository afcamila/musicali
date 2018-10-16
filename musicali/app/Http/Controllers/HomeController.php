<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Curso;
use App\Aula;
use App\Question;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$request->user()->authorizeRoles(['aluno', 'professor', 'operador', 'administrador']);

        if($request->user()->hasRole('aluno')){
            return view('home');
        }
        else if($request->user()->hasRole('administrador')
            || $request->user()->hasRole('operador')
            || $request->user()->hasRole('professor')){

            $alunos = User::whereHas('roles', function($r)
            {
                $r->where('name', 'aluno');
            })->count();

            $professores = User::whereHas('roles', function($r)
            {
                $r->where('name', 'professor');
            })->count();

            $cursos = Curso::count();

            $aulas = Aula::count();

            $questions = Question::count();


            return view('home', ['alunos' => $alunos, 'professores' => $professores, 'cursos' => $cursos, 'aulas' => $aulas, 'questions' => $questions]);
        }
    }
}
