<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Admin;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create the user first
        $user = User::create([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'), // Hash the password for security
            'role' => 'admin',
        ]);

        // Use the user's ID to create an admin
        Admin::create([
            'user_id' => $user->id, // Reference to the user ID
            'name' => 'Admin User',
            'm_code' => '+1',
            'mobile' => '1234567890',
            'email' => 'admin@gmail.com',
        ]);
    }
}
