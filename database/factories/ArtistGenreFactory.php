<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArtistGenre>
 */
class ArtistGenreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $artist_id = DB::table('artists')->pluck('id');
        $genre_id = DB::table('genres')->pluck('id');
        return [
            'artist_id' => $this->faker->randomElement($artist_id),
            'genre_id' => $this->faker->randomElement($genre_id),
        ];
    }
}
