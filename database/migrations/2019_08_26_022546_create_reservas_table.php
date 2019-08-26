<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('iduser')->unsigned();
            $table->integer('idhabitacion')->unsigned();
            $table->integer('idregimen')->unsigned();
            $table->timestamp('fecha_entrada')->nullable();
            $table->timestamp('fecha_salida')->nullable();
            $table->integer('precio_total');
            $table->double('porc_operador', 3,3)->nullable();
            $table->double('porc_agencia', 3,3)->nullable();
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
        Schema::dropIfExists('reservas');
    }
}