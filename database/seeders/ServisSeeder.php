<?php

namespace Database\Seeders;

use App\Models\Servis;
use Illuminate\Database\Seeder;

class ServisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servis::factory()->count(12)->create();
    }
}
