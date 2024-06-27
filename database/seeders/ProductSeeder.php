<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Gaming Laptop',
                'description' => 'High performance gaming laptop',
                'price' => 1500.00,
                'category_id' => 2,
                'sold' => 250,
                'image' => 'images/gaming_laptop.jpg',
                'status' => 'active',
            ],
            [
                'name' => 'Ultrabook',
                'description' => 'Lightweight ultrabook laptop',
                'price' => 1200.00,
                'category_id' => 2,
                'sold' => 300,
                'i' => 'images/ultrabook.jpg',
                'status' => 'active',
            ],
            [
                'name' => 'Android Smartphone',
                'description' => 'Latest Android smartphone',
                'price' => 800.00,
                'category_id' => 3,
                'sold' => 500,
                'i' => 'images/android_smartphone.jpg',
                'status' => 'inactive',
            ],
            [
                'name' => 'iPhone',
                'description' => 'Latest model iPhone',
                'price' => 1200.00,
                'category_id' => 3,
                'sold' => 450,
                'i' => 'images/iphone.jpg',
                'status' => 'active',
            ],
            [
                'name' => '4K TV',
                'description' => 'Ultra HD 4K television',
                'price' => 900.00,
                'category_id' => 6,
                'sold' => 200,
                'i' => 'images/4k_tv.jpg',
                'status' => 'inactive',
            ],
            [
                'name' => 'Refrigerator',
                'description' => 'Double door refrigerator',
                'price' => 700.00,
                'category_id' => 5,
                'sold' => 150,
                'i' => 'images/refrigerator.jpg',
                'status' => 'active',
            ],
            [
                'name' => 'Microwave Oven',
                'description' => '800W microwave oven',
                'price' => 150.00,
                'category_id' => 5,
                'sold' => 180,
                'i' => 'images/microwave_oven.jpg',
                'status' => 'active',
            ],
            [
                'name' => 'Smart TV',
                'description' => 'Smart TV with internet access',
                'price' => 1000.00,
                'category_id' => 6,
                'sold' => 220,
                'i' => 'images/smart_tv.jpg',
                'status' => 'inactive',
            ],
        ]);
    }
}
