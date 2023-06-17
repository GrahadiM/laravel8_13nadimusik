<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Super Admin
        \App\Models\User::create([
            'name' => 'Super Admin',
            'role' => 'administrator',
            'status' => 2,
            'email' => 'adm@test.com',
            'password' => bcrypt('password'),
            'remember_token' => Str::random(60),
            'email_verified_at' => '2022-05-15 00:00:00',
        ]);

        // Admin
        \App\Models\User::create([
            'name' => 'Admin',
            'role' => 'admin',
            'status' => 2,
            'email' => 'admin@test.com',
            'password' => bcrypt('password'),
            'remember_token' => Str::random(60),
            'email_verified_at' => '2022-05-15 00:00:00',
        ]);
    }
}
