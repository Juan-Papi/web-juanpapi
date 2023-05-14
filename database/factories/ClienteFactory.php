<?php

namespace Database\Factories;

use App\Models\Cliente;
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
    protected $model = Cliente::class;
    public function definition(): array
    {
        return [
            /*'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'nro_telefono' => $this->faker->phoneNumber,
            'fecha_nacimiento' => $this->faker->date(),
            'fecha_registro' => $this->faker->date(),
            'genero' => $this->faker->randomElement(['M', 'F']), // 'M' para masculino, 'F' para femenino
            'tipo' => $this->faker->randomElement(['Empresa', 'Persona normal']),*/
        ];
    }
}
