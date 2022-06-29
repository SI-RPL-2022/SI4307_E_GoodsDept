<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama_user'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin123'),
            'alamat'=>'Bandung',
            'no_tlp'=>'08123456789',
            'level'=>1
        ]);
    }
}
