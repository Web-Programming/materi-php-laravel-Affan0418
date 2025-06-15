<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'nama' => 'Ariq',
            'email' => 'admin@gmail.com',
            'jabatan' => 'Admin',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);
        User::create([
            'nama' => 'Affan',
            'email' => 'admin2@gmail.com',
            'jabatan' => 'Admin',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);
        User::create([
            'nama' => 'Given',
            'email' => 'Given@gmail.com',
            'jabatan' => 'Karyawan',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);
        User::create([
            'nama' => 'Wewen',
            'email' => 'Wewen@gmail.com',
            'jabatan' => 'Karyawan',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);
    }
}
