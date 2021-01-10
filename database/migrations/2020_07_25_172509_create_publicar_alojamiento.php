<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicarAlojamiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('publicar_alojamiento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('iduser')->unsigned();
            $table->integer('idalojamiento')->unsigned();
            $table->integer('idhabi')->unsigned();
            $table->integer('idregimen')->unsigned();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
           
            $table->timestamps();

            $table->foreign('iduser')->references('id')->on('users');
            $table->foreign('idalojamiento')->references('id')->on('alojamientos');
            $table->foreign('idhabi')->references('id')->on('habitaciones');
            $table->foreign('idregimen')->references('id')->on('regimenes');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('publicar_alojamiento');
    }
}
