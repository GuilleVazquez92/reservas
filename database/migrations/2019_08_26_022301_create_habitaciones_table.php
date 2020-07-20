<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idalojamiento')->unsigned();
            $table->integer('idtipo')->unsigned();
            $table->integer('cant_camas');
            $table->integer('precio');
            $table->timestamps();

            $table->foreign('idalojamiento')->references('id')->on('alojamientos');
            $table->foreign('idtipo')->references('id')->on('tipo_alojamiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitaciones');
    }
}
