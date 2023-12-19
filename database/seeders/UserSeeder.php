<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'password' => 'password.',
                'profileImg' => 'adminProfile.jpg',
                'role' => 'admin',
            ],
            [
                'name' => 'john',
                'email' => 'john@gmail.com',
                'password' => 'password.',
                'profileImg' => 'mail.jpg',
                'role' => 'user',
            ],
            [
                'name' => 'bob',
                'email' => 'bob@gmail.com',
                'password' => 'password.',
                'profileImg' => 'smile.jpeg',
                'role' => 'user',
            ],
            [
                'name' => 'bryan',
                'email' => 'bryan@gmail.com',
                'password' => 'password.',
                'profileImg' => 'defaultProfile.jpg',
                'role' => 'user',
            ],
        ];

        DB::table('users')->insert($userList);
    }
}
