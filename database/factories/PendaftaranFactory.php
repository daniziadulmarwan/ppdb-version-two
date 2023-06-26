<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PendaftaranFactory extends Factory
{
    public function definition()
    {
        return [
            'reg_number' => Str::upper('pb' . date('Y') . '-' . Str::random(8)),
            'jenjang' => mt_rand(1, 2),
            'is_pesantren' => mt_rand(1, 2),
            'tahun_lulus' => mt_rand(2020, 2022),
            'jenis_pendaftaran' => mt_rand(1, 2),
            'tahun_ppdb' => date('Y'),

            'fullname' => $this->faker->name(),
            'nisn' => '12233435456546',
            'nik' => $this->faker()->nik(),
            'gender' => mt_rand(1, 2),
            'born_place' => $this->faker->city(),
            'born_date' => $this->faker->dateTime('Y-m-d'),
            'agama' => mt_rand(1, 6),
            'status_keluarga' => mt_rand(1, 6),
            'jumlah_saudara' => mt_rand(1, 8),
            'anak_ke' => mt_rand(1, 8),
            'wa_number' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),

            // Alamat
            'address' => $this->faker->address(),
            'kode_pos' => mt_rand(12345, 67890),
            'rt' => mt_rand(01, 06),
            'rw' => mt_rand(01, 06),
            'province' => $this->faker->city(),
            'regency' => $this->faker->city(),
            'district' => $this->faker->city(),
            'village' => $this->faker->city(),

            // Data Orang Tua
            'no_kk' => $this->faker()->nik(),
            'nik_ayah' => $this->faker()->nik(),
            'nama_ayah' => $this->faker->name(),
            'pekerjaan_ayah' => mt_rand(1, 10),
            'penghasilan_ayah' => mt_rand(1, 7),
            'nik_ibu' => $this->faker()->nik(),
            'nama_ibu' => $this->faker->name(),
            'pekerjaan_ibu' => mt_rand(1, 10),

            'kk' => $this->faker->date('Ymd'),
            'akte' => $this->faker->date('Ymd'),
            'agree' => 'checked',
        ];
    }
}
