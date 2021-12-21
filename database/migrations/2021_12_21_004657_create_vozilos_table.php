<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVozilosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vozilos', function (Blueprint $table) {
            $table->id();
            $table->string('registarski_broj');
            $table->bigInteger('godiste');
            $table->bigInteger('kilometraza');
            $table->foreignId('klijent_id')->constrained('klijents');
            $table->foreignId('servis_id')->constrained('servis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vozilos');
    }
}
