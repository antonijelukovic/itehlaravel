<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DodajUniqueRegBrojVozilos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vozilos', function (Blueprint $table) {
            $table->unique('registarski_broj');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vozilos', function (Blueprint $table) {
            $table->dropUnique('registarski_broj');
        });
    }
}
