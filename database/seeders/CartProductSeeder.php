<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cart_product')->insert([
            [
                'cart_id' => 1,
                'product_id' => 1,
                'quantity' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'cart_id' => 1,
                'product_id' => 2,
                'quantity' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'cart_id' => 1,
                'product_id' => 4,
                'quantity' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'cart_id' => 2,
                'product_id' => 4,
                'quantity' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],




        ]);
    }
}
