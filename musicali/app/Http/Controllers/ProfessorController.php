<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Curso;
use App\Modulo;
use App\Aula;
use Auth;

class ProfessorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('professor');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function meusCursos()
    {
        $professor = Auth::user()->id;

        //$cursos = Curso::with('users')->find($professor)->get();
        $cursos = Curso::whereHas('users', function($r) use ($professor)
        {
            $r->where('user_id', $professor);
        })->get();
        

        return view('professores/cursos/meuscursos', ['cursos' => $cursos]);
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

        return view('professores/cursos/show', ['curso' => $curso, 'modulos' => $modulos]);
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

        return view('professores/cursos/modulos/show', ['modulo' => $modulo, 'aulas' => $aulas]);
    }

}