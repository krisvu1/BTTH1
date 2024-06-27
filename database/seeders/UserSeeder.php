<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        foreach (range(1, 10) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // mật khẩu mặc định
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'type' => $faker->randomElement(['user', 'admin']), // hoặc một giá trị mặc định nào đó
               
            ]);
        }
    }
}