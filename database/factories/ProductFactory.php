<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => $this->faker->name(),
            'price' => $this->faker->numberBetween(200, 1000),
            'category' => 'body-enhancements',
            'type' => $this->faker->randomElement(['weight-gain', 'butt-and-hips', 'flat-tummy', 'stretch-mark-removal', 'infection-treatment']),
            'images' => [$this->faker->imageUrl(), $this->faker->imageUrl()],
            'description' => implode(' ', $this->faker->sentences(200)),
        ];
    }
}
