<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        // Specify the seeders to run
        $seeders = [
            UsersTableSeeder::class,
            CategoriesTableSeeder::class,
            SettingsTableSeeder::class,
            TagsTableSeeder::class,
        ];

        foreach ($seeders as $seeder) {
            $this->call($seeder);
        }
    }
}
