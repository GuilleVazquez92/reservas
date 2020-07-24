<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePorcTemporadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('porc_temporadas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idalojamiento')->unsigned();
            $table->timestamp('fecha_inicio')->nullable();
            $table->timestamp('fecha_fin')->nullable();
            $table->double('porcentaje',3,3)->nullable();
            $table->string('descripcion', 50)->nullable();

            $table->foreign('idalojamiento')->references('id')->on('alojamientos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('porc_temporadas');
    }
}
