<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ad_seller' => $this->faker->name(),
            'ad_name' => $this->faker->name(),
            'ad_price' => $this->faker->numberBetween(10,40),
            'ad_description' => $this->faker->text(255),
            'ad_image' => $this->faker->imageUrl(200,200),
            
        ];
    }
}