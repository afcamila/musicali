<?php

use Illuminate\Database\Seeder;
use App\Curso;

class CursoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();
	    $curso->name = 'Violão';
	    $curso->description = 'Curso de violão clássico';
	    $curso->status = 'ATIVO';
	    $curso->save();
    }
}
