<?php

use Illuminate\Database\Seeder;
use App\Gabarito;

class GabaritoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$gabarito = new Gabarito();
	    $gabarito->user_id = 1;
	    $gabarito->question_id = 1;
        $gabarito->curso_id = 1;
	    $gabarito->answer = 'a';
        $gabarito->is_correct = true;
	    $gabarito->save();


        $gabarito = new Gabarito();
        $gabarito->user_id = 1;
        $gabarito->question_id = 1;
        $gabarito->curso_id = 2;
        $gabarito->answer = 'a';
        $gabarito->is_correct = true;
        $gabarito->save();
    }
}
