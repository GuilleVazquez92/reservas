<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterToHabitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('habitaciones', function (Blueprint $table) {
            $table->dropForeign(['idtipo']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('habitaciones', function (Blueprint $table) {
            $table->foreign('idtipo')->references('id')->on('tipo_habitacion');
           
        });
    }
}
