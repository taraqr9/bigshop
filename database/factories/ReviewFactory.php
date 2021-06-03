<?php

namespace Database\Factories;

use App\Models\Products;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

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
            'rating'=>rand(0,100)/10,
            'review'=>$this->faker->sentence(),
            'user_name'=>User::all()->random()->name,
            'user_email'=>User::all()->random()->email,
        ];
    }
}
