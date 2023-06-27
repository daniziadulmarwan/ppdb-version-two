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
                              @foreach ($data as $item)
                                <tr>
                                    <td class="nk-tb-col tb-col-mb">
                                      <div class="user-avatar">
                                        <img src="/assets/images/user.png" alt="Avatar User">
                                      </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-mb">{{ $item->reg_number }}</td>
                                    <td class="nk-tb-col tb-col-mb">{{ $item->fullname }}</td>
                                    <td class="nk-tb-col tb-col-mb">
                                      <a href="/storage/public/{{ $item->kk }}" class="btn btn-round btn-primary" download><em class="icon ni ni-download-cloud"></em><span>Download</span> </a>
                                    </td>
                                    <td class="nk-tb-col tb-col-mb">
                                      <a href="/storage/public/{{ $item->akte }}" class="btn btn-round btn-success" download><em class="icon ni ni-download-cloud"></em><span>Download</span> </a>
                                    </td>
                                </tr>
                              @endforeach
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