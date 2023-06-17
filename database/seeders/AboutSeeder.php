<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\About::create([
            'name' => 'Lita Manda',
            'desc_id' => 'Koordinator Marketing',
            'desc_en' => 'Marketing Coordinator',
            'thumbnail' => 'public/images/about/thumbnail_default.png',
        ]);
        \App\Models\About::create([
            'name' => 'Lita Manda 2',
            'desc_id' => 'Koordinator Marketing',
            'desc_en' => 'Marketing Coordinator',
            'thumbnail' => 'public/images/about/thumbnail_default.png',
        ]);
        \App\Models\About::create([
            'name' => 'Lita Manda 3',
            'desc_id' => 'Koordinator Marketing',
            'desc_en' => 'Marketing Coordinator',
            'thumbnail' => 'public/images/about/thumbnail_default.png',
        ]);
        \App\Models\About::create([
            'name' => 'Lita Manda 4',
            'desc_id' => 'Koordinator Marketing',
            'desc_en' => 'Marketing Coordinator',
            'thumbnail' => 'public/images/about/thumbnail_default.png',
        ]);
        \App\Models\About::create([
            'name' => 'Lita Manda 5',
            'desc_id' => 'Koordinator Marketing',
            'desc_en' => 'Marketing Coordinator',
            'thumbnail' => 'public/images/about/thumbnail_default.png',
        ]);
    }
}
