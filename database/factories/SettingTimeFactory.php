<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SettingTimeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'time' => 'off'
        ];
    }
}
