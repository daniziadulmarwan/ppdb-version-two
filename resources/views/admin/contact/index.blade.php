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
                                <li class="breadcrumb-item active">Contact</li>
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
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->reg_number }}</td>
                                    <td>{{ $item->fullname }}</td>
                                    <td>
                                      <span class="badge bg-outline-info">
                                        {{ Str::replace(' ', '', Str::replace('(+62)', '0', $item->wa_number)) }}
                                      </span>
                                    </td>
                                    <td>
                                      <span class="badge bg-outline-danger">
                                        {{ $item->email }}</td>
                                      </span>
                                    <td>{{ $item->address }}</td>
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