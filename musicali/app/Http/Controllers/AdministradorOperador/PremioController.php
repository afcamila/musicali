<?php

namespace App\Http\Controllers\AdministradorOperador;

use Illuminate\Http\Request;
use App\Test;
use App\Premio;
use App\Curso;
use Auth;

class PremioController extends Controller
{
    public function __construct()
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
        $premios = Premio::all();
        return view('premios/index')->with('premios', $premios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::all();
        return view('premios/create')->with('cursos', $cursos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $premio = new Premio();

            $file = $request->file('file');
            $filename = $request->name;
            $file->save(public_path('/uploads/premios/' . $filename ) );
            $premio->file = $filename;
            $premio->name = $filename;
            $premio->curso_id = $request->curso_id;
            $premio->pontuacao = $request->pontuacao;
            //dd($premio);
            $premio->save();          
        

        return redirect('/premios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $premio = Premio::findOrFail($id);
        return view('premios/show', ['premio' => $premio]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $premio = Premio::find($id);
        $cursos = Curso::all();

        return view('premios/edit')->with('premio', $premio)->with('cursos', $cursos);
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
        $premio = Premio::find($id);
        $input = $request->all();
        $premio->update($input);
        //dd($premio);

        $premio->save();

       return redirect('/premios');
    }

}