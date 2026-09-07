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
            'submitted_by_user_id' => $this->faker->numberBetween(8, 50),
            'assigned_to_user_id' => $this->faker->numberBetween(1, 7),
            'category_id' => $this->faker->numberBetween(1, 10),
        ];
    }


}
