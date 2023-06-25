<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();

            // Data Pilihan Sekolah
            $table->string('reg_number');
            $table->integer('jenjang');
            $table->boolean('is_pesantren');
            $table->year('tahun_lulus');
            $table->integer('jenis_pendaftaran');
            $table->string('pilihan_kelas')->nullable();

            //from empty input javascript
            $table->year('tahun_ppdb');

            // Data Pribadi
            $table->string('fullname');
            $table->string('nisn');
            $table->string('nik')->nullable();
            $table->string('gender');
            $table->string('born_place');
            $table->date('born_date');
            $table->integer('agama');
            $table->integer('status_keluarga');
            $table->string('jumlah_saudara')->nullable();
            $table->string('anak_ke', 2)->nullable();
            $table->string('wa_number');
            $table->string('email')->nullable();

            // Alamat
            $table->string('address');
            $table->char('rt', 3);
            $table->char('rw', 3);
            $table->char('kode_pos', 5);
            $table->string('province');
            $table->string('regency');
            $table->string('district');
            $table->string('village');

            // Data Orang Tua
            $table->string('nama_ayah');
            $table->integer('pekerjaan_ayah')->nullable();
            $table->integer('penghasilan_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->integer('pekerjaan_ibu')->nullable();

            // Data Sekolah Asal
            $table->string('asal_sekolah');
            $table->string('seri_ijazah')->nullable();

            // Upload Berkas
            $table->string('kk');
            $table->string('akte')->nullable();
            $table->string('foto')->nullable();

            // Validation
            $table->string('agree');
            $table->enum('status', ['reject', 'accept', 'pending'])->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pendaftarans');
    }
};
