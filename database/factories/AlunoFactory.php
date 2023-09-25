<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->firstName($gender = 'male'| 'female'),
            'matricula' => $this->faker->randomNumber(7, true),
            'endereco' => $this->faker->address()
        ];
    }
}
