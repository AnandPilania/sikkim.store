<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Store;
use Database\Factories\ProductFactory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Category::all() as $category) {
            ProductFactory::times(10)->create(['category_id' => $category->id, 'store_id' => rand(1, 20)]);
        }
    }
}
