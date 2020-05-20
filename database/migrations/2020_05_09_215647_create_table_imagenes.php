<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableImagenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('imagenes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idalojamiento')->unsigned();
            $table->string('path_imagen');
            $table->MEDIUMTEXT('codigo_imagen');
            $table->integer('orden');

            $table->foreign('idalojamiento')->references('id')->on('alojamientos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagenes');
    }
}
