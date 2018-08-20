<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use App\Curso;
use App\Modulo;
use App\Question;
use App\User;
use App\Aula;
use App\Gabarito;
use Auth;

class TestController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aluno = Auth::user()->id;
        $cursos = Curso::whereHas('users', function($r) use ($aluno)
        {
            $r->where('user_id', $aluno);
        })->get();

        $total = 30;

        $progresso = Gabarito::where('is_correct', true)->where('user_id', $aluno)->count();
        //dd($gabarito);

        return view('/quiz/index', ['cursos' => $cursos, 'progresso' => $progresso, 'total' => $total]);
    }

 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test = Test::findOrFail($id)->curso_id;        

        //FAZER ISSO ALEATORIAMENTE

        $questions = Question::where('level', 'FÁCIL')->whereHas('tests', function($r) use ($test)
        {
            $r->where('test_id', $test);
        })->take(1)->get();

        //dd($questions);


        return view('quiz/show', ['test' => $test, 'questions' => $questions]);
    }



    public function gabarito(Request $request, $id)
    {
        $user = Auth::user()->id;
        $curso_id = $request->curso_id;

        $aluno = Auth::user();
        $curso = Curso::find($curso_id);

        //dd($aluno);

        $progresso = Gabarito::where('user_id', $user)->where('curso_id', $curso_id)->count();
        //dd($progresso);

        $success = $curso->updateUserCursoPivot($aluno, $progresso);
        //dd($success);

        $question = $id;

        $is_correct = Question::find($id)->is_correct;

        if($is_correct == $request->is_correct)
        {
            $gabarito = new Gabarito();
            $gabarito->user_id = $user;
            $gabarito->question_id = $question;
            $gabarito->curso_id = $request->curso_id;
            $gabarito->answer = $request->is_correct;
            $gabarito->is_correct = true;
            $gabarito->save();
        }
        else
        {
            $gabarito = new Gabarito();
            $gabarito->user_id = $user;
            $gabarito->question_id = $question;
            $gabarito->curso_id = $request->curso_id;
            $gabarito->answer = $request->is_correct;
            $gabarito->is_correct = false;
            $gabarito->save();
        }
        
        return redirect('/quiz');
        
    }


}