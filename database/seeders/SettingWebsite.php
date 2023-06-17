<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingWebsite extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SettingWebsite::create([
            'logo' => 'logo_default.png',
            'favicon'  => 'favicon_default.ico',
            'title_web' => '13NADIMUSIK',
            'name_web'  => '',
            'footer_web'  => 'DIGICORE',
            'desc_web'  => 'Let&#39;s Connect',
            'version_web'  => '1.0',
            'wa'  => '085767113554',
            'phone'  => '085767113554',
            'mail'  => 'hello@13nadimusik.id',
            'address'  => 'Grand Galaxy City RSO B No.17 Bekasi',
            'instagram'  => 'https://www.instagram.com/13nadimusik/',
            'twitter'  => 'https://twitter.com/13nadimusik',
            'facebook'  => 'https://www.facebook.com/13nadimusik',
            'youtube'  => 'https://www.youtube.com/c/13NadiMusik',
        ]);
    }
}
