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
use App\Premio;
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
    public function showPremio($id)
    {
        $user = Auth::user()->id;

        $progresso = Gabarito::where('user_id', $user)->where('curso_id', $id)->count();

        $premios = Premio::with('cursos')->find($id)->get();

        return view('alunos/premios/show', ['premios' => $premios, 'progresso' => $progresso]);
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

        return view('alunos/premios/meuspremios', ['cursos' => $cursos, 'progresso' => $progresso, 'total' => $total]);

        
    }

}
