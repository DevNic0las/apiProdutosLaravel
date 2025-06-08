<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = $this->faker->words(2, true);
        return [
            'product_name' => $name,
            'slug' => Str::slug($name),
            'uuid' => Str::uuid(),
            'price' => $this->faker->randomFloat(2, 5, 200),
            'amount' => $this->faker->numberBetween(0, 100),
        ];
    }
}
