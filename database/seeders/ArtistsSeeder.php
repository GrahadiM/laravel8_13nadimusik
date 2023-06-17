<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Artist::create([
            'name' => 'Lita Manda',
            'desc_id' => 'Saya tahu rute saya, kota dan pelanggan dengan sangat baik. Saya ingin menyelesaikan pekerjaan saya dan pulang tepat waktu.',
            'body_id' =>
            'Zoe mengirimkan paket di sekitar London untuk DHL. Dia sedang mengerjakan kontrak tetap. Menyelesaikan pengiriman adalah prioritas sebagai porter, tetapi tidak ada hari yang sama di jalan. Waktu Zoe sering kali terbatas untuk istirahat.
            <br>
            Zoe mengirimkan paket di sekitar London untuk DHL. Dia sedang mengerjakan kontrak tetap. Menyelesaikan pengiriman adalah prioritas sebagai porter, tetapi tidak ada hari yang sama di jalan. Waktu Zoe sering kali terbatas untuk istirahat.
            <br><br>
            Zoe mengirimkan paket di sekitar London untuk DHL. Dia sedang mengerjakan kontrak tetap. Menyelesaikan pengiriman adalah prioritas sebagai porter, tetapi tidak ada hari yang sama di jalan. Waktu Zoe sering kali terbatas untuk istirahat.',
            'desc_en' => 'I know my routes, the city and customers really well. I want to finish my job and go home on time.',
            'body_en' =>
            'Zoe delivers parcels around London for DHL. She’s working on a fixed contract. Completing deliveries is a piority as a porter, but no day is the same on the roads. Zoe’s time is often limited to take any sort of breaks.
            <br>
            Zoe delivers parcels around London for DHL. She’s working on a fixed contract. Completing deliveries is a piority as a porter, but no day is the same on the roads. Zoe’s time is often limited to take any sort of breaks.
            <br><br>
            Zoe delivers parcels around London for DHL. She’s working on a fixed contract. Completing deliveries is a piority as a porter, but no day is the same on the roads. Zoe’s time is often limited to take any sort of breaks.',
            'profile' => 'public/images/artist/profile/profile_default.png',
            'thumbnail' => 'public/images/artist/thumbnail/thumbnail_default.png',
        ]);
        \App\Models\Artist::create([
            'name' => 'Lita Manda',
            'desc_id' => 'Saya tahu rute saya, kota dan pelanggan dengan sangat baik. Saya ingin menyelesaikan pekerjaan saya dan pulang tepat waktu.',
            'body_id' =>
            'Zoe mengirimkan paket di sekitar London untuk DHL. Dia sedang mengerjakan kontrak tetap. Menyelesaikan pengiriman adalah prioritas sebagai porter, tetapi tidak ada hari yang sama di jalan. Waktu Zoe sering kali terbatas untuk istirahat.
            <br>
            Zoe mengirimkan paket di sekitar London untuk DHL. Dia sedang mengerjakan kontrak tetap. Menyelesaikan pengiriman adalah prioritas sebagai porter, tetapi tidak ada hari yang sama di jalan. Waktu Zoe sering kali terbatas untuk istirahat.
            <br><br>
            Zoe mengirimkan paket di sekitar London untuk DHL. Dia sedang mengerjakan kontrak tetap. Menyelesaikan pengiriman adalah prioritas sebagai porter, tetapi tidak ada hari yang sama di jalan. Waktu Zoe sering kali terbatas untuk istirahat.',
            'desc_en' => 'I know my routes, the city and customers really well. I want to finish my job and go home on time.',
            'body_en' =>
            'Zoe delivers parcels around London for DHL. She’s working on a fixed contract. Completing deliveries is a piority as a porter, but no day is the same on the roads. Zoe’s time is often limited to take any sort of breaks.
            <br>
            Zoe delivers parcels around London for DHL. She’s working on a fixed contract. Completing deliveries is a piority as a porter, but no day is the same on the roads. Zoe’s time is often limited to take any sort of breaks.
            <br><br>
            Zoe delivers parcels around London for DHL. She’s working on a fixed contract. Completing deliveries is a piority as a porter, but no day is the same on the roads. Zoe’s time is often limited to take any sort of breaks.',
            'profile' => 'public/images/artist/profile/profile_default.png',
            'thumbnail' => 'public/images/artist/thumbnail/thumbnail_default.png',
        ]);
    }
}
