<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individuales', function(Blueprint $table){
            $table->increments('id');
            $table->integer('competidor_id')->unsigned()->index();
            $table->foreign('competidor_id')->references('id')->on('competidores');
            $table->boolean('masculino')->default(true);

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
        Schema::dropIfExists('individuales');
    }
}
