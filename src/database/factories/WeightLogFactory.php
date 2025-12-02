<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WeightLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $hours = $this->faker->numberBetween(0, 2);
        $minutes = $this->faker->numberBetween(0, 59);
        $exerciseTimeDuration = sprintf('%02d:%02d', $hours, $minutes);

        return [
            'user_id' => $this->faker->numberBetween (1, 35),
            'date' => $this->faker->date,
            'weight' => $this->faker->randomFloat(1, 30.0, 150.0),
            'calories' => $this->faker->numberBetween(100, 3000),
            'exercise_time' => $exerciseTimeDuration,
            'exercise_content' => $this->faker->sentence(6),
            'created_at' => $this->faker->dateTimeBetween('-5years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-5years', 'now'),
        ];
    }
}
