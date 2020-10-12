<?php

namespace Database\Seeders;

use Database\Factories\StoreFactory;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 20) as $item) StoreFactory::new()->create(['logo' => $item]);
    }
}
