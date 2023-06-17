<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrowserAllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\BrowserAll::create([
            'part' => 'snippet',
            'maxResults' => 8,
            'country' => 'ID',
            'type' => 'video',
            'apiKey' => 'AIzaSyCwpmAadmlAOm5prywcs9h4MyjQsy0i87s',
            'youTubeEndPoint' => 'https://www.googleapis.com/youtube/v3/search',
        ]);


        \App\Models\EmbedBrowseAll::create([
            'name' => 'Safira Inema - Janji Padamu',
            'link' => 'https://www.youtube.com/embed/KhNMiC4rdYs',
        ]);
        \App\Models\EmbedBrowseAll::create([
            'name' => 'Ridho Tasmar',
            'link' => 'https://www.youtube.com/embed/g3WzqygoU2I',
        ]);
        \App\Models\EmbedBrowseAll::create([
            'name' => 'Chivio',
            'link' => 'https://www.youtube.com/embed/jlI8xsZvfp0',
        ]);
        \App\Models\EmbedBrowseAll::create([
            'name' => 'Yeni Inka ft Aldi Wahyudi',
            'link' => 'https://www.youtube.com/embed/1ks9MQTQOmA',
        ]);
        \App\Models\EmbedBrowseAll::create([
            'name' => 'Tekad',
            'link' => 'https://www.youtube.com/embed/3Jw_2Gktoy4',
        ]);
        \App\Models\EmbedBrowseAll::create([
            'name' => 'Langkahi Mayatku',
            'link' => 'https://www.youtube.com/embed/8uAdylqdIbA',
        ]);
        \App\Models\EmbedBrowseAll::create([
            'name' => 'Lita Manda - Tukang Ojek',
            'link' => 'https://www.youtube.com/embed/t0gDgsW9wrE',
        ]);
        \App\Models\EmbedBrowseAll::create([
            'name' => 'Ikhsan Nugraha',
            'link' => 'https://www.youtube.com/embed/AvkcAwAKy-E',
        ]);
        \App\Models\EmbedBrowseAll::create([
            'name' => 'Kembang Turu',
            'link' => 'https://www.youtube.com/embed/_8Tx9SJKimM',
        ]);

    }
}
