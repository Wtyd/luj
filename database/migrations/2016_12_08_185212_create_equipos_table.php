<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('equipos', function(Blueprint $table){
        
            $table->create();
            $table->integer('competidor_id')->unsigned()->index();
            $table->foreign('competidor_id')->references('id')->on('competidores');
            $table->string('acronimo', 3);
            $table->boolean('seleccion');

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
        Schema::dropIfExists('equipos');
    }
}
