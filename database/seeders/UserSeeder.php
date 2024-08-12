<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ashish kumar',
            'email' => 'ashishvindra@gmail.com',
            'password' => Hash::make(23130400),
            'is_admin' => 1
        ]);
    }
}
