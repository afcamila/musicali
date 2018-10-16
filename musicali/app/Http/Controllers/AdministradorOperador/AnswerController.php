<?php

namespace App\Http\Controllers\AdministradorOperador;

use App\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
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
        $answers = Answer::all();
        return view('answers/index')->with('answers', $answers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $question = Answer::findOrFail($id);
        return view('tests/questions/answers/create')->with('question', $question);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request, $id)
    {
        $answer = Answer::create($request->except('_token'));
        $answer->save();
        $answer->questions()->attach($id);
        return redirect('/tests/questions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $answer = Answer::findOrFail($id);
        $questoes = Answer::whereHas('answers', function($r) use ($id)
        {
            $r->where('answer_id', $id);
        })->get();
        return view('answers/show', ['answer' => $answer,'questoes' => $questoes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $answer = Answer::find($id);
        return view('answers/edit')->with('answer', $answer);
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
        $answer = Answer::find($id);
        $answer->name=$request->name;

        $answer->save();

       return redirect('/answers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Answer::destroy($id);
        return redirect('/answers');
    }
}