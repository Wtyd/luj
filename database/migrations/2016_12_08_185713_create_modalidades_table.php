<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModalidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('modalidades', function(Blueprint $table){
            $table->create();
            $table->increments('id');
            $table->string('nombre', 20);
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
