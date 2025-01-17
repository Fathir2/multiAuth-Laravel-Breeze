<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('1234567'),
            'role' => 'admin',
 
        ]);
        $user = User::create([
            'name' => 'User Satu',
            'email' => 'user@example.com',
            'password' => Hash::make('1234567'),
            'role' => 'user',
 
        ]);

    }
}
