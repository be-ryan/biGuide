<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userList = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password.'),
                'profileImg' => 'adminProfile.jpg',
                'role' => 'admin',
            ],
            [
                'name' => 'john',
                'email' => 'john@gmail.com',
                'password' => Hash::make('password.'),
                'profileImg' => 'mail.jpg',
                'role' => 'user',
            ],
            [
                'name' => 'bob',
                'email' => 'bob@gmail.com',
                'password' => Hash::make('password.'),
                'profileImg' => 'smile.jpeg',
                'role' => 'user',
            ],
            [
                'name' => 'bryan',
                'email' => 'bryan@gmail.com',
                'password' => Hash::make('password.'),
                'profileImg' => 'defaultProfile.jpg',
                'role' => 'user',
            ],
        ];

        DB::table('users')->insert($userList);
    }
}
