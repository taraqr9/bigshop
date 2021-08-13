<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Products;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::all()->random()->id,
            'products_id'=>Products::all()->random()->id,
            'product_name'=>$this->faker->name(),
            'price'=>$this->faker->randomNumber(),
            'quantity' =>$this->faker->randomNumber(),
            'user_name'=>User::all()->random()->name,
            'email'=>User::all()->random()->email,
            'phone'=>$this->faker->randomNumber(),
            'address'=>$this->faker->name(),
        ];
    }
}
