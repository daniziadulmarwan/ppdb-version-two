@extends('layouts.app')

@push('style')
  @livewireStyles
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
@endpush

@section('content')
  <div class="nk-content">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                         {{--  --}}
                        </div>

                        <div class="nk-block-head-content">
                          <nav>
                            <ul class="breadcrumb breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                                <li class="breadcrumb-item"><a href="/admin/student">Student</a></li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ul>
                          </nav>
                        </div>
                      </div>
                </div>

                <div class="nk-block">
                  <div class="card">
                    <div class="nk-ecwg nk-ecwg6">
                        <div class="card-inner">
                          <!-- Main Content Start -->
                          <form class="form-validate is-alter row">

                            <div class="col-md-12 mb-4">
                              <div class="card">
                                <div class="card-body row">
                        
                                  <!-- Title Header -->
                                  <h6 class="text-primary">Registrasi Peserta Didik</h6>
                                  <hr style="border: 1px dashed rgb(157, 238, 218);">
                        
                                  <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                      <div class="form-control-wrap ">
                                          <div class="form-control-select">
                                              <select class="form-control @error('jenjang') is-invalid @enderror">
                                                  <option hidden>Jenjang Sekolah</option>
                                                  <option value="1" @if(old('jenjang', $data->jenjang) == 1) selected @endif>Madrasah Tsanawiyah</option>
                                                  <option value="2" @if(old('jenjang', $data->jenjang) == 2) selected @endif>Madrasah Aliyah</option>
                                              </select>
                                              @error('jenjang')
                                              <div class="invalid-feedback">
                                                  {{ $message }}
                                              </div>
                                              @enderror
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                      <div class="form-control-wrap">
                                          <div class="form-control-select">
                                              <select class="form-control @error('is_pesantren') is-invalid @enderror" name="is_pesantren">
                                                  <option hidden>Mukim/Tidak Mukim</option>
                                                  <option value="1" @if(old('is_pesantren', $data->is_pesantren) == 1) selected @endif>Pesantren</option>
                                                  <option value="2" @if(old('is_pesantren', $data->is_pesantren) == 2) selected @endif>Tanpa Pesantren</option>
                                              </select>
                                              @error('is_pesantren')
                                              <div class="invalid-feedback">
                                                  {{ $message }}
                                              </div>
                                              @enderror
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                      <div class="form-control-wrap">
                                          <input type="text" class="form-control date-picker-year @error('tahun_lulus') is-invalid @enderror" placeholder="Lulusan Tahun" name="tahun_lulus" value="{{ old('tahun_lulus', $data->tahun_lulus) }}" autocomplete="off">
                                          @error('tahun_lulus')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                          @enderror
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                      <div class="form-control-wrap ">
                                          <div class="form-control-select">
                                              <select class="form-control @error('jenis_pendaftaran') is-invalid @enderror" id="jenisPendaftaran" name="jenis_pendaftaran">
                                                  <option hidden>Jenis Pendaftaran</option>
                                                  <option value="1" @if(old('jenis_pendaftaran', $data->jenis_pendaftaran) == 1) selected @endif>Siswa Baru</option>
                                                  <option value="2" @if(old('jenis_pendaftaran', $data->jenis_pendaftaran) == 2) selected @endif>Pindahan</option>
                                              </select>
                                              @error('jenis_pendaftaran')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                              @enderror
                                          </div>
                                      </div>
                                    </div>
                        
                                    <div class="form-group d-none" id="pilihanKelas">
                                      <div class="form-control-wrap ">
                                          <div class="form-control-select">
                                              <select class="form-control">
                                                  <option hidden>Pindah Ke Kelas</option>
                                                  <option value="7">7</option>
                                                  <option value="8">8</option>
                                                  <option value="9">9</option>
                                                  <option value="10">10</option>
                                                  <option value="11">11</option>
                                                  <option value="12">12</option>
                                              </select>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                        
                                </div>
                              </div>
                            </div>
                        
                            <div class="col-md-12 mb-4">
                              <div class="card">
                                <div class="card-body">
                        
                                  <!-- Title Header -->
                                  <h6 class="text-primary">Profil dan Biodata</h6>
                                  <hr style="border: 1px dashed rgb(157, 238, 218);">
                        
                                  <!-- Fullname -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control @error('fullname') is-invalid @enderror" placeholder="Fullname" name="fullname" value="{{ old('fullname', $data->fullname) }}">
                                        @error('fullname')
                                            <div class="invalid-feedback">
                                                <i>{{ $message }}</i>
                                            </div>
                                        @enderror
                                    </div>
                                  </div>
                        
                                  <!-- NISN -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control @error('nisn') is-invalid @enderror" placeholder="Nomer Induk Siswa Nasional/NISN" value="{{ old('nisn', $data->nisn) }}">
                                        @error('nisn')
                                            <div class="invalid-feedback">
                                                <i>{{ $message }}</i>
                                            </div>
                                        @enderror
                                    </div>
                                  </div>
                        
                                  <!-- NIK -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control @error('nik') is-invalid @enderror" placeholder="Nomer Induk Kewarganegaraan/NIK" value="{{ old('nik', $data->nik) }}">
                                        @error('nik')
                                            <div class="invalid-feedback">
                                                <i>{{ $message }}</i>
                                            </div>
                                        @enderror
                                    </div>
                                  </div>
                        
                                  <!-- Gender -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <div class="form-group">
                                        <div class="form-control-wrap ">
                                            <div class="form-control-select">
                                                <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                                                    <option hidden>Jenis Kelamin</option>
                                                    <option value="1" @if(old('gender', $data->gender) == 1) selected @endif>Laki-laki</option>
                                                    <option value="2" @if(old('gender', $data->gender) == 2) selected @endif>Perempuan</option>
                                                </select>
                                                @error('gender')
                                                  <div class="invalid-feedback">
                                                      <i>{{ $message }}</i>
                                                  </div>
                                                @enderror
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        
                                  <!-- Born Place -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control @error('born_place') is-invalid @enderror" placeholder="Tempat Lahir" value="{{ old('born_place', $data->born_place) }}">
                                        @error('born_place')
                                            <div class="invalid-feedback">
                                                <i>{{ $message }}</i>
                                            </div>
                                        @enderror
                                    </div>
                                  </div>
                        
                                  <!-- Born Date -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control @error('born_date') is-invalid @enderror" placeholder="Tanggal Lahir" id="datepicker" value="{{ old('born_date', \Carbon\Carbon::parse($data->born_date)->format('Y/m/d')) }}">
                                        @error('born_date')
                                          <div class="invalid-feedback">
                                            <i>{{ $message }}</i>
                                          </div>
                                        @enderror
                                    </div>
                                  </div>
                        
                                  <!-- Religion -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <div class="form-group">
                                        <div class="form-control-wrap ">
                                            <div class="form-control-select">
                                                <select class="form-control @error('agama') is-invalid @enderror" name="agama">
                                                    <option hidden>Agama</option>
                                                    <option value="1" @if(old('agama', $data->agama) == 1) selected @endif>Islam</option>
                                                    <option value="2" @if(old('agama', $data->agama) == 2) selected @endif>Kristen</option>
                                                    <option value="3" @if(old('agama', $data->agama) == 3) selected @endif>Katolik</option>
                                                    <option value="4" @if(old('agama', $data->agama) == 4) selected @endif>Hindu</option>
                                                    <option value="5" @if(old('agama', $data->agama) == 5) selected @endif>Budha</option>
                                                    <option value="6" @if(old('agama', $data->agama) == 6) selected @endif>Kong Hu Chu</option>
                                                    <option value="7" @if(old('agama', $data->agama) == 7) selected @endif>Lainnya</option>
                                                </select>
                                                @error('agama')
                                                  <div class="invalid-feedback">
                                                    <i>{{ $message }}</i>
                                                  </div>
                                                @enderror
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        
                                  <!-- Family Status -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <div class="form-group">
                                        <div class="form-control-wrap ">
                                            <div class="form-control-select">
                                                <select class="form-control @error('status_keluarga') is-invalid @enderror" name="status_keluarga">
                                                    <option hidden>Status Dalam Keluarga</option>
                                                    <option value="1" @if(old('status_keluarga', $data->status_keluarga) == 1) selected @endif>Anak Kandung</option>
                                                    <option value="2" @if(old('status_keluarga', $data->status_keluarga) == 2) selected @endif>Anak Tiri</option>
                                                    <option value="3" @if(old('status_keluarga', $data->status_keluarga) == 3) selected @endif>Kerabat</option>
                                                    <option value="4" @if(old('status_keluarga', $data->status_keluarga) == 4) selected @endif>Anak Angkat</option>
                                                    <option value="5" @if(old('status_keluarga', $data->status_keluarga) == 5) selected @endif>Lainnya</option>
                                                </select>
                                                @error('status_keluarga')
                                                  <div class="invalid-feedback">
                                                    <i>{{ $message }}</i>
                                                  </div>
                                                @enderror
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        
                                  <!-- Sibling Total -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control @error('jumlah_saudara') is-invalid @enderror" placeholder="Jumlah Saudara" name="jumlah_saudara" value="{{ old('jumlah_saudara', $data->jumlah_saudara) }}">
                                        @error('jumlah_saudara')
                                            <div class="invalid-feedback">
                                                <i>{{ $message }}</i>
                                            </div>
                                        @enderror
                                    </div>
                                  </div>
                        
                                  <!-- Child Number -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control @error('anak_ke') is-invalid @enderror" placeholder="Anak Ke-" name="anak_ke" value="{{ old('anak_ke', $data->anak_ke) }}">
                                        @error('anak_ke')
                                          <div class="invalid-feedback">
                                              <i>{{ $message }}</i>
                                          </div>
                                        @enderror
                                    </div>
                                  </div>
                        
                                  <!-- Phone Number -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control @error('wa_number') is-invalid @enderror" placeholder="Nomor Whatsapp" name="wa_number" value="{{ old('wa_number', Str::replace(' ', '', Str::replace('(+62)', '0', $data->wa_number))) }}">
                                        @error('wa_number')
                                          <div class="invalid-feedback">
                                              <i>{{ $message }}</i>
                                          </div>
                                        @enderror
                                    </div>
                                  </div>
                        
                                  <!-- Email Address -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email', $data->email) }}">
                                        @error('email')
                                          <div class="invalid-feedback">
                                            <i>{{ $message }}</i>
                                          </div>
                                        @enderror
                                    </div>
                                  </div>
                        
                                </div>
                              </div>
                            </div>
                        
                            <div class="col-md-12 mb-4">
                              <div class="card">
                                <div class="card-body">
                        
                                  <!-- Title Header -->
                                  <h6 class="text-primary">Alamat Lengkap</h6>
                                  <hr style="border: 1px dashed rgb(157, 238, 218);">
                        
                                  <!-- Address -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <textarea class="form-control no-resize @error('address') is-invalid @enderror" id="default-textarea" placeholder="Alamat sesuai kartu keluarga | contoh: Dsn. Sukamukti/Jl.Pahlawan No.123" name="address">{{ old('address', $data->address) }}</textarea>
                                    </div>
                                    @error('address')
                                      <div class="invalid-feedback">
                                        <i>{{ $message }}</i>
                                      </div>
                                    @enderror
                                  </div>
                        
                                  <!-- RT and RW -->
                                  <div class="row">
                                    <div class="col-md-6 mb-3">
                                      <div class="form-group">
                                        <div class="form-control-wrap">
                                          <input type="number" class="form-control @error('rt') is-invalid @enderror" placeholder="RT" value="{{ old('rt', $data->rt) }}" name="rt">
                                          @error('rt')
                                            <div class="invalid-feedback">
                                              <i>{{ $message }}</i>
                                            </div>
                                          @enderror
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <div class="form-group">
                                        <div class="form-control-wrap">
                                          <input type="number" class="form-control @error('rw') is-invalid @enderror" placeholder="RW" value="{{ old('rw', $data->rw) }}" name="rw">
                                          @error('rw')
                                            <div class="invalid-feedback">
                                              <i>{{ $message }}</i>
                                            </div>
                                          @enderror
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <!-- Postal Code -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control @error('kode_pos') is-invalid @enderror" placeholder="Kode Pos" value="{{ old('kode_pos', $data->kode_pos) }}" name="kode_pos">
                                        @error('kode_pos')
                                          <div class="invalid-feedback">
                                            <i>{{ $message }}</i>
                                          </div>
                                        @enderror
                                    </div>
                                  </div>
                        
                                  <!-- Province -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <div class="form-group">
                                        <div class="form-control-wrap">
                                          <select class="form-select" id="propinsi">
                                            <option hidden>Pilih Propinsi</option>
                                            @foreach ($province as $item)
                                              <option value="{{ $item->id }}" @if ($data->province == $item->id) selected @endif>{{ $item->name }}</option>
                                            @endforeach
                                          </select>
                                      </div>
                                      </div>
                                    </div>
                                  </div>
                        
                                  <!-- District -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <div class="form-group">
                                        <div class="form-control-wrap ">
                                            <div class="form-control-select">
                                                <select class="form-control" id="kabupaten">
                                                    <option>Pilih Kabupaten/Kota</option>
                                                </select>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        
                                  <!-- Regency -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <div class="form-group">
                                        <div class="form-control-wrap ">
                                            <div class="form-control-select">
                                                <select class="form-control" id="kecamatan">
                                                    <option>Pilih Kecamatan</option>
                                                </select>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        
                                  <!-- Village -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <div class="form-group">
                                        <div class="form-control-wrap ">
                                            <div class="form-control-select">
                                                <select class="form-control" id="kelurahan">
                                                    <option>Pilih Desa/Kelurahan</option>
                                                </select>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        
                                </div>
                              </div>
                            </div>
                        
                            <div class="col-md-12 mb-4">
                              <div class="card">
                                <div class="card-body">
                        
                                  <!-- Title Header -->
                                  <h6 class="text-primary">Profil Orang Tua</h6>
                                  <hr style="border: 1px dashed rgb(157, 238, 218);">
                        
                                  <!-- KK Number -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" placeholder="Nomor KK">
                                    </div>
                                  </div>
                        
                                  <!-- Father NIK Number -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" placeholder="Nomor NIK Ayah">
                                    </div>
                                  </div>
                        
                                  <!-- Father Name -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" placeholder="Nama Ayah">
                                    </div>
                                  </div>
                        
                                  <!-- Father Job -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <div class="form-group">
                                        <div class="form-control-wrap">
                                            <div class="form-control-select">
                                                <select class="form-control">
                                                    <option hidden>Pekerjaan Ayah</option>
                                                </select>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        
                                  <!-- Father Salary -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <div class="form-group">
                                        <div class="form-control-wrap ">
                                            <div class="form-control-select">
                                                <select class="form-control">
                                                    <option hidden>Penghasilan Ayah</option>
                                                </select>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        
                                  <!-- Mother NIK Number -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" placeholder="Nomor NIK Ibu">
                                    </div>
                                  </div>
                        
                                  <!-- Mother Name -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" placeholder="Nama Ibu">
                                    </div>
                                  </div>
                        
                                  <!-- Mother Job -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <div class="form-group">
                                        <div class="form-control-wrap">
                                            <div class="form-control-select">
                                                <select class="form-control">
                                                    <option hidden>Pekerjaan Ibu</option>
                                                </select>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        
                                </div>
                              </div>
                            </div>
                        
                            <div class="col-md-12 mb-4">
                              <div class="card">
                                <div class="card-body">
                        
                                  <!-- Title Header -->
                                  <h6 class="text-primary">Informasi Sekolah Sebelumnya</h6>
                                  <hr style="border: 1px dashed rgb(157, 238, 218);">
                                  
                                  <!-- Sekolah Asal -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" placeholder="Sekolah Asal/Sebelumnya">
                                    </div>
                                  </div>
                        
                                  <!-- Nomor Seri Ijazah -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" placeholder="Nomor Seri Ijazah Jika Sudah Terbit">
                                    </div>
                                  </div>
                        
                                  <!-- Nomor Kartu KIP -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" placeholder="Nomor Kartu KIP Jika Punya">
                                    </div>
                                  </div>
                        
                                </div>
                              </div>
                            </div>
                        
                            <div class="col-md-12 mb-4">
                              <div class="card">
                                <div class="card-body">
                        
                                  <!-- Title Header -->
                                  <h6 class="text-primary">Syarat dan Ketentuan</h6>
                                  <hr style="border: 1px dashed rgb(157, 238, 218);">
                                  
                                  <!-- Sekolah Asal -->
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="aggrement">
                                    <label class="custom-control-label" for="aggrement">
                                      Saya menyatakan bahwa isian data didalam formulir ini adalah benar. Apabila ternyata data tersebut tidak benar/palsu, maka saya bersedia menerima sanksi berupa <i>pembatalan</i> sebagai <i>calon siswa Al-Amin Puloerang</i>
                                    </label>
                                </div>
                        
                                </div>
                              </div>
                            </div>
                        
                            <!-- Hidden Year Input -->
                            <input type="hidden" id="tahun" class="tahun" name="tahun_ppdb" value="{{ date('Y') }}">
                        
                            <div class="form-group">
                              <a href="#" class="btn btn-lg btn-primary w-100 block" style="text-align: center !important; display: inline-flex; align-items: center; justify-content: center"><em class="icon ni ni-edit"></em><span>Update Information</span> </a>
                            </div>
                          </form>
                          <!-- Main Content End -->
                        </div>
                    </div>
                  </div>
                  
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection


