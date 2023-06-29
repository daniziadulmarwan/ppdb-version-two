@component('components.modal', ['id' => 'modalCreateNewStudent', 'title' => 'Create New Student'])
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
                      <select class="form-control">
                          <option hidden>Jenjang Sekolah</option>
                          <option value="1">Madrasah Tsanawiyah</option>
                          <option value="2">Madrasah Aliyah</option>
                      </select>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="form-group">
              <div class="form-control-wrap ">
                  <div class="form-control-select">
                      <select class="form-control">
                          <option hidden>Mukim/Tidak Mukim</option>
                          <option value="1">Pesantren</option>
                          <option value="2">Tanpa Pesantren</option>
                      </select>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="form-group">
              <div class="form-control-wrap">
                  <input type="text" class="form-control date-picker-year" placeholder="Lulusan Tahun">
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="form-group">
              <div class="form-control-wrap ">
                  <div class="form-control-select">
                      <select class="form-control" id="jenisPendaftaran">
                          <option hidden>Jenis Pendaftaran</option>
                          <option value="1">Siswa Baru</option>
                          <option value="2">Pindahan</option>
                      </select>
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
                        <select class="form-control">
                            <option hidden>Jenis Kelamin</option>
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Born Place -->
          <div class="form-group">
            <div class="form-control-wrap">
                <input type="text" class="form-control @error('born_place') is-invalid @enderror" placeholder="Tempat Lahir">
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
                <input type="text" class="form-control @error('born_date') is-invalid @enderror" placeholder="Tanggal Lahir" id="datepicker">
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
                        <select class="form-control">
                            <option hidden>Agama</option>
                            <option value="1">Islam</option>
                            <option value="2">Kristen</option>
                            <option value="3">Katolik</option>
                            <option value="4">Hindu</option>
                            <option value="5">Budha</option>
                            <option value="6">Kong Hu Chu</option>
                            <option value="7">Lainnya</option>
                        </select>
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
                        <select class="form-control">
                            <option hidden>Status Dalam Keluarga</option>
                            <option value="1">Anak Kandung</option>
                            <option value="2">Anak Tiri</option>
                            <option value="3">Kerabat</option>
                            <option value="4">Anak Angkat</option>
                            <option value="5">Lainnya</option>
                        </select>
                    </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Sibling Total -->
          <div class="form-group">
            <div class="form-control-wrap">
                <input type="number" class="form-control @error('sibling_total') is-invalid @enderror" placeholder="Jumlah Saudara">
                @error('sibling_total')
                    <div class="invalid-feedback">
                        <i>{{ $message }}</i>
                    </div>
                @enderror
            </div>
          </div>

          <!-- Child Number -->
          <div class="form-group">
            <div class="form-control-wrap">
                <input type="number" class="form-control @error('child_number') is-invalid @enderror" placeholder="Anak Ke-">
                @error('child_number')
                    <div class="invalid-feedback">
                        <i>{{ $message }}</i>
                    </div>
                @enderror
            </div>
          </div>

          <!-- Phone Number -->
          <div class="form-group">
            <div class="form-control-wrap">
                <input type="text" class="form-control @error('wa_number') is-invalid @enderror" placeholder="Nomor Whatsapp">
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
                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
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
                <textarea class="form-control no-resize" id="default-textarea" placeholder="Alamat sesuai kartu keluarga | contoh: Dsn. Sukamukti/Jl.Pahlawan No.123"></textarea>
            </div>
          </div>

          <!-- RT and RW -->
          <div class="row">
            <div class="col-md-6 mb-3">
              <div class="form-group">
                <div class="form-control-wrap">
                  <input type="number" class="form-control" placeholder="RT">
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="form-group">
                <div class="form-control-wrap">
                  <input type="number" class="form-control" placeholder="RW">
                </div>
              </div>
            </div>
          </div>
          
          <!-- Postal Code -->
          <div class="form-group">
            <div class="form-control-wrap">
                <input type="number" class="form-control" placeholder="Kode Pos">
            </div>
          </div>

          <!-- Province -->
          <div class="form-group">
            <div class="form-control-wrap">
              <div class="form-group">
                <div class="form-control-wrap">
                  <select class="form-select" id="propinsi" data-search="on">
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
                        <select class="form-control">
                            <option hidden>Kabupaten/Kota</option>
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
                        <select class="form-control">
                            <option hidden>Kecamatan</option>
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
                        <select class="form-control">
                            <option hidden>Desa/Kelurahan</option>
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

    <div class="form-group">
      <label class="form-label">Select2 Default</label>
      <div class="form-control-wrap">
          <select class="form-select js-select2" data-search="on">
            <option value=""></option>
          </select>
      </div>
  </div>

    <!-- Hidden Year Input -->
    <input type="hidden" id="tahun" class="tahun" name="tahun_ppdb" value="{{ date('Y') }}">

    <div class="form-group">
      <a href="#" class="btn btn-lg btn-primary w-100 block" style="text-align: center !important; display: inline-flex; align-items: center; justify-content: center"><em class="icon ni ni-save"></em><span>Save Information</span> </a>
    </div>
  </form>
@endcomponent
          