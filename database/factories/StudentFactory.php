<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'fullname' => fake()->name(),
            'email' => fake()->email(),
            'password' => bcrypt('password'),
        ];
    }
}
