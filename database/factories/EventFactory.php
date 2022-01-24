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
            'event_name'=>$this->faker->word(),
            'event_date'=>$this->faker->date(),
            'event_img'=>$this->faker->imageurl(),
            'event_capacity'=>$this->faker->randomNumber(10, 200),
        ];
    }
}



