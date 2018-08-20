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
use App\Relatorio;
use Excel;
use Auth;

class RelatorioController extends Controller
{
    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->middleware('administrador');
    }

    public function index()
    {
        $relatorios = Relatorio::all();

        return view('relatorios/index')->with('relatorios', $relatorios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::all();
        return view('relatorios/create')->with('cursos', $cursos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $relatorio = new Relatorio();
        $relatorio->name = $request->name;

        //$excel = App::make('excel');
        if($relatorio->name == 'alunos')
        {
            $alunos = $alunos = User::whereHas('roles', function($r)
            {
                $r->where('name', 'aluno');
            })->get();

            $file = Excel::create('Novo Arquivo', function($excel) use($alunos) {
                $excel->sheet('Nova Planilha', function($sheet) use($alunos) {
                    $sheet->loadView('alunos.index')->with('alunos', $alunos);
                });
            });
            $relatorio->file = $file;
        }
        else if($relatorio->name == 'professores')
        {
            $file = Excel::create('Novo Arquivo', function($excel) {
                $excel->sheet('Nova Planilha', function($sheet) {
                    $sheet->loadView('professores.index');
                });
            });
            $relatorio->file = $file;
        }
        else if($relatorio->name == 'operadores')
        {
            $file = Excel::create('Novo Arquivo', function($excel) {
                $excel->sheet('Nova Planilha', function($sheet) {
                    $sheet->loadView('operadores.index');
                });
            });
            $relatorio->file = $file;
        }

        $relatorio->save();

        return redirect('/relatorios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relatorio = Relatorio::findOrFail($id);
        return view('relatorios/show', ['relatorio' => $relatorio]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relatorio = Relatorio::find($id);
        return view('relatorios/edit')->with('relatorio', $relatorio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $relatorio = Relatorio::find($id);
        $input = $request->all();
        $relatorio->update($input);
        //dd($relatorio);

        $relatorio->save();

       return redirect('/relatorios');
    }
}