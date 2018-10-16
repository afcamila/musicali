<?php

namespace App\Http\Controllers\AdministradorOperador;

use Illuminate\Http\Request;
use App\Modulo;
use App\Curso;
use App\Aula;

class ModuloController extends Controller
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
    public function index($id)
    {
        $modulos = Curso::whereHas('cursos', function($r)
        {
            $r->where('id', $id);
        })->get();
        return view('modulos/index')->with('modulos', $modulos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $curso = Curso::findOrFail($id);   
        return view('cursos/modulos/create')->with('curso', $curso);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //dd($request->all());
        //$role_curso = Curso::where('id', $id)->first();
        $modulo = Modulo::create($request->all());
        //dd($modulo);
        $modulo->save();
        $modulo->cursos()->attach($id);
        return redirect()->route('cursosmodulos', ['id' => $id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $modulo = Modulo::findOrFail($id);
        $aulas = Aula::whereHas('modulos', function($r) use ($id)
        {
            $r->where('modulo_id', $id);
        })->get();
        return view('cursos/modulos/show', ['modulo' => $modulo, 'aulas' => $aulas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modulo = Modulo::find($id);
        return view('cursos/modulos/edit')->with('modulo', $modulo);
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
        $modulo = Modulo::find($id);
        $input = $request->all();
        $modulo->update($input);

        $modulo->save();

       return redirect()->route('cursosmodulosid', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Modulo::destroy($id);
        return redirect('/modulos');
    }
}