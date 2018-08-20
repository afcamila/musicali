<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Curso;
use App\Modulo;
use App\Aula;
use App\Test;
use App\Gabarito;
use Auth;

class AlunoController extends Controller
{
    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->middleware('aluno');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function meusCursos()
    {
        $aluno = Auth::user()->id;

        //$cursos = Curso::with('users')->find($aluno)->first()->pivot;
        //$cursos = Curso::with('users')->get()->find($aluno)->users->first()->pivot;
        //$cursos = Curso::with('users')->first();
        //$cursos = Curso::with('users')->get()->find($aluno)->first()->pivot;
        /*$cursos = Curso::whereHas('users', function($r) use ($aluno)
        {
            $r->where('user_id', $aluno);
        })->first();*/

        //$cursos = Auth::user()->with('cursos')->get();

        //$cursos = Curso::with('users')->where('user_id', $aluno)->first();
        //dd($cursos);

        $aluno = Auth::user()->id;

        $cursos = Curso::whereHas('users', function($r) use ($aluno)
        {
            $r->where('user_id', $aluno);
        })->get();
        
        $total = 30;

        $progresso = 0;
        
        //dd($progresso);

        //$cursos = $aluno->with('Cursos')->get();
        //dd($cursos);

        return view('alunos/cursos/meuscursos', ['cursos' => $cursos, 'progresso' => $progresso, 'total' => $total]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showCurso($id)
    {
        $curso = Curso::findOrFail($id);
        
        $modulos = Modulo::with('cursos')->find($id)->get();

        return view('alunos/cursos/show', ['curso' => $curso, 'modulos' => $modulos]);
    }  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showModulo($id)
    {
        $modulo = Modulo::findOrFail($id);
        
        $aulas = Aula::with('modulos')->find($id)->get();

        return view('alunos/cursos/modulos/show', ['modulo' => $modulo, 'aulas' => $aulas]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function meusPremios()
    {
        $aluno = Auth::user()->id;

        $cursos = Curso::whereHas('users', function($r) use ($aluno)
        {
            $r->where('user_id', $aluno);
        })->get();
        //dd($cursos);

        $total = 30;

        $progresso = Gabarito::where('is_correct', true)->where('user_id', $aluno)->count();
        //dd($progresso);

        if($progresso == $total)
        {
            $premios = 0;
        }

        return view('premios/index', ['premios' => $premios]);
    }

}
