<?php

namespace Database\Seeders;

use Database\Factories\CategoryFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            StoreSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class
        ]);


    }
}
