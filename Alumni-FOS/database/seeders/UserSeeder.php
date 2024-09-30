<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
            'role' => 'admin'
        ]);
        Admin::create([
            'user_id' => $user->id,
            'name' => 'Admin Name',
            'm_code' => Hash::make('password123'),
            'mobile' => 'admin',
            'email' => 'admin@example.com',
        ]);
    }
}
