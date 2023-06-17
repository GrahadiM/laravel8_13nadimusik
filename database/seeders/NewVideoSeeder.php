<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\NewVideo::create([
            'part' => 'snippet',
            'channelId' => 'UCqXoFpy1zT9oYR5y6DTuGyA',
            'maxResults' => 4,
            'country' => 'ID',
            'orderBy' => 'date',
            'type' => 'video',
            'apiKey' => 'AIzaSyCwpmAadmlAOm5prywcs9h4MyjQsy0i87s',
            'youTubeEndPoint' => 'https://www.googleapis.com/youtube/v3/search',
        ]);


        \App\Models\EmbedNewRelease::create([
            'name' => 'TRI SUAKA',
            'link' => 'https://www.youtube.com/embed/I5DQFzTTn_w',
        ]);
        \App\Models\EmbedNewRelease::create([
            'name' => 'DUO MLETRE',
            'link' => 'https://www.youtube.com/embed/8qZyK3mIS6Q',
        ]);
        \App\Models\EmbedNewRelease::create([
            'name' => 'TRI SUAKA',
            'link' => 'https://www.youtube.com/embed/-U3ihe7lDEs',
        ]);
        \App\Models\EmbedNewRelease::create([
            'name' => 'IKHSAN NUGRAHA',
            'link' => 'https://www.youtube.com/embed/1hilk13MxbM',
        ]);
    }
}
