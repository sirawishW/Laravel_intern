<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'name' => 'Ariana Grande',
            'email' => 'ponytail@gmail.com',
            'role' => 'ADMIN',
            'email_verified_at' => now(),
            'password' => 'adminpass', // password
            'remember_token' => Str::random(10)]
        );
    }
}
