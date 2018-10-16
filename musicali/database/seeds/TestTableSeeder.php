<?php

use Illuminate\Database\Seeder;
use App\Test;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $test = new Test();
	    $test->curso_id = 1;
	    $test->save();

    }
}
