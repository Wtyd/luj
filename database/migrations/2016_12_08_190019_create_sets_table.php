<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sets', function(Blueprint $table){
            $table->create();
            //El set es una entidad debil que de existir forma parte de un partido CP => (num,partido_id)
            $table->integer('numero')->index();
            $table->integer('partido_id')->unsigned()->index();
            $table->foreign('partido_id')->references('id')->on('partidos');
            $table->integer('puntos1');
            $table->integer('puntos2');
            $table->integer('tb1');
            $table->integer('tb2');
            
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
        Schema::dropIfExists('sets');
    }
}
