<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pedal;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PedalSeeder::class);
    }
}
