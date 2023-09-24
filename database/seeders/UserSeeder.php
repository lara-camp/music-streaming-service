<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $knownUsers = [
            [
                'name' => 'Soul User 1',
                'display_name' => 'Soul User 1',
                'email' => 'souluser1@gmail.com',
                'password' => Hash::make('soul'),
            ],
            [
                'name' => 'Soul User 2',
                'display_name' => 'Soul User 2',
                'email' => 'souluser2@gmail.com',
                'password' => Hash::make('soul'),
            ],
            [
                'name' => 'Soul User 3',
                'display_name' => 'Soul User 3',
                'email' => 'souluser3@gmail.com',
                'password' => Hash::make('soul'),
            ],
        ];

        foreach ($knownUsers as $user) {
            User::factory()->create($user);
        }

        User::factory()->count(47)->create();
    }
}
