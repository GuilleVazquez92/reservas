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
            $table->integer('iduser')->unsigned()->nullable();
            $table->integer('idtipo')->unsigned();
            $table->string('descripcion', 100);
            $table->integer('precio')->nullable();

            $table->foreign('iduser')->references('id')->on('users');
            $table->foreign('idtipo')->references('id')->on('tipo_regimenes');
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