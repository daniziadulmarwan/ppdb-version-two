@extends('layouts.app')

@push('style')
  @livewireStyles
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link href="/assets/filepond/filepond.css" rel="stylesheet" />
  <link
    href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
    rel="stylesheet"
  />
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
                                <li class="breadcrumb-item active">Create</li>
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
                          <form class="form-validate is-alter row" action="/admin/student" method="post">
                            @csrf

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
                                              <select class="form-control @error('jenjang') is-invalid @enderror" name="jenjang">
                                                  <option hidden>Jenjang Sekolah</option>
                                                  <option value="1">Madrasah Tsanawiyah</option>
                                                  <option value="2">Madrasah Aliyah</option>
                                              </select>
                                              @error('jenjang')
                                                <div class="invalid-feedback">
                                                  <i>{{ $message }}</i>
                                                </div>
                                              @enderror
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                      <div class="form-control-wrap ">
                                          <div class="form-control-select">
                                              <select class="form-control @error('is_pesantren') is-invalid @enderror" name="is_pesantren">
                                                  <option hidden>Mukim/Tidak Mukim</option>
                                                  <option value="1">Pesantren</option>
                                                  <option value="2">Tanpa Pesantren</option>
                                              </select>
                                              @error('is_pesantren')
                                                <div class="invalid-feedback">
                                                  <i>{{ $message }}</i>
                                                </div>
                                              @enderror
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                      <div class="form-control-wrap">
                                          <input type="text" class="form-control date-picker-year @error('tahun_lulus') is-invalid @enderror" placeholder="Lulusan Tahun" name="tahun_lulus">
                                          @error('tahun_lulus')
                                            <div class="invalid-feedback">
                                              <i>{{ $message }}</i>
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
                                                  <option value="1" @if (old('jenis_pendaftaran') == 1) selected @endif>Siswa Baru</option>
                                                  <option value="2" @if (old('jenis_pendaftaran') == 2) selected @endif>Pindahan</option>
                                              </select>
                                              @error('jenis_pendaftaran')
                                                <div class="invalid-feedback">
                                                  <i>{{ $message }}</i>
                                                </div>
                                              @enderror
                                          </div>
                                      </div>
                                    </div>
                        
                                    <div class="form-group d-none" id="pilihanKelas">
                                      <div class="form-control-wrap ">
                                          <div class="form-control-select">
                                              <select class="form-control @error('pilihan_kelas') is-invalid @enderror" name="pilihan_kelas">
                                                  <option hidden>Pindah Ke Kelas</option>
                                                  <option value="7"  @if (old('pilihan_kelas') == 7) selected @endif>7</option>
                                                  <option value="8"  @if (old('pilihan_kelas') == 8) selected @endif>8</option>
                                                  <option value="9"  @if (old('pilihan_kelas') == 9) selected @endif>9</option>
                                                  <option value="10"  @if (old('pilihan_kelas') == 10) selected @endif>10</option>
                                                  <option value="11"  @if (old('pilihan_kelas') == 11) selected @endif>11</option>
                                                  <option value="12"  @if (old('pilihan_kelas') == 12) selected @endif>12</option>
                                              </select>
                                              @error('pilihan_kelas')
                                                <div class="invalid-feedback">
                                                  <i>{{ $message }}</i>
                                                </div>
                                              @enderror
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
                                        <input type="text" class="form-control @error('fullname') is-invalid @enderror" placeholder="Fullname">
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
                                        <input type="text" class="form-control @error('nisn') is-invalid @enderror" placeholder="Nomer Induk Siswa Nasional/NISN">
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
                                        <input type="text" class="form-control @error('nik') is-invalid @enderror" placeholder="Nomer Induk Kewarganegaraan/NIK">
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
                                                    <option value="1" @if (old('gender') == 1) selected @endif>Laki-laki</option>
                                                    <option value="2" @if (old('gender') == 2) selected @endif>Perempuan</option>
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
                                        <input type="text" class="form-control @error('born_place') is-invalid @enderror" placeholder="Tempat Lahir" name="born_place">
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
                                        <input type="text" class="form-control @error('born_date') is-invalid @enderror" placeholder="Tanggal Lahir" id="datepicker" name="born_date">
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
                                                    <option value="1" @if (old('agama') == 1) selected @endif>Islam</option>
                                                    <option value="2" @if (old('agama') == 2) selected @endif>Kristen</option>
                                                    <option value="3" @if (old('agama') == 3) selected @endif>Katolik</option>
                                                    <option value="4" @if (old('agama') == 4) selected @endif>Hindu</option>
                                                    <option value="5" @if (old('agama') == 5) selected @endif>Budha</option>
                                                    <option value="6" @if (old('agama') == 6) selected @endif>Kong Hu Chu</option>
                                                    <option value="7" @if (old('agama') == 7) selected @endif>Lainnya</option>
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
                                                    <option value="1" @if (old('status_keluarga') == 1) selected @endif>Anak Kandung</option>
                                                    <option value="2" @if (old('status_keluarga') == 2) selected @endif>Anak Tiri</option>
                                                    <option value="3" @if (old('status_keluarga') == 3) selected @endif>Kerabat</option>
                                                    <option value="4" @if (old('status_keluarga') == 4) selected @endif>Anak Angkat</option>
                                                    <option value="5" @if (old('status_keluarga') == 5) selected @endif>Lainnya</option>
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
                                        <input type="number" class="form-control @error('jumlah_saudara') is-invalid @enderror" placeholder="Jumlah Saudara" name="jumlah_saudara">
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
                                        <input type="number" class="form-control @error('anak_ke') is-invalid @enderror" placeholder="Anak Ke-" name="anak_ke">
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
                                        <input type="text" class="form-control @error('wa_number') is-invalid @enderror" placeholder="Nomor Whatsapp" name="wa_number">
                                        @error('wa_number')
                                            <div class="invalid-feedback">
                                                <i>{{ $message }}</i>
                                            </div>
                                        @enderror
                                    </div>
                                  </div>
                        
                                  <!-- Phone Number -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
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
                                        <textarea class="form-control no-resize @error('address') is-invalid @enderror" id="default-textarea" placeholder="Alamat sesuai kartu keluarga | contoh: Dsn. Sukamukti/Jl.Pahlawan No.123" name="address">{!! old('address') !!}</textarea>
                                        @error('address')
                                            <div class="invalid-feedback">
                                                <i>{{ $message }}</i>
                                            </div>
                                        @enderror
                                    </div>
                                  </div>
                        
                                  <!-- RT and RW -->
                                  <div class="row">
                                    <div class="col-md-6 mb-3">
                                      <div class="form-group">
                                        <div class="form-control-wrap">
                                          <input type="number" class="form-control @error('rt') is-invalid @enderror" placeholder="RT" name="rt">
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
                                          <input type="number" class="form-control @error('rw') is-invalid @enderror" placeholder="RW" name="rw">
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
                                        <input type="number" class="form-control @error('kode_pos') is-invalid @enderror" placeholder="Kode Pos" name="kode_pos">
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
                                          <select class="form-select @error('province') is-invalid @enderror" id="propinsi" name="province">
                                            <option value="{{ old('province') }}" selected>Pilih Propinsi</option>
                                            @foreach ($propinsi as $item)
                                              @if (old('province') == $item->id)
                                                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                              @else
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                              @endif
                                            @endforeach
                                          </select>
                                          @error('province')
                                            <div class="invalid-feedback">
                                                <i>{{ $message }}</i>
                                            </div>
                                          @enderror
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
                                                <select class="form-control @error('regency') is-invalid @enderror" id="kabupaten" name="regency">
                                                    <option value="{{ old('regency') }}" selected>Pilih Kabupaten/Kota</option>
                                                </select>
                                                @error('regency')
                                                  <div class="invalid-feedback">
                                                    <i>{{ $message }}</i>
                                                  </div>
                                                @enderror
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
                                                <select class="form-control @error('district') is-invalid @enderror" id="kecamatan" name="district">
                                                    <option value="{{ old('district') }}" selected>Pilih Kecamatan</option>
                                                </select>
                                                @error('district')
                                                  <div class="invalid-feedback">
                                                      <i>{{ $message }}</i>
                                                  </div>
                                                @enderror
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
                                                <select class="form-control @error('village') is-invalid @enderror" id="kelurahan" name="village">
                                                    <option value="{{ old('village') }}" selected>Pilih Desa/Kelurahan</option>
                                                </select>
                                                @error('village')
                                                  <div class="invalid-feedback">
                                                      <i>{{ $message }}</i>
                                                  </div>
                                                @enderror
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
                                        <input type="number" class="form-control @error('no_kk') is-invalid @enderror" placeholder="Nomor KK" name="no_kk">
                                        @error('no_kk')
                                          <div class="invalid-feedback">
                                              <i>{{ $message }}</i>
                                          </div>
                                        @enderror
                                    </div>
                                  </div>
                        
                                  <!-- Father NIK Number -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control @error('nik_ayah') is-invalid @enderror" placeholder="Nomor NIK Ayah" name="nik_ayah">
                                        @error('nik_ayah')
                                          <div class="invalid-feedback">
                                              <i>{{ $message }}</i>
                                          </div>
                                        @enderror
                                    </div>
                                  </div>
                        
                                  <!-- Father Name -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" placeholder="Nama Ayah" name="nama_ayah">
                                        @error('nama_ayah')
                                          <div class="invalid-feedback">
                                              <i>{{ $message }}</i>
                                          </div>
                                        @enderror
                                    </div>
                                  </div>
                        
                                  <!-- Father Job -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <div class="form-group">
                                        <div class="form-control-wrap">
                                            <div class="form-control-select">
                                                <select class="form-control @error('pekerjaan_ayah') is-invalid @enderror" name="pekerjaan_ayah">
                                                    <option value="" hidden>Pekerjaan Ayah</option>
                                                </select>
                                                @error('pekerjaan_ayah')
                                                  <div class="invalid-feedback">
                                                      <i>{{ $message }}</i>
                                                  </div>
                                                @enderror
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
                                                <select class="form-control @error('penghasilan_ayah') is-invalid @enderror" name="penghasilan_ayah">
                                                    <option value="" hidden>Penghasilan Ayah</option>
                                                </select>
                                                @error('penghasilan_ayah')
                                                  <div class="invalid-feedback">
                                                      <i>{{ $message }}</i>
                                                  </div>
                                                @enderror
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        
                                  <!-- Mother NIK Number -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control @error('nik_ibu') is-invalid @enderror" placeholder="Nomor NIK Ibu" name="nik_ibu">
                                        @error('nik_ibu')
                                          <div class="invalid-feedback">
                                              <i>{{ $message }}</i>
                                          </div>
                                        @enderror
                                    </div>
                                  </div>
                        
                                  <!-- Mother Name -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" placeholder="Nama Ibu" name="nama_ibu">
                                        @error('nama_ibu')
                                          <div class="invalid-feedback">
                                              <i>{{ $message }}</i>
                                          </div>
                                        @enderror
                                    </div>
                                  </div>
                        
                                  <!-- Mother Job -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <div class="form-group">
                                        <div class="form-control-wrap">
                                            <div class="form-control-select">
                                                <select class="form-control @error('pekerjaan_ibu') is-invalid @enderror" name="pekerjaan_ibu">
                                                    <option value="" hidden>Pekerjaan Ibu</option>
                                                    <option value="1">Lainnya</option>
                                                    <option value="1">PNS</option>
                                                </select>
                                                @error('pekerjaan_ibu')
                                                  <div class="invalid-feedback">
                                                      <i>{{ $message }}</i>
                                                  </div>
                                                @enderror
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        
                                </div>
                              </div>
                            </div>
                        
                            <!-- Info Sekolah Sebelumnya -->
                            <div class="col-md-12 mb-4">
                              <div class="card">
                                <div class="card-body">
                        
                                  <!-- Title Header -->
                                  <h6 class="text-primary">Informasi Sekolah Sebelumnya</h6>
                                  <hr style="border: 1px dashed rgb(157, 238, 218);">
                                  
                                  <!-- Sekolah Asal -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" placeholder="Sekolah Asal/Sebelumnya" name="asal_sekolah">
                                        @error('asal_sekolah')
                                          <div class="invalid-feedback">
                                              <i>{{ $message }}</i>
                                          </div>
                                        @enderror
                                    </div>
                                  </div>
                        
                                  <!-- Nomor Seri Ijazah -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control @error('seri_ijazah') is-invalid @enderror" placeholder="Nomor Seri Ijazah Jika Sudah Terbit" name="seri_ijazah">
                                        @error('seri_ijazah')
                                          <div class="invalid-feedback">
                                              <i>{{ $message }}</i>
                                          </div>
                                        @enderror
                                    </div>
                                  </div>
                        
                                  <!-- Nomor Kartu KIP -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control @error('kip_number') is-invalid @enderror" placeholder="Nomor Kartu KIP Jika Punya" name="kip_number">
                                        @error('kip_number')
                                          <div class="invalid-feedback">
                                              <i>{{ $message }}</i>
                                          </div>
                                        @enderror
                                    </div>
                                  </div>
                        
                                </div>
                              </div>
                            </div>

                            <!-- Upload Document -->
                            <div class="col-md-12 mb-4">
                              <div class="card">
                                <div class="card-body">
                        
                                  <!-- Title Header -->
                                  <h6 class="text-primary">Upload Berkas</h6>
                                  <hr style="border: 1px dashed rgb(157, 238, 218);">
                                  
                                  <!-- Upload Berkas Dokumen -->
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="file" class="form-control filepond" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        
                            <!-- Syarat & Ketentuan -->
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
                        
                            <!-- Submit Button -->
                            <div class="form-group">
                              <button type="submit" class="btn btn-lg btn-primary w-100 block" style="text-align: center !important; display: inline-flex; align-items: center; justify-content: center"><em class="icon ni ni-save"></em><span>Save Information</span> </button>
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
  <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
  <script src="/assets/filepond/filepond.js"></script>

  <script>
    FilePond.registerPlugin(FilePondPluginImagePreview);
    FilePond.create(
      document.querySelector('.filepond')
    );
  </script>
@endpush