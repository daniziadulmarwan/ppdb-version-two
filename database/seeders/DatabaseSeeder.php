<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\NewStudent;
use App\Models\Pendaftaran;
use App\Models\SettingTime;
use App\Models\Student;
use App\Models\Theme;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Dr. Hasan Zavair Marwan, M.A.',
            'username' => '2233445566',
            'password' => bcrypt('password'),
            'password_text' => 'password',
            'role' => 'admin'
        ]);

        Pendaftaran::factory(500)->create();

        SettingTime::create([
            'time' => 'off'
        ]);

        Student::create([
            'fullname' => fake()->name(),
            'email' => fake()->email(),
            'password' => bcrypt('password'),
        ]);

        Theme::create([
            'mode' => 'light'
        ]);

        $this->call(IndoRegionProvinceSeeder::class);
        $this->call(IndoRegionRegencySeeder::class);
        $this->call(IndoRegionDistrictSeeder::class);
        $this->call(IndoRegionVillageSeeder::class);
    }
}
