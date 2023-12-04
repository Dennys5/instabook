<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'name' => 'Gioser',
                'email' => 'hater@forlife.com',
                'password' => 'password'
            ],
            [
                'name' => 'Babar',
                'email' => 'babar@forlife.com',
                'password' => 'password2'
            ],
            [
                'name' => 'Lulu',
                'email' => 'lululemon@forlife.com',
                'password' => 'password3'
            ]
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
            ]);
        }
    }
}
