<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetidoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competidores', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre', 30);
            $table->string('imagen', 30)->nullable(); //las selecciones no tendran escudo
            $table->integer('pais_id')->unsigned();
            $table->foreign('pais_id')->references('id')->on('paises');
            $table->integer('deporte_id')->unsigned();
            $table->foreign('deporte_id')->references('id')->on('deportes');

            //Relación "Es un", la tabla principal hace referencia a las que heredan
            $table->integer('competible_id')->unsigned()->index();
            $table->string('competible_type');

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
        Schema::dropIfExists('competidores');
    }
}
