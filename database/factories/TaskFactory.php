<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(10),
            'owner_id' => User::get()->random()->id,
            'deadline' => $this->faker->date('Y-m-d'),
            'deadline_shift' => random_int(0, 1),
        ];
    }
}
