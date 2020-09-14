<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlojamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alojamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idciudad')->unsigned();
            $table->integer('idtipoalojamiento')->unsigned();
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->string('email')->nullable();
            $table->string('direccion')->nullable();
            $table->string('referencia')->nullable();
            $table->integer('categoria')->nullable();
            $table->string('lat',50)->nullable();
            $table->string('lng',50)->nullable();
            $table->timestamps();

            $table->foreign('idciudad')->references('id')->on('ciudades');
            $table->foreign('idtipoalojamiento')->references('id')->on('tipo_alojamiento');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alojamientos');
    }
}
