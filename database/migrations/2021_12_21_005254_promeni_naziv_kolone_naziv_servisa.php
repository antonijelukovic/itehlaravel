<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PromeniNazivKoloneNazivServisa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('servis', function (Blueprint $table) {
            $table->renameColumn('naziv_servisa', 'naziv');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('servis', function (Blueprint $table) {
            $table->renameColumn('naziv', 'naziv_servisa');
        });
    }
}
