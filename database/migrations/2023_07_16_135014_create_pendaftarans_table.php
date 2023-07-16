<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id')->constrained()->onDelete('cascade');

            // Data Pilihan Sekolah
            $table->string('reg_number');

            $table->integer('jenjang');
            $table->integer('is_pesantren');
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
            $table->integer('jumlah_saudara')->nullable()->default(0);
            $table->integer('anak_ke')->nullable();
            $table->string('wa_number');
            $table->string('email')->nullable();

            // Alamat
            $table->string('address');
            $table->char('rt', 3)->nullable()->default(0);
            $table->char('rw', 3)->nullable()->default(0);
            $table->char('kode_pos', 5)->nullable();
            $table->string('province');
            $table->string('regency');
            $table->string('district');
            $table->string('village');

            // Data Orang Tua
            $table->string('no_kk')->nullable();
            $table->string('nik_ayah')->nullable();
            $table->string('nama_ayah');
            $table->integer('pekerjaan_ayah')->nullable();
            $table->integer('penghasilan_ayah')->nullable();
            $table->string('nik_ibu')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->integer('pekerjaan_ibu')->nullable();

            // Data Sekolah Asal
            $table->string('asal_sekolah')->nullable();
            $table->string('seri_ijazah')->nullable();
            $table->string('kip_number')->nullable();

            // Upload Berkas
            $table->string('kk')->nullable();
            $table->string('akte')->nullable();
            $table->string('foto')->nullable();

            // Validation
            $table->string('agree');
            $table->enum('status', ['pending', 'reject', 'accept'])->default('pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
