<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModalidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modalidades', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre', 20);
            $table->integer('num_mod');
            $table->integer('num_jornadas');
            $table->integer('num_participantes');
            $table->integer('num_grupos');
            $table->integer('parti_x_equipo');
            $table->integer('competicion_id')->unsigned();
            $table->foreign('competicion_id')->references('id')->on('competiciones');

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
        Schema::dropIfExists('modalidades');
    }
}
