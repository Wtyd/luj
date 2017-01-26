<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre', 50);
            $table->string('enlace');
            $table->boolean('principal');
            //partido_id puede ser nulo para poder poner videos especiales (pj: Mejores goles de la jornada)
            $table->integer('partido_id')->unsigned()->nullable();
            $table->foreign('partido_id')->references('id')->on('partidos');
            $table->integer('servidor_id')->unsigned();
            $table->foreign('servidor_id')->references('id')->on('servidores');

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
        Schema::dropIfExists('videos');
    }
}
