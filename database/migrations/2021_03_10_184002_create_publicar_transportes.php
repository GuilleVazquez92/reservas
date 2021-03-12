<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicarTransportes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('publicar_transportes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idtransporte')->unsigned();
            $table->integer('idciudad')->unsigned();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('precio'); 


            $table->foreign('idtransporte')->references('id')->on('transportes');
            $table->foreign('idciudad')->references('id')->on('ciudades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicar_transportes');
    }
}
