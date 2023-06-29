@extends('layouts.app')

@push('style')
  @livewireStyles
@endpush


@section('content')
  <div class="nk-content">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                          <a href="/admin/student/create" class="btn btn-round btn-primary"><em class="icon ni ni-plus-circle"></em><span>Create New Student</span></a>
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
                          <table class="datatable-init-export nowrap table" data-export-title="Export" id="table-new-student">
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
                              @foreach ($data as $item)
                                <tr>
                                    <td>
                                      <span class="badge bg-outline-info">
                                        {{ $item->reg_number }}</td>
                                      </span></td>
                                    <td>{{ $item->fullname }}</td>
                                    <td>{{ $item->nisn }}</td>
                                    <td>{{ $item->jenjang === 1 ? 'Tsanawiyah' : 'Aliyah' }}</td>
                                    <td>{{ $item->asal_sekolah ?? '-' }}</td>
                                    <td>
                                      @if ($item->status === 'pending')
                                        <span class="badge badge-dim rounded-pill bg-warning">
                                          {{ $item->status }}
                                        </span> 
                                      @elseif($item->status === 'accept')
                                        <span class="badge badge-dim rounded-pill bg-success">
                                          {{ $item->status }}
                                        </span>
                                      @else
                                        <span class="badge badge-dim rounded-pill bg-danger">
                                          {{ $item->status }}
                                        </span>
                                      @endif
                                    </td>
                                    <td>
                                      <button class="btn btn-icon btn-sm btn-warning rounded-circle edit-button" data-bs-toggle="modal" data-bs-target="#modalEditNewStudent" data-id="{{ $item->id }}"><em class="icon ni ni-edit-alt"></em></button>
                                      
                                      <button class="btn btn-icon btn-sm btn-danger rounded-circle"><em class="icon ni ni-trash" onclick="destroyNewStudent({{ $item->id }})"></em></button>

                                      <a href="#" class="btn btn-icon btn-sm btn-secondary rounded-circle"><em class="icon ni ni-eye"></em></a>

                                      <a href="#" class="btn btn-icon btn-sm btn-info rounded-circle"><em class="icon ni ni-file-text"></em></a>
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

  @include('admin.student.edit')
@endsection


@push('script')
  @livewireScripts
  <script src="/assets/js/libs/datatable-btns.js?ver=3.1.1"></script>
  <script src="/assets/js/example-sweetalert.js?ver=3.1.1"></script>
  <script src="/assets/custom/js/student.js"></script>
@endpush