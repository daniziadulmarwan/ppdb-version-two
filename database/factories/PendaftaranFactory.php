<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PendaftaranFactory extends Factory
{
    public function definition(): array
    {
        return [
            'student_id' => mt_rand(1, 200),

            // Data Pilihan Sekolah
            'reg_number' => Str::upper('pb' . date('Y') . '-' . Str::random(8)),
            'jenjang' => mt_rand(1, 2),
            'is_pesantren' => mt_rand(1, 2),
            'tahun_lulus' => mt_rand(2020, 2022),
            'jenis_pendaftaran' => mt_rand(1, 2),

            // from empty input javascript
            // 'tahun_ppdb' => date('Y'),
            'tahun_ppdb' => mt_rand(2022, 2029),

            // Data Pribadi
            'fullname' => fake()->name(),
            'nisn' => '0116489552',
            'nik' => strval(fake()->nik()),
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
            'province' => mt_rand(11, 94),
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
