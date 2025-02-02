<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Consulta>
 */
class ConsultaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'medico_id' => $this->faker->numberBetween(1, 10),
            'paciente_id' => $this->faker->numberBetween(1, 100),
            'data' => $this->faker->date()
        ];
    }
}
