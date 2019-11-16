<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableAlojamientosAddUsarRemotoAndWebserviceurlColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alojamientos', function (Blueprint $table) {
            $table->boolean('usar_remoto')->nullable()->default(false);
            $table->string('webservice_url',250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alojamientos', function (Blueprint $table) {
            $table->dropColumn('usar_remoto');
            $table->dropColumn('webservice_url');
        });
    }
}
