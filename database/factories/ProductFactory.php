<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'uuid' => Str::uuid(),
            'name' => $name = $this->faker->words(5, true),
            'slug' => Str::slug($name),
            'description' => $this->faker->words(20, true),
            'price' => random_int(10000, 999999)
        ];
    }
}
