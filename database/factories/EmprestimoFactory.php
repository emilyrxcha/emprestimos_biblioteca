<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmprestimoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'livro_id' => $this->faker->numberBetween(1, 100),
            'aluno_id' => $this->faker->numberBetween(1, 10),
            'datahora' => $this->faker->dateTimeBetween('2022-01-01 00:00:00', '2022-12-31 23:59:59'),
            'data_devolucao' => $this->faker->dateTimeBetween('2022-01-01', '2022-12-31'),
        ];
    }
}
