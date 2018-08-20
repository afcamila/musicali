<?php

use Illuminate\Database\Seeder;
use App\Question;
use App\Answer;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questao = Question::where('id', 1)->first();

        $answer = new Answer();
        $answer->a = 'r1';
        $answer->b = 'r2';
        $answer->c = 'r3';
        $answer->is_correct = 'a';
        //$answer->questions()->attach($questao);
        $answer->save();
        $answer->questions()->attach($questao); 
        
    }
}
