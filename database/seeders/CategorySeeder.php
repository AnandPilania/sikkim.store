<?php

namespace Database\Seeders;

use App\Models\Store;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Store::all() as $store) CategoryFactory::times(10)->create(['store_id' => $store->id]);
    }
}
