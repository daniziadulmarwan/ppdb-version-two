<div class="modal-body row" style="min-height: 500px;">
  <div style="background: linear-gradient(90deg, rgba(185,11,200,1) 0%, rgba(115,0,255,1) 100%); display: flex; flex-direction: column; justify-content: center; align-items: center" class="col-md-4 rounded">
    <div class="pt-2">
      <img src="/assets/images/user.png" width="100" height="100" class="rounded-circle">
    </div>
    <h4 style="font-size: 18px" class="mt-3 text-center">{{ $data?->fullname }}</h4>
    <span>{{ $data?->email }}</span>
    <span class="pb-2">{{ Str::replace(' ', '', Str::replace('(+62)', '0', $data?->wa_number)) }}</span>
  </div>
  <div class="col-md-8">
    <ul class="nk-nav nav nav-tabs">
      <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#administrasi">
            Administrasi
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#biodata">
            Biodata
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#address">
            Alamat
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#parent">
            Profil Wali
          </a>
      </li>
    </ul>
    <div class="tab-content">
        <!-- Tab One -->
        <div class="tab-pane active" id="administrasi">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-4">
                <h6 class="mb-0">Nomor Registrasi</h6>
                <span>{{ $data?->reg_number }}</span>
              </div>
              <div class="mb-4">
                <h6 class="mb-0">Jenjang Tujuan</h6>
                <span>{{ $data?->jenjang == 1 ? 'Madrasah Tsanawiyah' : 'Madrasah Aliyah' }}</span>
              </div>
              <div class="mb-4">
                <h6 class="mb-0">Pesantren</h6>
                @if ($data?->is_pesantren == 1)
                  <span class="badge badge-dim rounded-pill bg-success">
                    Yes
                  </span>
                @else
                  <span class="badge badge-dim rounded-pill bg-danger">
                    No
                  </span>
                @endif
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-4">
                <h6 class="mb-0">NISN</h6>
                <span>{{ $data?->nisn }}</span>
              </div>
              <div class="mb-4">
                <h6 class="mb-0">Tahun Lulus</h6>
                <span>{{ $data?->tahun_lulus }}</span>
              </div>
              <div class="mb-4">
                <h6 class="mb-0">Sekolah Asal</h6>
                <span>{{ $data?->asal_sekolah }}</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Tab Two -->
        <div class="tab-pane" id="biodata">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-4">
                <h6 class="mb-0">NIK</h6>
                <span>{{ $data?->nik }}</span>
              </div>
              <div class="mb-4">
                <h6 class="mb-0">Jenis Kelamin</h6>
                <span>{{ $data?->gender == 1 ? 'Laki-laki' : 'Perempuan' }}</span>
              </div>
              <div class="mb-4">
                <h6 class="mb-0">Tempat Tanggal Lahir</h6>
                <span>{{ $data?->born_place }}, {{\Carbon\Carbon::parse($data?->born_date)->translatedFormat('d F Y') }}</span>
              </div>
              <div class="mb-4">
                <h6 class="mb-0">Agama</h6>
                <span>
                  @if ($data?->agama == 1)
                      Islam
                  @elseif($data?->agama == 2)
                      Kristen
                  @else
                      Katolik
                  @endif
                </span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="mb-4">
                <h6 class="mb-0">Status Keluarga</h6>
                <span>
                  @if ($data?->status_keluarga == 1)
                    Anak Kandung
                  @elseif($data?->status_keluarga == 2)
                    Anak Tiri
                  @else
                    Anak Angkat
                  @endif
                </span>
              </div>
              <div class="mb-4">
                <h6 class="mb-0">Jumlah Saudara</h6>
                <span>{{ $data?->jumlah_saudara }}</span>
              </div>
              <div class="mb-4">
                <h6 class="mb-0">Anak Ke-</h6>
                <span>{{ $data?->anak_ke }}</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Tab Three -->
        <div class="tab-pane" id="address">
          <div class="mb-4">
            <h6 class="mb-0">Alamat</h6>
            <span>
              YAYASAN AL-AMIN PULOERANG, JL. Raya Barat No.129, RT.05/RW.15, Dsn. Sukamukti, Ds. Puloerang, Kec. Lakbok, Kab. Ciamis
            </span>
          </div>

          <div class="mb-4">
            <h6 class="mb-0">Kode Pos</h6>
            <span>054845</span>
          </div>
        </div>

        <!-- Tab Four -->
        <div class="tab-pane" id="parent">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-4">
                <h6 class="mb-0">Nomor KK</h6>
                <span>{{ $data?->no_kk }}</span>
              </div>
              <div class="mb-4">
                <h6 class="mb-0">NIK Ayah</h6>
                <span>{{ $data?->nik_ayah }}</span>
              </div>
              <div class="mb-4">
                <h6 class="mb-0">Nama Ayah</h6>
                <span>{{ $data?->nama_ayah }}</span>
              </div>
              <div class="mb-4">
                <h6 class="mb-0">Pekerjaan Ayah</h6>
                <span>{{ $data?->pekerjaan_ayah }}</span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="mb-4">
                <h6 class="mb-0">Penghasilan Ayah</h6>
                <span>{{ $data?->penghasilan_ayah }}</span>
              </div>
              <div class="mb-4">
                <h6 class="mb-0">NIK Ibu</h6>
                <span>{{ $data?->nik_ibu }}</span>
              </div>
              <div class="mb-4">
                <h6 class="mb-0">Nama Ibu</h6>
                <span>{{ $data?->nama_ibu }}</span>
              </div>
              <div class="mb-4">
                <h6 class="mb-0">Pekerjaan Ibu</h6>
                <span>{{ $data?->pekerjaan_ibu }}</span>
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>
</div>