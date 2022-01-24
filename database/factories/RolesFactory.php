<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RolesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'event_name' => $this->faker->word(),
            'event_date' => $this->faker->date(),
            'event_img' => $this->faker->imageUrl(200,200),
            'event_capacity' => $this->faker->numberBetween(10,200),
        ];
    }
}
