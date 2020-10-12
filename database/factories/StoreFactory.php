<?php

namespace Database\Factories;

use App\Models\Store;
use Hash;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use function Sodium\increment;

class StoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Store::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => Str::uuid(),
            'name' => $name = $this->faker->unique()->name,
            'email' =>$this->faker->unique()->safeEmail,
            'phone' =>$this->faker->unique()->phoneNumber,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'slug' => Str::slug($name),
            'logo' => rand(1, 20),
            'address' => $this->faker->streetAddress.' '.$this->faker->city,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => now()->subMonths(rand(1, 9))
        ];
    }
}
