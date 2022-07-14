<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "price" => rand(100000, 99000000),
            "img" => $this->faker->imageUrl($width = 200, $height = 200),
            "description" => $this->faker->sentence(),
            "category" => $this->faker->name(),
            "created_at" => date_create()
        ];
    }
}
