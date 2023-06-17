<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TermsOfServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\TermsOfService::create([
            'title_id' => 'Persyaratan Layanan',
            'title_en' => 'Terms of Service',
            'body_id' => 'Persyaratan Layanan<br><b>Rasa sakit itu sendiri penting bagi elit adipisicing utama. Ini mencegah Anda menemukan waktu lain untuk mengemudi kembali. Modus kebencian yang diperlukan tampaknya tersampaikan. Saya akan membuka dan atau tidak terikat untuk diikat Saya akan menjelaskan resultan yang paling layak.</b>',
            'body_en' => 'Terms of Service<br><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit porro ut alias repellat perspiciatis. Debitis modi veroincidunt odio perferendis. Aperiam a et vel soluta ut tenetur explicabo pariatur dignissimos.</b>',
        ]);
    }
}
