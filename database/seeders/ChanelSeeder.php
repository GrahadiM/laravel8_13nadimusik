<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChanelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Chanel::create([
            'part' => 'snippet',
            'channelId' => 'UCqXoFpy1zT9oYR5y6DTuGyA',
            'maxResults' => 1,
            'apiKey' => 'AIzaSyCwpmAadmlAOm5prywcs9h4MyjQsy0i87s',
            'youTubeEndPoint' => 'https://www.googleapis.com/youtube/v3/channels',
        ]);


        \App\Models\EmbedChanel::create([
            'name' => '13 NADI MUSIK',
            'thumbnail' => 'public/images/chanel/thumbnail_default.png',
            'link' => 'https://www.youtube.com/c/13NadiMusik',
        ]);
        \App\Models\EmbedChanel::create([
            'name' => 'YoMan 13Project',
            'thumbnail' => 'public/images/chanel/yoman13.png',
            'link' => 'https://www.youtube.com/c/Yoman13Project',
        ]);
        \App\Models\EmbedChanel::create([
            'name' => 'Goyang 13',
            'thumbnail' => 'public/images/chanel/goyang13.png',
            'link' => 'https://www.youtube.com/c/13NadiMusik',
        ]);
        \App\Models\EmbedChanel::create([
            'name' => 'Cahaya 13',
            'thumbnail' => 'public/images/chanel/cahaya13.png',
            'link' => 'https://www.youtube.com/c/13NadiMusik',
        ]);
    }
}
