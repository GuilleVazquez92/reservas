<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasVuelos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('reservas_vuelos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('iduser')->unsigned();
            $table->string('horario',50);
            $table->string('precio',50);
            $table->string('salida1',50);
            $table->string('salida2',50);
            $table->string('llegada1',50);
            $table->string('llegada2',50);
            $table->timestamp('fecha_salida1');
            $table->timestamp('fecha_llegada1');
            $table->timestamp('fecha_salida2');
            $table->timestamp('fecha_llegada2');
            
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas_vuelos')
    }
}
