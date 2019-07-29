<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Shop::class, 50)->create();
        factory(\App\Product::class, 150)->create();
        factory(\App\Country::class, 150)->create();
        factory(\App\Manager::class, 150)->create();
    }
}
