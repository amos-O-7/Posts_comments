<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    public function run()
    {
        // Create custom setting data
        $settings = [
            [
                'site_name' => 'My Website',
                'contact_email' => 'contact@mywebsite.com',
                'description' => 'This is a description of my website.',
                'about' => 'About my website...',
                'copy_rights' => '© 2023 My Website',
                'url_fb' => 'https://www.facebook.com/mywebsite',
                'url_twitter' => 'https://twitter.com/mywebsite',
                'url_insta' => 'https://www.instagram.com/mywebsite',
                'url_linkedin' => 'https://www.linkedin.com/company/mywebsite',
            ],
            // Add more settings as needed
        ];

        // Create settings using the defined data
        foreach ($settings as $settingData) {
            Setting::create($settingData);
        }
    }
}
