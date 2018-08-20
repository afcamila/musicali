<?php

namespace App\Http\Controllers\AdministradorOperador;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Curso;
use Auth;

class ProfessorController extends Controller
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
        $professores = User::whereHas('roles', function($q)
        {
            $q->where('name', 'professor');
        })->get();

        return view('professores/index')->with('professores', $professores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('professores/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $role_professor = Role::where('name', 'professor')->first();
        $professor = User::create($request->all());
        $professor->roles()->attach($role_professor);
        return redirect('/professores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $professor =User::findOrFail($id);
        $cursos = Curso::whereHas('users', function($r) use ($id)
        {
            $r->where('user_id', $id);
        })->get();
        return view('professores/show', ['professor' => $professor, 'cursos' => $cursos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $professor = User::find($id);
        return view('professores/edit')->with('professor', $professor);
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
        $professor = User::find($id);
        $input = $request->all();
        $professor->update($input);

        $professor->save();

       return redirect('/professores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/professores');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addCurso($id)
    {
        $professor = User::findOrFail($id);
        $cursos = Curso::all();
        return view('/professores/cursos/addCurso')->with(['cursos' => $cursos, 'professor' => $professor]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAddCurso(Request $request, $id)
    {
        $curso_id = $request->except('_token');
        $curso = Curso::where('id', $curso_id)->first();
        $curso->users()->attach($id);
        return redirect('/professores/');
    }

    public function meusCursos()
    {
        
        $professor = Auth::user()->id;

        $cursos = User::find($professor)->cursos()->first();

        return view('/professores/meuscursos', ['cursos' => $cursos]);
    }

    public function minhasTurmas()
    {
        $alunos = Curso::whereHas('users', function($r) 
        {
            $r->where('curso_id', 1);
        })->get();
        //dd($alunos);

        return view('/professores/minhasturmas', ['alunos' => $alunos]);



    }

}