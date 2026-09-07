<?php

namespace Database\Factories;

use App\Models\Reaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Reaction>
 */
class ReactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 50),
            'ticket_id' => $this->faker->numberBetween(1, 200),
            'title' => $this->faker->words(5),
            'content' => $this->faker->sentence(4),
            'status' => $this->faker->numberBetween(1, 4),
            'priority' => $this->faker->numberBetween(1, 5),
        ];
    }
}
