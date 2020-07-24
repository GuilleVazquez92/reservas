<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TelefonoXAlojamiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefono_x_alojamiento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idalojamiento')->unsigned();
            $table->string('telefono',50);
            $table->string('descripcion',50)->nullable();

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
        Schema::dropIfExists('telefono_x_alojamiento');
    }
}
