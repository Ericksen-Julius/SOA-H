<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'airline_id' => $this->faker->numberBetween(1, 10), // Asumsikan Anda memiliki 10 airlines di database
            'class_type' => $this->faker->numberBetween(1, 3), // Misalnya, tiga jenis kelas: 1, 2, dan 3
            'airport_origin' => $this->faker->numberBetween(1, 10), // Asumsikan Anda memiliki 20 airport di database
            'airport_destination' => $this->faker->numberBetween(1, 10), // Asumsikan Anda memiliki 20 airport di database
            'capacity' => $this->faker->numberBetween(100, 300), // Misalnya, kapasitas antara 100 hingga 300
            'weight_limit' => $this->faker->numberBetween(1000, 5000), // Misalnya, batas berat antara 1000 hingga 5000
            'price' => $this->faker->numberBetween(100, 1000), // Misalnya, harga antara 100 hingga 1000
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
