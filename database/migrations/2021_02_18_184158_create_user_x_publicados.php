<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserXPublicados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('user_x_publicados', function (Blueprint $table) {
            $table->integer('iduser')->unsigned();
            $table->integer('idpublicado')->unsigned();

            $table->primary(['iduser', 'idpublicado']);
            $table->foreign('iduser')->references('id')->on('users');
            $table->foreign('idpublicado')->references('id')->on('publicar_alojamiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_x_publicados');
    }
}
