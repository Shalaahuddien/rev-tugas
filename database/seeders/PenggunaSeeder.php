<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Pengguna::query()
        ->create([
            "nama" => "Fulan",
            "email" => "fulan@gmail.com",
            "password" => Hash::make("fulan123")

            // "nama" => "Daffa",
            // "email" => "udin@gmail.com",
            // "password" => Hash::make("udin123")

        ]);

        // ([
        //     "nama" => "Daffa",
        //     "email" => "udin@gmail.com",
        //     "password" => Hash::make("udin123")
        // ]);

    }
}
