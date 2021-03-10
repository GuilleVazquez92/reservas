<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservaVuelosEscalas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('reservaVuelosEscalas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idvuelo')->unsigned();
            $table->string('idaerolineas');
            $table->string('salida')->nullable();
            $table->timestamp('fecha_salida')->nullable();
            $table->timestamp('horario_salida')->nullable();
            $table->string('tiempo_salida')->nullable();
            $table->string('llegada')->nullable();
            $table->timestamp('fecha_llegada')->nullable();
            $table->timestamp('horario_llegada')->nullable();
            $table->string('tiempo_llegada')->nullable();
            $table->timestamps();

            $table->foreign('idvuelo')->references('id')->on('reservaVuelos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('reservaVuelosEscalas');
    }
}
