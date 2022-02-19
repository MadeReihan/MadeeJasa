<?php

namespace Database\Seeders;

use App\Models\DetailUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DetailUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Detail_User = [
            [
                'users_id'=>1,
                'photo'=>'',
                'role'=>'website developer',
                'contact_number'=>'',
                'biography'=>'',
                
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'users_id'=>2,
                'photo'=>'',
                'role'=>'UI',
                'contact_number'=>'',
                'biography'=>'',
                
                'created_at'=>now(),
                'updated_at'=>now()
            ] 
        ];

        DetailUser::insert($Detail_User);
    }
}
