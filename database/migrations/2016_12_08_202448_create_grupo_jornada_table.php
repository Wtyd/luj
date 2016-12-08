<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoJornadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('grupo_jornada', function(Blueprint $table){
            $table->create();

            $table->increments('id');

            $table->integer('grupo_id')->unsigned();
            $table->foreign('grupo_id')->references('id')->on('grupos');
            $table->integer('jornada_id')->unsigned();
            $table->foreign('jornada_id')->references('id')->on('jornadas');

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
        Schema::dropIfExists('grupo_jornada');
    }
}
