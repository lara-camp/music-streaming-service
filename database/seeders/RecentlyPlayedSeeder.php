<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RecentlyPlayed;

class RecentlyPlayedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RecentlyPlayed::factory()->count(50)->create();
    }
}
