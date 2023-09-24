<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ArtistGenre;

class ArtistGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ArtistGenre::factory()->count(50)->create();
    }
}
