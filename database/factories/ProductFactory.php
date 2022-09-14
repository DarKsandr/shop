<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition()
    {
        return [
            "name" => fake()->words(rand(1, 5), true), 
            "sku" => fake()->isbn10(), 
            "description" => fake()->text(), 
            "new" => rand(0, 1), 
            "price" => rand(1, 100000), 
            "discount" => rand(-80, 80), 
            "category_id" => Category::inRandomOrder()->first()->id,
        ];
    }
}
