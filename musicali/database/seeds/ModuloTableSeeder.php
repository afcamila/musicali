<?php

use Illuminate\Database\Seeder;
use App\Modulo;
use App\Curso;

class ModuloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = Curso::where('id', 1)->first();

        $modulo = new Modulo();
	    $modulo->name = 'Modulo 1';
	    $modulo->description = 'Aprender acordes';
	    $modulo->status = 'ATIVO';
        $modulo->level = 'FÁCIL';
	    $modulo->save();
        $modulo->cursos()->attach($curso);

        $modulo = new Modulo();
        $modulo->name = 'Modulo 2';
        $modulo->description = 'Batidas';
        $modulo->status = 'ATIVO';
        $modulo->level = 'MÉDIO';
        $modulo->save();
        $modulo->cursos()->attach($curso);

        $modulo = new Modulo();
        $modulo->name = 'Modulo 3';
        $modulo->description = 'Solos';
        $modulo->status = 'ATIVO';
        $modulo->level = 'DIFÍCIL';
        $modulo->save();
        $modulo->cursos()->attach($curso);
    }
}
