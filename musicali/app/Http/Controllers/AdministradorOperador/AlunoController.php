<?php

namespace App\Http\Controllers\AdministradorOperador;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Curso;
use App\Modulo;
use App\Aula;
use App\Gabarito;
use Auth;
use Illuminate\Support\Facades\Hash;
use Mail;

class AlunoController extends Controller
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
        $alunos = User::whereHas('roles', function($r)
        {
            $r->where('name', 'aluno');
        })->get();

        return view('alunos/index')->with('alunos', $alunos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('alunos/create')->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {

        request()->validate([
            'name' => 'required|min:2|max:50',          
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',                
        ], [
            'name.required' => 'Digite o nome do aluno.',
            'name.min' => 'O nome precisa ter no mínimo 2 caracteres.',
            'name.max' => 'O nome está grande demais.',
            'email.unique' => 'Este e-mail já foi utilizado.'
        ]);


            $role_aluno = Role::where('name', 'aluno')->first();
            //$request->password = $hashed_random_password = Hash::make(str_random(6));
            //  $request->remember_token = $hashed_random_password = Hash::make(str_random(6));
            $aluno = User::create($request->all());
            $aluno->roles()->attach($role_aluno);

            return redirect('/alunos')->with($error);
        


        return redirect('/alunos');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addCurso($id)
    {
        $aluno = User::findOrFail($id);
        $cursos = Curso::where('status', 'ATIVO')->get();
        return view('/alunos/cursos/addCurso')->with(['cursos' => $cursos, 'aluno' => $aluno]);
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
        return redirect('/alunos/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aluno = User::findOrFail($id);
        $cursos = Curso::whereHas('users', function($r) use ($id)
        {
            $r->where('user_id', $id);
        })->get();
        return view('alunos/show', ['aluno' => $aluno, 'cursos' => $cursos]);
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

        $cursos = Curso::whereHas('users', function($r) use ($aluno)
        {
            $r->where('user_id', $aluno);
        })->get();

        return view('alunos/cursos/meuscursos', ['cursos' => $cursos]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluno = User::find($id);
        return view('alunos/edit')->with('aluno', $aluno);
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
        $aluno = User::find($id);
        $input = $request->all();
        $aluno->update($input);

        $aluno->save();

       return redirect('/alunos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('/alunos');
    }
}
