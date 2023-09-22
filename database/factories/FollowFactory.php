<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Follow>
 */
class FollowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_id = DB::table('users')->pluck('id');
        $artist_id = DB::table('artists')->pluck('id');
        return [
            'user_id' => fake()->randomElement($user_id),
            'artist_id' => fake()->randomElement($artist_id),
            'follow_type' => fake()->numberBetween(0,1),
        ];
    }
}
