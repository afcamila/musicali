<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAulaModuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aula_modulo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aula_id')->unsigned();
            $table->foreign('aula_id')->references('id')->on('aulas');
            $table->integer('modulo_id')->unsigned(); 
            $table->foreign('modulo_id')->references('id')->on('modulos');
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
        Schema::dropIfExists('aula_modulo');
    }
}
