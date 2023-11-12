<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Facades\File;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        $images_posts_path = 'storage/app/public/images/posts';

        if (!File::exists($images_posts_path)) {
            File::makeDirectory($images_posts_path);
        }

        // Create custom post data for five posts
        $posts = [
            [
                'user_id' => 1,
                'category_id' => 1,
                'title' => 'Post 1',
                'content' => 'This is the content of Post 1.',
                'status' => true,
                'slug' => 'post-1',
                'image' => 'images/posts/image1.jpg', 
            ],
            [
                'user_id' => 2,
                'category_id' => 2,
                'title' => 'Post 2',
                'content' => 'This is the content of Post 2.',
                'status' => false,
                'slug' => 'post-2',
                'image' => 'images/posts/image2.jpg', 
            ],
            // Add more post data as needed
        ];

        // Create posts using the defined data
        foreach ($posts as $postData) {
            Post::create($postData);
        }
    }
}
