<?php

namespace App\Http\Livewire;

use App\Models\NewStudent;
use Livewire\Component;

class EditStudent extends Component
{
    public $studentId;

    public $jenjang;
    public $is_pesantren;
    public $tahun_lulus;
    public $jenis_pendaftaran;
    public $pilihan_kelas;
    public $tahun_ppdb;

    public $fullname;
    public $nisn;
    public $nik;
    public $gender;
    public $born_place;
    public $born_date;
    public $agama;
    public $status_keluarga;
    public $jumlah_saudara;
    public $anak_ke;
    public $wa_number;
    public $email;

    public $address;
    public $rt;
    public $rw;
    public $kode_pos;
    public $province;
    public $regency;
    public $district;
    public $village;

    public $no_kk;
    public $nik_ayah;
    public $nama_ayah;
    public $pekerjaan_ayah;
    public $penghasilan_ayah;
    public $nik_ibu;
    public $nama_ibu;
    public $pekerjaan_ibu;

    public $asal_sekolah;
    public $seri_ijazah;
    public $kip_number;

    protected $listeners = ['getIdStudent' => 'getStudentId'];

    protected $rules = [
        'jenjang' => ['required', 'in:1,2'],
        'is_pesantren' => ['required', 'in:1,2'],
        'tahun_lulus' => ['required'],
        'jenis_pendaftaran' => ['required'],
        'pilihan_kelas' => ['nullable'],
        'tahun_ppdb' => ['required'],

        'fullname' => ['required'],
        'nisn' => ['required', 'max:12'],
        'nik' => ['nullable'],
        'gender' => ['required', 'in:1,2'],
        'born_place' => ['required'],
        'born_date' => ['required'],
        'agama' => ['required', 'in:1,2,3,4,5,6'],
        'status_keluarga' => ['required', 'in:1,2,3,4'],
        'jumlah_saudara' => ['nullable'],
        'anak_ke' => ['nullable'],
        'wa_number' => ['required'],
        'email' => ['nullable'],

        'address' => ['required'],
        'rt' => ['nullable'],
        'rw' => ['nullable'],
        'kode_pos' => ['nullable', 'max:5', 'min:5'],
        'province' => ['required'],
        'regency' => ['required'],
        'district' => ['required'],
        'village' => ['required'],

        'no_kk' => ['nullable'],
        'nik_ayah' => ['nullable'],
        'nama_ayah' => ['required'],
        'pekerjaan_ayah' => ['nullable', 'in:1,2,3,4,5,6,7,8,9,10'],
        'penghasilan_ayah' => ['nullable', 'in:1,2,3,4,5,6,7'],
        'nik_ibu' => ['nullable'],
        'nama_ibu' => ['nullable'],
        'pekerjaan_ibu' => ['nullable', 'in:1,2,3,4,5,6,7,8,9,10'],

        'asal_sekolah' => ['nullable'],
        'seri_ijazah' => ['nullable'],
        'kip_number' => ['nullable'],

        'kk' => ['required', 'image', 'file', 'max:1024'],
        'akte' => ['required', 'image', 'file', 'max:1024'],
        'foto' => ['nullable', 'image', 'file', 'max:1024'],
        'agree' => ['accepted'],
    ];

    protected $message = [
        'jenjang.required' => 'Pilih salah satu dari jenjang sekolah',
        'jenjang.in' => 'Pilih salah satu dari jenjang sekolah',
        'is_pesantren.required' => 'Pilih salah satu antara pesantren atau tanpa pesantren',
        'is_pesantren.in' => 'Pilih salah satu antara pesantren atau tanpa pesantren',
        'tahun_lulus.required' => 'Tahun kelulusan harus diisi',
        'fullname.required' => 'Nama lengkap harus diisi',
        'gender.required' => 'Pilih salah satu dari jenis kelamin',
        'gender.in' => 'Pilih salah satu dari jenis kelamin',
        'born_place.required' => 'Tempat lahir harus diisi',
        'born_date.required' => 'Tanggal lahir harus diisi',
        'wa_number' => 'Nomor whatsapp harus diisi',
        'address.required' => 'Alamat harus diisi',
        'kode_pos.max' => 'Kodepos tidak valid',
        'province.required' => 'Propinsi harus diisi',
        'regency.required' => 'Kabupaten/kota harus diisi',
        'district.required' => 'Kecamatan harus diisi',
        'village.required' => 'Kelurahan/desa harus diisi',
        'no_kk.required' => 'Nomor KK harus diisi',
        'nik_ayah.required' => 'NIK ayah harus diisi',
        'nama_ayah.required' => 'Nama ayah harus diisi',
        'kk.required' => 'KK harus diupload',
        'akte.required' => 'Akte harus diupload',
        'agree.accepted' => 'Harus dicentang',
    ];

    public function render()
    {
        return view('livewire.edit-student');
    }

    public function getStudentId($id)
    {
        $data = NewStudent::find($id);
        $this->studentId = $id;
        $this->fullname = $data->fullname;
    }

    public function save()
    {
        $this->validate($this->rules, $this->message);
    }
}
