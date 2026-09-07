<?php

namespace Database\Factories;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'submitted_by' => $this->faker->numberBetween(8, 50),
            'assigned_to' => $this->faker->numberBetween(1, 5),
            'category_id' => $this->faker->numberBetween(1, 10),
            'priority' => $this->faker->randomElement(['high', 'medium', 'low']),
            'status' => $this->faker->randomElement(['open', 'assigned', 'pending', 'rejected', 'in-progress', 'closed']),
            'title' => $this->faker->words(5, true),
            'content' => $this->faker->paragraph(5),
        ];
    }


}
