<?php

use App\SocialMedia;
use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(SocialMedia $socialMedia)
    {
        $socialMedia->truncate();

        $socialMedia->create([
            'title' => 'Facebook',
            'link' => 'http://facebook.com',
            'icon' => 'facebook',
        ]);

        $socialMedia->create([
            'title' => 'Twitter',
            'link' => 'http://twitter.com',
            'icon' => 'twitter',
        ]);

        $socialMedia->create([
            'title' => 'Instagram',
            'link' => 'http://instagram.com',
            'icon' => 'instagram',
        ]);

        $socialMedia->create([
            'title' => 'YouTube',
            'link' => 'http://youtube.com',
            'icon' => 'youtube',
        ]);

        $socialMedia->create([
            'title' => 'LinkedIn',
            'link' => 'http://linkedin.com',
            'icon' => 'linkedin',
        ]);
    }
}
