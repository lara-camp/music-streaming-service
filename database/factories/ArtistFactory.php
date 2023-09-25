<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artist>
 */
class ArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'display_name' => fake()->userName(),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('soul'), // password
            'image_s3_path' => fake()->imageUrl(),
            'thumbnail_s3_path' => fake()->filePath(),
            'play_counter' => fake()->randomNumber(1,100),
            'type' => fake()->numberBetween(0,3),
        ];
    }
}
