<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserXAlojamiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_x_alojamiento', function (Blueprint $table) {
            $table->integer('iduser')->unsigned();
            $table->integer('idalojamiento')->unsigned();

            $table->primary(['iduser', 'idalojamiento']);
            $table->foreign('iduser')->references('id')->on('users');
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
        Schema::dropIfExists('user_x_alojamiento');
    }
}
