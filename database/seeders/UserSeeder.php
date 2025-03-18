<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Admin
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        // Petugas
        User::create([
            'name' => 'Petugas User',
            'email' => 'petugas@example.com',
            'password' => Hash::make('password'),
            'role' => 'petugas'
        ]);

        // Peminjam
        User::create([
            'name' => 'Peminjam User',
            'email' => 'peminjam@example.com',
            'password' => Hash::make('password'),
            'role' => 'peminjam'
        ]);
    }
}
