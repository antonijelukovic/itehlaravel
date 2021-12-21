<?php

namespace Database\Seeders;

use App\Models\Vozilo;
use Illuminate\Database\Seeder;

class VoziloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vozilo::factory()->count(30)->create();
    }
}
