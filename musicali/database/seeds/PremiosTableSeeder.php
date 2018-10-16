<?php

use Illuminate\Database\Seeder;
use App\Premio;

class PremiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $premio = new Premio();
	    $premio->curso_id = 1;
	    $premio->file = 'file';
        $premio->name= 'tec';
	    $premio->pontuacao = 5;
	    $premio->save();


        $premio = new Premio();
	    $premio->curso_id = 1;
	    $premio->file = 'file';
        $premio->name= 'teclado';
	    $premio->pontuacao = 10;
	    $premio->save();
    }
}
