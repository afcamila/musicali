<?php

namespace App\Http\Controllers\AdministradorOperador;

use Illuminate\Http\Request;
use App\Aula;
use App\Modulo;

class AulaController extends Controller
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
        $aulas = Modulo::whereHas('modulos', function($r)
        {
            $r->where('id', $id);
        })->get();
        return view('aulas/index')->with('aulas', $aulas);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $modulo = Modulo::findOrFail($id);   
        return view('cursos/modulos/aulas/create')->with('modulo', $modulo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $aula = Aula::create($request->except('_token'));
        $aula->save();
        $aula->modulos()->attach($id);
        return redirect()->route('cursosmodulosaulas', ['id' => $id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aula = Aula::findOrFail($id);
        return view('cursos/modulos/aulas/show', ['aula' => $aula]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aula = Aula::find($id);
        return view('cursos/modulos/aulas/edit')->with('aula', $aula);
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
        $aula = Aula::find($id);
        $input = $request->all();
        $aula->update($input);

        $aula->save();

       return redirect()->route('cursosmodulosaulasid', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Aula::destroy($id);
        return redirect('/aulas');
    }
}