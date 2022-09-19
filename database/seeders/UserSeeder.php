<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234'), // Hash berfungsi untuk mengenkripsi password
            'address' => 'jalan jalan',
            'phone_number' => '081717303058',
            'role' => 'admin'
        ]);
    }
}
// selanjutnya gunakan php artisan db:seed untuk menambahkan ke db
// php artisan migrate:fresh --seed untuk mengoverwrite data db dengan data baru yg diseed
