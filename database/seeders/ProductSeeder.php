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
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRo4uhhf7XgNzZ7Lw9NU1oxWKurKqMNs53_RQ&s',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ultrabook',
                'description' => 'Lightweight ultrabook laptop',
                'price' => 1200.00,
                'category_id' => 2,
                'sold' => 300,
                'i' => 'https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/i/p/iphone-15-plus_1__1.png',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Android Smartphone',
                'description' => 'Latest Android smartphone',
                'price' => 800.00,
                'category_id' => 3,
                'sold' => 500,
                'i' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCu6sgUeTmYLu3WRulbqAr6u4Tqz3UObpe8A&s',
                'status' => 'inactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'iPhone',
                'description' => 'Latest model iPhone',
                'price' => 1200.00,
                'category_id' => 3,
                'sold' => 450,
                'i' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRo4uhhf7XgNzZ7Lw9NU1oxWKurKqMNs53_RQ&s',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '4K TV',
                'description' => 'Ultra HD 4K television',
                'price' => 900.00,
                'category_id' => 6,
                'sold' => 200,
                'i' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4gG5KgwzqMchV7PxpbR9snoU9dcbA3oeX6Q&s',
                'status' => 'inactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Refrigerator',
                'description' => 'Double door refrigerator',
                'price' => 700.00,
                'category_id' => 5,
                'sold' => 150,
                'i' => 'https://bizweb.dktcdn.net/thumb/1024x1024/100/441/580/products/thiet-ke-chua-co-ten-23.png?v=1660874225667',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Microwave Oven',
                'description' => '800W microwave oven',
                'price' => 150.00,
                'category_id' => 5,
                'sold' => 180,
                'i' => 'images/microwave_oven.jpg',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smart TV',
                'description' => 'Smart TV with internet access',
                'price' => 1000.00,
                'category_id' => 6,
                'sold' => 220,
                'i' => 'images/smart_tv.jpg',
                'status' => 'inactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
