<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetidorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('competidores', function(Blueprint $table){
        

            $table->create();

            $table->increments('id');
            $table->string('nombre', 20);
            $table->string('imagen', 50)->nullable(); //las selecciones no tendran escudo
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
        Schema::dropIfExists('competidores');
    }
}
