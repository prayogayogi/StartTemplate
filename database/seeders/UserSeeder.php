<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Admin
        $admin = User::create([
            'name'      => 'admin',
            'email'     => 'admin@example.com',
            'password'  => bcrypt('password'),
        ]);
        $admin->assignRole('admin');

        // Penulis
        $penulis = User::create([
            'name'      => 'penulis',
            'email'     => 'penulis@example.com',
            'password'  => bcrypt('password'),
        ]);
        $penulis->assignRole('penulis');
    }
}
