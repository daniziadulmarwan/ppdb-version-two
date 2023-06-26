<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Pendaftaran;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            [
                'name' => 'Dr. Hasan Zavair Marwan, M.A.',
                'username' => '2233445566',
                'password' => bcrypt('password'),
                'password_text' => 'password'
            ],
            [
                'name' => 'Waris, S.T.',
                'username' => '3344556677',
                'password' => bcrypt('password'),
                'password_text' => 'password'
            ]
        ]);

        Pendaftaran::factory(20)->create();
    }
}
