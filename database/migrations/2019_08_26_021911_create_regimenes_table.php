<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegimenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regimenes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idalojamiento')->unsigned()->nullable();
            $table->string('descripcion', 100)->nullable();
            $table->integer('precio')->nullable();

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
        Schema::dropIfExists('regimenes');
    }
}