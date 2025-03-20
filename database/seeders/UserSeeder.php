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
        $data = [
            [
                'username' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin'
            ],
            [
                'username' => 'Petugas User',
                'email' => 'petugas@example.com',
                'password' => Hash::make('password'),
                'role' => 'petugas'
            ],
            [
                'username' => 'Peminjam User',
                'email' => 'peminjam@example.com',
                'password' => Hash::make('password'),
                'role' => 'peminjam'
            ]
        ];

        User::insert($data);
    }
}
