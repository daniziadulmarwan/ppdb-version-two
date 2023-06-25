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
                            <h3 class="nk-block-title page-title"></h3>
                        </div>

                        <div class="nk-block-head-content">
                          <nav>
                            <ul class="breadcrumb breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                                <li class="breadcrumb-item active">Document</li>
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
                                    <th>Foto</th>
                                    <th>No. Reg</th>
                                    <th>Name</th>
                                    <th>Kartu Keluarga</th>
                                    <th>Akte Kelahiran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                      <img src="/assets/images/avatar/a-sm.jpg" width="40" height="40" class="rounded-circle" alt="Avatar User">
                                    </td>
                                    <td>PB2023-6MLE9UQ2</td>
                                    <td>ANGGAR SIMBARDEWI</td>
                                    <td>
                                      <a href="#" class="btn btn-round btn-primary"><em class="icon ni ni-download-cloud"></em><span>Download</span> </a>
                                    </td>
                                    <td>
                                      <a href="#" class="btn btn-round btn-success"><em class="icon ni ni-download-cloud"></em><span>Download</span> </a>
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