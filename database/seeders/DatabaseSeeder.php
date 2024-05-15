<?php

namespace Database\Seeders;

use App\Models\DataUser;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        \App\Models\Bimbingan::create([
            "name" => "Bimbingan Ngaji Privat"
        ]);

        \App\Models\Bimbingan::create([
            "name" => "Bimbingan Ngaji Tahfidz"
        ]);

        \App\Models\Bimbingan::create([
            "name" => "Bimbingan Ngaji Privat Online"
        ]);

        \App\Models\Bimbingan::create([
            "name" => "Bimbingan Ngaji BB"
        ]);

        \App\Models\Jabatan::create([
            "name" => "User"
        ]);

        \App\Models\Jabatan::create([
            "name" => "Pengajar"
        ]);

        \App\Models\Jabatan::create([
            "name" => "Admin"
        ]);

        \App\Models\Jabatan::create([
            "name" => "SuperAdmin"
        ]);

        DataUser::factory(10)->create();
    }
}
