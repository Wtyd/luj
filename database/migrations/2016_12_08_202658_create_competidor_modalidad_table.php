<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetidorModalidadTable extends Migration
{

    public function up()
    {
        Schema::create('competidor_modalidad', function(Blueprint $table){
            $table->increments('id');
            $table->integer('competidor_id')->unsigned();
            $table->foreign('competidor_id')->references('id')->on('competidores');
            $table->integer('modalidad_id')->unsigned();
            $table->foreign('modalidad_id')->references('id')->on('modalidades');

            /* estas columnas no se pq estan
            $table->integer('p_a_favor')->default(0);
            $table->integer('p_en_contra')->default(0);

            $table->integer('partidos_totales')->default(0);
            $table->integer('p_ganados')->default(0);
            $table->integer('p_empatados')->default(0);
            $table->integer('p_perdidos')->default(0);
            */
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('competidor_modalidad');
    }
}
