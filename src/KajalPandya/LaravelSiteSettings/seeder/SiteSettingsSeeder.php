<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;
use Hash;
use App\Models\NewsOrganization;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_settings')->insert([
            'title' => 'Your Project Name',
            'email' => 'email@example.com',
            'copy_right' => 'Copyright © 2021. All rights reserved',
            'instagram' => 'https://www.instagram.com',
            'twitter' => 'https://www.twitter.com',
            'youtube' => 'https://www.youtube.com',
            'vimeo' => 'https://www.vimeo.com'
        ]);
    }
}