@push('script')
  @livewireScripts
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script src="/assets/custom/js/student.js"></script>

  <script>
    $(function () {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"').attr("content"),
            },
        });
    });

    function getRegency(id) {
        $.ajax({
            type: "post",
            url: "/kabupaten",
            data: { id: id },
            cache: false,
            success: function (data) {
                $("#kabupaten").html(data);
            },
            error: function (error) {
                console.log("error", error);
            },
        });
    }

    function getRegencyById(id) {
        $.ajax({
            type: "post",
            url: "/kabupaten/byId",
            data: { id: id },
            cache: false,
            success: function (data) {
                $("#kabupaten").html(data);
            },
            error: function (error) {
                console.log("error", error);
            },
        });
    }

    function getDistrict(id) {
        $.ajax({
            type: "post",
            url: "/kecamatan",
            data: { id: id },
            cache: false,
            success: function (data) {
                $("#kecamatan").html(data);
            },
            error: function (error) {
                console.log("error", error);
            },
        });
    }

    function getDistrictById(id) {
        $.ajax({
            type: "post",
            url: "/kecamatan/byId",
            data: { id: id },
            cache: false,
            success: function (data) {
                $("#kecamatan").html(data);
            },
            error: function (error) {
                console.log("error", error);
            },
        });
    }

    function getVillage(id) {
        $.ajax({
            type: "post",
            url: "/kelurahan",
            data: { id: id },
            cache: false,
            success: function (data) {
                $("#kelurahan").html(data);
            },
            error: function (error) {
                console.log("error", error);
            },
        });
    }

    function getVillageById(id) {
        $.ajax({
            type: "post",
            url: "/kelurahan/byId",
            data: { id: id },
            cache: false,
            success: function (data) {
                $("#kelurahan").html(data);
            },
            error: function (error) {
                console.log("error", error);
            },
        });
    }

    $(function() {
      const id = $('#propinsi').val();
      if(id) {
          getRegency(id);
      }

      const regencyId = $('#kabupaten').val();
      if(regencyId) {
          getRegencyById(regencyId);
      }

      const districtId = $('#kecamatan').val();
      if(districtId) {
          getDistrictById(districtId);
      }

      const villageId = $('#kelurahan').val();
      if(villageId) {
          getVillageById(villageId);
      }

      $("#propinsi").on("change", function () {
        const id = $("#propinsi").val();
        getRegency(id);
      });

      $("#kabupaten").on("change", function () {
          const id = $("#kabupaten").val();
          getDistrict(id);
      });

      $("#kecamatan").on("change", function () {
          const id = $("#kecamatan").val();
          getVillage(id);
      });
    })
  </script>
@endpush