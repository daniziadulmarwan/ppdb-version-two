<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewStudent>
 */
class NewStudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Data Pilihan Sekolah
            'reg_number' => Str::upper('pb' . date('Y') . '-' . Str::random(8)),
            'jenjang' => mt_rand(1, 2),
            'is_pesantren' => mt_rand(1, 2),
            'tahun_lulus' => mt_rand(2020, 2022),
            'jenis_pendaftaran' => mt_rand(1, 2),

            // from empty input javascript
            'tahun_ppdb' => date('Y'),

            // Data Pribadi
            'fullname' => fake()->name(),
            'nisn' => '12233435456546',
            'nik' => fake()->nik(),
            'gender' => mt_rand(1, 2),
            'born_place' => fake()->city(),
            'born_date' => fake()->dateTime('Y-m-d'),
            'agama' => mt_rand(1, 6),
            'status_keluarga' => mt_rand(1, 6),
            'jumlah_saudara' => mt_rand(1, 8),
            'anak_ke' => mt_rand(1, 8),
            'wa_number' => fake()->phoneNumber(),
            'email' => fake()->email(),

            // Alamat
            'address' => fake()->address(),
            'kode_pos' => mt_rand(12345, 67890),
            'rt' => mt_rand(01, 06),
            'rw' => mt_rand(01, 06),
            'province' => fake()->city(),
            'regency' => fake()->city(),
            'district' => fake()->city(),
            'village' => fake()->city(),

            // Data Orang Tua
            'no_kk' => fake()->nik(),
            'nik_ayah' => fake()->nik(),
            'nama_ayah' => fake()->name(),
            'pekerjaan_ayah' => mt_rand(1, 10),
            'penghasilan_ayah' => mt_rand(1, 7),
            'nik_ibu' => fake()->nik(),
            'nama_ibu' => fake()->name(),
            'pekerjaan_ibu' => mt_rand(1, 10),

            // Upload Berkas
            'kk' => fake()->date('Ymd'),

            // Validation
            'agree' => 'checked',
        ];
    }
}