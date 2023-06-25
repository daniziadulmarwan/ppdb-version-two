@extends('layouts.app')

@push('style')
@endpush


@section('content')
  <div class="nk-content">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Students</h3>
                        </div>

                        <div class="nk-block-head-content">
                          <nav>
                            <ul class="breadcrumb breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                                <li class="breadcrumb-item active">Student</li>
                            </ul>
                          </nav>
                        </div>
                    </div>
                </div>

                <div class="nk-block">
                  <div class="card">
                    <div class="nk-ecwg nk-ecwg6">
                        <div class="card-inner">
                          <table class="datatable-init-export nowrap table" data-export-title="Export">
                            <thead>
                                <tr>
                                    <th>No. Reg</th>
                                    <th>Nama</th>
                                    <th>NISN</th>
                                    <th>Jenjang</th>
                                    <th>Sekolah Asal</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PB2023-6MLE9UQ2</td>
                                    <td>ANGGAR SIMBARDEWI</td>
                                    <td>0116489552</td>
                                    <td>Madrasah Tsanawiyah</td>
                                    <td>SD Negeri Bojongwaru 01</td>
                                    <td>
                                      <span class="badge badge-dim rounded-pill bg-success">accepted</span>
                                    </td>
                                    <td>
                                      <a href="#" class="btn btn-icon btn-sm btn-warning rounded-circle"><em class="icon ni ni-edit-alt"></em></a>
                                      <a href="#" class="btn btn-icon btn-sm btn-danger rounded-circle"><em class="icon ni ni-trash"></em></a>
                                      <a href="#" class="btn btn-icon btn-sm btn-secondary rounded-circle"><em class="icon ni ni-eye"></em></a>
                                      <a href="#" class="btn btn-icon btn-sm btn-info rounded-circle"><em class="icon ni ni-file-text"></em></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
  <script src="/assets/js/libs/datatable-btns.js?ver=3.1.1"></script>
@endpush