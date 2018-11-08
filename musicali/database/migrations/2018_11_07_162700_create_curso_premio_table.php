<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoPremioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_premio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('premio_id')->unsigned();
            $table->foreign('premio_id')->references('id')->on('premios');
            $table->integer('curso_id')->unsigned(); 
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso_premio');
    }
}
