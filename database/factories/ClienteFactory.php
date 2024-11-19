<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'nombre' => $this->faker->firstName(),
        'apellido' => $this->faker->lastName(),
        'correo' => $this->faker->unique()->safeEmail(),
        'telefono' => $this->faker->phoneNumber(),
        'direccion' => $this->faker->address(),
        'fecha_nacimiento' => $this->faker->date(),
        'tipo_cliente' => $this->faker->randomElement(['individual', 'empresa']),
        'identificacion' => $this->faker->unique()->numerify('##########'),



        ];
    }
}
