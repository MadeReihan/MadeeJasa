<?php

namespace Database\Seeders;


use App\Models\OrderStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class OrderStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $Order_Status = [
            [
                'name'=>'Approved',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>'Progress',
                'created_at'=>now(),
                'updated_at'=>now()
            ], 
            [
                'name'=>'Rejected',
                'created_at'=>now(),
                'updated_at'=>now()
            ], 
            [
                'name'=>'Waiting',
                'created_at'=>now(),
                'updated_at'=>now()
            ] 
        ];

        OrderStatus::insert($Order_Status);
    }
}
