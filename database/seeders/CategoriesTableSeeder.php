<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        // Create custom category data for five categories
        $categories = [
            [
                'user_id' => 1,
                'name' => 'Category 1',
                'slug' => 'category-1',
            ],
            [
                'user_id' => 2,
                'name' => 'Category 2',
                'slug' => 'category-2',
            ],
        ];

        // Create categories using the defined data
        foreach ($categories as $categoryData) {
            Category::create($categoryData);
        }
    }
}
