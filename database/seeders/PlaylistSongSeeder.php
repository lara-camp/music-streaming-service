<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PlaylistSong;

class PlaylistSongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PlaylistSong::factory()->count(50)->create();
    }
}
