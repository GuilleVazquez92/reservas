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
            $table->integer('idusers')->unsigned();
            $table->integer('idtipo')->unsigned();
            $table->integer('cant_camas');
            $table->string('descripcion',50);
            $table->integer('precio');
            $table->timestamps();

            $table->foreign('idusers')->references('id')->on('users');
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
