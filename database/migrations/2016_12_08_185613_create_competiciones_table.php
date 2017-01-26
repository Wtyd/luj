<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompeticionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competiciones', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre', 20);
            $table->string('logo', 50);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('puntos_vic');
            $table->integer('puntos_emp');
            $table->integer('puntos_der');
            $table->integer('num_modalidades');
            $table->boolean('secuenciales');
            $table->integer('tcompeticion_id')->unsigned();
            $table->foreign('tcompeticion_id')->references('id')->on('tcompeticiones');
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
        Schema::dropIfExists('competiciones');
    }
}