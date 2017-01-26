<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidos', function($table){
            $table->increments('id');
            $table->enum('estado', array('oculto', 'publicado', 'aplazado'));
            //descripcion sirve para poner las incidencias de cada equipo, goles ,tarjetas...
            $table->text('descripcion_l')->nullable();
            $table->text('descripcion_v')->nullable();
            $table->text('descripcion_p')->nullable();
            $table->integer('puntos_l');
            $table->integer('puntos_v');
            $table->datetime('fecha_hora');
            $table->integer('competidor_local_id')->unsigned();
            $table->foreign('competidor_local_id')->references('id')->on('competidores');
            $table->integer('competidor_visitante_id')->unsigned();
            $table->foreign('competidor_visitante_id')->references('id')->on('competidores');
            $table->integer('jornada_id')->unsigned();
            $table->foreign('jornada_id')->references('id')->on('jornadas');
            $table->integer('grupo_id')->unsigned();
            $table->foreign('grupo_id')->references('id')->on('grupos');

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
        Schema::dropIfExists('partidos');
    }
}
