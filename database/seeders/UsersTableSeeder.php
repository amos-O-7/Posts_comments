<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Create custom user data for five users
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@posts.com',
                'password' => bcrypt('password'),
                'role_id' => 1,
                'news_letter' => 1,
            ],
            [
                'name' => 'User',
                'email' => 'user@posts.com',
                'password' => bcrypt('password'),
                'role_id' => 2,
                'news_letter' => 0,
            ],
            [
                'name' => 'Writer',
                'email' => 'writer@posts.com',
                'password' => bcrypt('password'),
                'role_id' => 3,
                'news_letter' => 0,
            ],
        ];

        // Create users using the defined data
        foreach ($users as $userData) {
            User::create($userData);
        }
    }
}

