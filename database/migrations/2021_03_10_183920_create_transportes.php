<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idtipotransporte')->unsigned();
            $table->integer('iduser')->unsigned();
            $table->string('nombre');
            $table->integer('capacidad')->nullable();
            $table->timestamps();

            $table->foreign('idtipotransporte')->references('id')->on('tipo_transportes');
            $table->foreign('iduser')->references('id')->on('users');
            
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transportes');
    }
}
