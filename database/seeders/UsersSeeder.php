<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('11223344'),
                'role' => 'admin',
                'status' => 'active',
            ],
            [
                'name' => 'Agent',
                'username' => 'agent',
                'email' => 'agent@gmail.com',
                'password' => Hash::make('11223344'),
                'role' => 'agent',
                'status' => 'active',
            ],
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('11223344'),
                'role' => 'user',
                'status' => 'active',
            ],
        ];

        foreach ($users as $userData) {
            User::create($userData);
        }

//        User::updateOrCreate(
//            ['email' => 'admin@gmail.com'], // Attributes to check
//            [
//                'name' => 'Admin',
//                'username' => 'admin',
//                'password' => Hash::make('11223344'),
//                'role' => 'admin',
//                'status' => 'active',
//            ]
//        );
//
//        User::updateOrCreate(
//            ['email' => 'agent@gmail.com'], // Attributes to check
//            [
//                'name' => 'Agent',
//                'username' => 'agent',
//                'password' => Hash::make('11223344'),
//                'role' => 'agent',
//                'status' => 'active',
//            ]
//        );
//
//        User::updateOrCreate(
//            ['email' => 'user@gmail.com'], // Attributes to check
//            [
//                'name' => 'User',
//                'username' => 'user',
//                'password' => Hash::make('11223344'),
//                'role' => 'user',
//                'status' => 'active',
//            ]
//        );
    }
}
