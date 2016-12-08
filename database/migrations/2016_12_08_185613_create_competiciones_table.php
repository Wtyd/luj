<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompeticionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('competiciones', function(Blueprint $table){
            $table->create();
            $table->increments('id');

            $table->date('fecha_inicio');
            $table->date('fecha_fin');
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