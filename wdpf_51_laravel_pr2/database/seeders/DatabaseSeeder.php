<?php

namespace Database\Seeders;

use App\Models\Product;
use Database\Factories\productFactory;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        // Product::factory(100)->create();

        \App\Models\Product::factory(10)->create();;

        // $this->call([
        //     ProductSeeder::class
        // ]);
    }
}
