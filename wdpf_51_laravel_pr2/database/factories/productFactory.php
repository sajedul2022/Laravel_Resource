<?php

namespace Database\Factories;
use App\Models\Product;


use Illuminate\Database\Eloquent\Factories\Factory;

class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'product_name' => $this->faker->name(),
            'product_details' => $this->faker->text(),
            'product_price' => $this->faker->randomDigit(),
            'product_image' => $this->faker->imageUrl(640,480),
            'product_category' => $this->faker->randomDigit(),

        ];
    }
}
