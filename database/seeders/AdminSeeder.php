<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $knownUsers = [
            [
                'name' => 'Soul Admin 1',
                'email' => 'souladmin1@gmail.com',
                'password' => Hash::make('soul'),
            ],
            [
                'name' => 'Soul Admin 2',
                'email' => 'souladmin2@gmail.com',
                'password' => Hash::make('soul'),
            ],
            [
                'name' => 'Soul Admin 3',
                'email' => 'souladmin3@gmail.com',
                'password' => Hash::make('soul'),
            ],
        ];

        foreach ($knownUsers as $user) {
            Admin::factory()->create($user);
        }

        Admin::factory()->count(47)->create();
    }
}
