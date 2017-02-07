<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetidorGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competidor_grupo', function(Blueprint $table){
            $table->increments('id');
            $table->integer('grupo_id')->unsigned();
            $table->foreign('grupo_id')->references('id')->on('grupos');
            $table->integer('competidor_id')->unsigned();
            $table->foreign('competidor_id')->references('id')->on('competidores');

            $table->integer('p_totales')->default(0);
            $table->integer('p_a_favor')->default(0);
            $table->integer('p_en_contra')->default(0);
            $table->integer('diferencia_p')->default(0);

            $table->integer('partidos_totales')->default(0);
            $table->integer('p_ganados')->default(0);
            $table->integer('p_empatados')->default(0);
            $table->integer('p_perdidos')->default(0);

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
        Schema::dropIfExists('competidor_grupo');
    }
}
