<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'event_name' => $this->faker->name(),
            'event_date' => $this->faker->date(),
            'event_description' => $this->faker->text(255),
            'event_image' => $this->faker->imageUrl(200,200),
            'event_capacity' => $this->faker->numberBetween(10,100),
        ];
    }
}