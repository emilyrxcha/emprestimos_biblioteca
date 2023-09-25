<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LivroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->sentence(),
            'autor' => $this->faker->firstName($gender = 'male'|'female'),
            'isbn' => $this->faker->phoneNumber()
        ];
    }
}
