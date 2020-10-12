<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'uuid' => Str::uuid(),
            'name' => $name = $this->faker->unique()->words(2, true),
            'slug' => Str::slug($name)
        ];
    }
}
