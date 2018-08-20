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

class CertificadoController extends Controller
{
    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->middleware('aluno');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();
 
    	return \PDF::loadView('certificados.index', compact('cursos'))
                // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
                ->download('nome-arquivo-pdf-gerado.pdf');

    }

}