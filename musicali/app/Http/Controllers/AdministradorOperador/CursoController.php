<?php

namespace App\Http\Controllers\AdministradorOperador;

use Illuminate\Http\Request;
use App\Curso;
use App\Modulo;
use App\User;

class CursoController extends Controller
{
    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->middleware('administradoroperador');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos/index')->with('cursos', $cursos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate([
            'name' => 'required|min:2|max:50',       
            'description' => 'required|min:6',                
        ], [
            'name.required' => 'Digite o nome do curso.',
            'name.min' => 'O nome precisa ter no mínimo 2 caracteres.',
            'name.max' => 'O nome está grande demais.',
            'description.required' => 'Descreva o curso.'
        ]);

        Curso::create($request->all());
        return redirect('/cursos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso = Curso::findOrFail($id);
        $modulos = Modulo::whereHas('cursos', function($r) use ($id)
        {
            $r->where('curso_id', $id);
        })->get();
        return view('cursos/show', ['curso' => $curso,'modulos' => $modulos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso = Curso::find($id);
        return view('cursos/edit')->with('curso', $curso);
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
        $curso = Curso::find($id);
        $input = $request->all();
        $curso->update($input);
        //dd($curso);

        $curso->save();

       return redirect()->route('cursosid', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Curso::destroy($id);
        return redirect('/cursos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showCurso()
    {
        $curso = Curso::findOrFail(1);
        $id = 1;
        //dd($curso);
        $modulos = Modulo::whereHas('cursos', function($r) use ($id)
        {
            $r->where('curso_id', $id);
        })->get();
        
        //dd($modulos);
        return view('alunos/cursos/violao', ['curso' => $curso,'modulos' => $modulos]);
    }
}