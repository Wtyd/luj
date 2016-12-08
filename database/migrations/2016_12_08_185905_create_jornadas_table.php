<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJornadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jornadas', function(Blueprint $table){
            $table->create();

            $table->increments('id');
            
            $table->string('nombre', 50);
            $table->integer('num_jornada');
            $table->integer('num_partidos');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
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
        Schema::dropIfExists('jornadas');
    }
}
