<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Album>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $artist_id = DB::table('artists')->pluck('id');
        return [
            'artist_id' => fake()->randomElement($artist_id),
            'title' => fake()->sentence(10),
            'release_date' => fake()->dateTime(),
            'image_s3_path' => fake()->imageUrl(),
            'thumbnail_s3_path' => fake()->filePath(),
            'play_counter' => fake()->randomNumber(1,100),
        ];
    }
}
