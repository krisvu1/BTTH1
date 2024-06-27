<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('carts')->insert([
            [
                'name' => 'Product 1',
                "user_id" => 1,
                'image' => 'product1.jpg',
                'buyer' => 'Prof. Davonte Altenwerth IV',
                'quantity' => 2,
                'status' => 'Completed',
                'buy_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product 2',
                "user_id" => 1,
                'image' => 'product2.jpg',
                'buyer' => 'Mr. Henderson Ward',
                'quantity' => 2,
                'status' => 'Pending',
                'buy_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product 3',
                "user_id" => 1,
                'image' => 'product3.jpg',
                'buyer' => 'Mr. Henderson Warsd',
                'quantity' => 1,
                'status' => 'Cancelled',
                'buy_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product 4',
                "user_id" => 2,
                'image' => 'product4.jpg',
                'buyer' => 'Mr. Henderson ',
                'quantity' => 5,
                'status' => 'Completed',
                'buy_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Product 5',
                "user_id" => 3,
                'image' => 'product6.jpg',
                'buyer' => 'Mr ',
                'quantity' => 2,
                'status' => 'Pending',
                'buy_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],


        ]);
    }
}
