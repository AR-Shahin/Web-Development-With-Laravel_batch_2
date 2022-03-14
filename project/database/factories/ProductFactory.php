<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(6),
            'slug' => str($this->faker->sentence(6))->slug(),
            'category_id' => rand(1, 3),
            'sub_cat_id' => rand(1, 3),
            'color_id' => rand(1, 3),
            'size_id' => rand(1, 3),
            'description' => $this->faker->text(100),
            'price' => rand(100, 200),
            'sell_price' =>  rand(100, 200),
            'image' => 'storage/product/default.png',
        ];
    }
}
