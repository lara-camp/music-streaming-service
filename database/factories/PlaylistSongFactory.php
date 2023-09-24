<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PlaylistSong>
 */
class PlaylistSongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $playlist_id = DB::table('playlists')->pluck('id');
        $song_id = DB::table('songs')->pluck('id');
        return [
            'playlist_id' => fake()->randomElement($playlist_id),
            'song_id' => fake()->randomElement($song_id),
        ];
    }
}
