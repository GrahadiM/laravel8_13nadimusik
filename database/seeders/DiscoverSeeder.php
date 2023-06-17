<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DiscoverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Discover::create([
            'part' => 'snippet',
            'channelId' => 'UCqXoFpy1zT9oYR5y6DTuGyA',
            'maxResults' => 2,
            'country' => 'ID',
            'orderBy' => 'viewCount',
            'type' => 'video',
            'apiKey' => 'AIzaSyCwpmAadmlAOm5prywcs9h4MyjQsy0i87s',
            'youTubeEndPoint' => 'https://www.googleapis.com/youtube/v3/search',
        ]);


        \App\Models\EmbedDiscover::create([
           'name' => 'SABODO TEUING',
           'link' => 'https://www.youtube.com/embed/3JEz0p02cW8',
        ]);
        \App\Models\EmbedDiscover::create([
           'name' => 'TRI SUAKA',
           'link' => 'https://www.youtube.com/embed/yYED-TUjx6U',
        ]);
    }
}
