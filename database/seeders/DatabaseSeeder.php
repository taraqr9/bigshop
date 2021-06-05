<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\Products;
use App\Models\Review;
use App\Models\SubCategory;
use App\Models\User;
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
        User::factory(10)->create();
        Category::factory(5)->create();
        SubCategory::factory(25)->create();
        Products::factory(200)->create();
        Review::factory(400)->create();
        Cart::factory(150)->create();
    }
}
