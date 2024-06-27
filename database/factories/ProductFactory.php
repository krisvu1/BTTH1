<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'category' => $this->faker->randomElement(['Category 1', 'Category 2', 'Category 3']),
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'image' => $this->faker->imageUrl(),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'sold' => $this->faker->dateTime(),
        ];
    }
}
