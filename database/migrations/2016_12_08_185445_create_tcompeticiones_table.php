<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTcompeticionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tcompeticiones', function(Blueprint $table){
            $table->create();

            $table->increments('id');
            
            $table->string('nombre', 20);
            $table->string('logo', 50);
            $table->integer('num_jornadas_t');
            $table->integer('jornadas_liga');
            $table->integer('jornadas_elim');
            $table->integer('num_equipos');
            $table->integer('num_grupos');
            $table->integer('puntos_vic');
            $table->integer('pais_id')->unsigned();
            $table->foreign('pais_id')->references('id')->on('paises');
            $table->integer('deporte_id')->unsigned();
            $table->foreign('deporte_id')->references('id')->on('deportes'); 

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
        Schema::dropIfExists('tcompeticiones');
    }
}
