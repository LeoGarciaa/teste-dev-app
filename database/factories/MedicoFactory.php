<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medico>
 */
class MedicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'especialidade' => fake()->randomElement([
                'Clínica Médica',
                'Pediatria',
                'Cirurgia Geral',
                'Ginecologia e Obstetrícia',
                'Anestesiologia',
                'Ortopedia e Traumatologia',
                'Medicina do Trabalho',
                'Cardiologia'
            ]),
            'cidade_id' => fake()->numberBetween(1, 5),
        ];
    }
}
