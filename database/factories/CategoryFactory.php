<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $categoryNames = [
        'Electronics',
        'Clothing',
        'Home & Garden',
        'Books',
        'Toys',
        'Sports',
        'Beauty',
        'Health',
        'Automotive',
        'Jewelry'
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
              'name' => fake()->randomElement($this->categoryNames),
              'description' => fake()->paragraph(),
        ];
    }
}
