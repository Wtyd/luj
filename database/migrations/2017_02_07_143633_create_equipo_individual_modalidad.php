<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipoIndividualModalidad extends Migration
{
    public function up()
    {   //Esta tabla pivote la usamos para la relación ternaria
        Schema::create('equipo_individual_modalidad', function(Blueprint $table){
            $table->increments('id');
            $table->integer('equipo_id')->unsigned();
            $table->foreign('equipo_id')->references('id')->on('equipos');
            $table->integer('individual_id')->unsigned();
            $table->foreign('individual_id')->references('id')->on('individuales');
            $table->integer('modalidad_id')->unsigned();
            $table->foreign('modalidad_id')->references('id')->on('modalidades');

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('equipo_individual_modalidad');
    }
}
