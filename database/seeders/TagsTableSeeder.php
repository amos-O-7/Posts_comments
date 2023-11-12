<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    public function run()
    {
        // Create custom tag data
        $tags = [
            [
                'name' => 'Tag 1',
            ],
            [
                'name' => 'Tag 2',
            ],
            // Add more tags as needed
        ];

        // Create tags using the defined data
        foreach ($tags as $tagData) {
            Tag::create($tagData);
        }
    }
}
