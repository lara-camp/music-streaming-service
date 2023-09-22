<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Song>
 */
class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $album_id = DB::table('albums')->pluck('id');
        $admin_id = DB::table('admins')->pluck('id');
        return [
            'album_id' => fake()->randomElement($album_id),
            'admin_id' => fake()->randomElement($admin_id),
            'publish_type' => fake()->numberBetween(0,2),
            'title' => fake()->sentence(10),
            'duration' => fake()->time('i:s'),
            'image_url' => fake()->imageUrl(),
            'audio_url' => fake()->url(),
            'youtube_url' => fake()->url(),
        ];
    }
}
