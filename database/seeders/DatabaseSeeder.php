<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ServisSeeder;
use Database\Seeders\VoziloSeeder;
use Database\Seeders\KlijentSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $servis = new ServisSeeder();
        $servis->run();
        $vozilo = new VoziloSeeder();
        $vozilo->run();
        $klijent = new KlijentSeeder();
        $klijent->run();
    }
}
