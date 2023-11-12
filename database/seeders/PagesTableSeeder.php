<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PagesTableSeeder extends Seeder
{
    public function run()
    {
        $pages = [
            [
                'name' => 'Page 1',
                'content' => 'This is the content of Page 1.',
                'slug' => 'page-1',
                'navbar' => true,
                'footer' => false,
                'user_id' => 'page1',
            ],
            [
                'name' => 'Page 2',
                'content' => 'This is the content of Page 2.',
                'slug' => 'page-2',
                'navbar' => false,
                'footer' => true,
                'user_id' => 'page2',
            ],
        ];

        // Create pages using the defined data
        foreach ($pages as $pageData) {
            Page::create($pageData);
        }
    }
}
