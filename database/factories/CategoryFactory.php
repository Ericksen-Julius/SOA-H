<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = ['hotel', 'airline', 'attraction', 'rental', 'package'];
        return [
            'category_type' => $this->faker->randomElement($types),
            'entity_id' => $this->faker->numberBetween(1, 10), // Asumsikan Anda memiliki 10 airlines di database
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
