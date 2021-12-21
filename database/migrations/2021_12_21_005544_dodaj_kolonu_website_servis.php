<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DodajKolonuWebsiteServis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('servis', function (Blueprint $table) {
            $table->after('broj_zaposlenih', function ($table) {
                $table->string('website');
            });
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
            $table->dropColumn('website');
        });
    }
}
