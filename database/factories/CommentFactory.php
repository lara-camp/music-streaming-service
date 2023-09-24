<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_id = DB::table('users')->pluck('id');
        return [
            'user_id' => fake()->randomElement($user_id),
            'entity_type' => fake()->sentence(10),
            'entity_id' => fake()->randomNumber(1,5),
            'text' => fake()->text(),
        ];
    }
}
