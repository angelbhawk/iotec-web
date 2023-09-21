<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Device>
 */
class DeviceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->regexify('[device]+-[A-Z0-9.-]+'),
            'type' => fake()->randomElement($array = array ('distancia', 'humedad', 'luz', 'posición', 'presión', 'proximidad', 'sonido', 'temperatura'))
        ];
    }
}
