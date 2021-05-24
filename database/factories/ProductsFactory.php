<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Products::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name'=>$this->faker->name(),
            'product_description'=>$this->faker->sentence(),
            'category_id'=>$this->faker->randomDigit(),
            'subcategory_id'=>$this->faker->randomDigit(),
            'quantity'=>$this->faker->randomDigit(),
            'price'=>$this->faker->numerify($string = '###'),
            'size'=>$this->faker->randomElement($array = array ('S','M','L','XL','XXL')),
            'discount'=>$this->faker->numerify($string='##'),
        ];
    }
}
