<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Products;
use App\Models\SubCategory;
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
            'category_id'=>Category::all()->random()->id,
            'sub_category_id'=>SubCategory::all()->random()->id,
            'quantity'=>$this->faker->randomDigit(),
            'price'=>$this->faker->randomNumber(),
            'image'=>$this->faker->lexify('??????'),
            'size'=>$this->faker->randomElement($array = array ('S','M','L','XL','XXL')),
            'discount'=>$this->faker->numerify($string='##'),
        ];
    }
}
