<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TelefoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->randomElement(['casa', 'trabalho', 'pessoal', 'celular', 'secreto']),
            'numero' => $this->faker->unique()->phoneNumber(),
            'aluno_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
