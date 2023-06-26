<?php

namespace Database\Seeders;

use App\Models\SettingTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingTimeSeeder extends Seeder
{
    public function run(): void
    {
        SettingTime::create([
            'time' => 'off'
        ]);
    }
}
