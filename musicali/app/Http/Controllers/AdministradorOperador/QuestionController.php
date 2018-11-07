<?php

namespace App\Http\Controllers\AdministradorOperador;

use App\Question;
use App\Test;
use Illuminate\Http\Request;

class QuestionController extends Controller
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
        $questions = Question::all();
        return view('questions/index')->with('questions', $questions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $test = Test::findOrFail($id);   
        return view('tests/questions/create')->with('test', $test);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        request()->validate([
            'title' => 'required|min:2|max:100',         
            'level' => 'required',
            'a' => 'required|min:1|max:70',   
            'b' => 'required|min:1|max:70', 
            'c' => 'required|min:1|max:70', 
            'is_correct' => 'required',                 
        ], [
            'title.required' => 'Digite o enunciado da questão.',
            'level.required' => 'Selecione o nível da questão.',
            'a.required' => 'Digite uma resposta para a Opção A.',
            'b.required' => 'Digite uma resposta para a Opção B.',
            'c.required' => 'Digite uma resposta para a Opção C.',
            'is_correct.required' => 'Selecione a opção correta.'
        ]);


        $question = Question::create($request->all());
        $question->save();
        $question->tests()->attach($id);
        return redirect()->route('testsid', ['id' => $id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::findOrFail($id);
        
        return view('tests/questions/show', ['question' => $question]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::find($id);
        return view('questions/edit')->with('question', $question);
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
        $question = Question::find($id);
        $question->name=$request->name;

        $question->save();

       return redirect('/questions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Question::destroy($id);
        return redirect('/questions');
    }
}