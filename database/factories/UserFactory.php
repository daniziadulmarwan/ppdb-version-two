<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'username' => mt_rand(2233445566, 4455667788),
            'password' => bcrypt('password'),
        ];
    }
}
