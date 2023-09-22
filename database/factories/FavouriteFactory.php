<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Favourite>
 */
class FavouriteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_id = DB::table('users')->pluck('id');
        $song_id = DB::table('songs')->pluck('id');
        return [
            'user_id' => fake()->randomElement($user_id),
            'song_id' => fake()->randomElement($song_id),
        ];
    }
}
