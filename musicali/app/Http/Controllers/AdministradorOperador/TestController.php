<?php

namespace App\Http\Controllers\AdministradorOperador;

use Illuminate\Http\Request;
use App\Test;
use App\Curso;
use App\Question;
use App\User;

class TestController extends Controller
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
        $tests = Test::with('cursos')->get();
        return view('tests/index')->with('tests', $tests);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$cursos = Curso::all();
        return view('tests/create')->with('cursos', $cursos);
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
            'curso_id' => 'required|unique:tests',                   
        ], [
            'curso_id.required' => 'Selecione o curso.',
            'curso_id.unique' => 'Este curso já possui um quiz.'
        ]);

        Test::create($request->all());
        return redirect('/tests');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test = Test::findOrFail($id);
        $questions = Question::whereHas('tests', function($r) use ($id)
        {
            $r->where('test_id', $id);
        })->get();
        return view('tests/show', ['test' => $test, 'questions' => $questions]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = Test::find($id);
        return view('tests/edit')->with('test', $test);
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
        $test = Test::find($id);
        $test->name=$request->name;

        $test->save();

       return redirect('/tests');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Test::destroy($id);
        return redirect('/tests');
    }
}