<?php

use Illuminate\Database\Seeder;
use App\Test;
use App\Question;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $violao = Test::where('curso_id', 1)->first();

        $question = new Question();
        $question->title = 'teste';
        $question->level = 'FÁCIL';
        $question->a = 'r1';
        $question->b = 'r2';
        $question->c = 'r3';
        $question->is_correct = 'a';
        //$question->tests()->attach($violao);

        $question->save();
        $question->tests()->attach($violao);

    }
}
