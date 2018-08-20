<?php

use Illuminate\Database\Seeder;
use App\Aula;
use App\Modulo;

class AulaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modulo = Modulo::where('id', 1)->first();

        $aula = new Aula();
	    $aula->name = 'Aula 1';
	    $aula->description = 'Aula sobre acordes maiores';
	    $aula->status = 'ATIVO';
        $aula->video = 'https://www.youtube.com/watch?v=dBWFUVq85gs';
	    $aula->save();
        $aula->modulos()->attach($modulo);
    }
}
