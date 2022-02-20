<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=>'Madee',
                'email'=>'madee@gmail.com',
                'password'=>Hash::make('123'),
                'remember_token'=>null,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>'reihan',
                'email'=>'reihan@gmail.com',
                'password'=>Hash::make('123'),
                'remember_token'=>null,
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        ];

        User::insert($users);
    }
}
