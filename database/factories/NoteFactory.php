<?php

namespace Database\Factories;

use App\Models\Note;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 7),
            'ticket_id' => $this->faker->numberBetween(1, 200),
            'content' => $this->faker->paragraph(4),
        ];
    }
}
