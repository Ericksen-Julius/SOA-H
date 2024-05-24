<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rooms>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hotel_id' => $this->faker->numberBetween(1, 10), // Hotel ID antara 1 hingga 10
            'type' => $this->faker->word,
            'total_room' => $this->faker->numberBetween(1, 100),
            'detail' => $this->faker->paragraph,
            'capacity' => $this->faker->numberBetween(1, 10),
            'price' => $this->faker->numberBetween(500_000, 5_000_000),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
