<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            GenreSeeder::class,
            ArtistSeeder::class,
            ArtistGenreSeeder::class,
            AlbumSeeder::class,
            SongSeeder::class,
            PlaylistSeeder::class,
            PlaylistSongSeeder::class,
            FavouriteSeeder::class,
            RecentlyPlayedSeeder::class,
            FollowSeeder::class,
            CommentSeeder::class,
            RatingSeeder::class,
        ]);
    }
}
