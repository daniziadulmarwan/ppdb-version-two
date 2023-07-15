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
                                <li class="breadcrumb-item active">Notification</li>
                            </ul>
                          </nav>
                        </div>
                    </div>
                </div>

                <div class="nk-block">
                  <div class="card">
                    <div class="nk-ecwg nk-ecwg6">
                        <div class="card-inner">
                          <!-- Export Buttons Start -->
                          <div class="mb-3">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCreateNotif"><em class="icon ni ni-plus-circle"></em><span>Add Notification</span></button>
                          </div>
                          <!-- Export Buttons End -->

                          <table class="datatable-init nowrap table" id="table-notif" data-export-title="Export">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>User To Notif</th>
                                    <th>Text</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($notif as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->text }}</td>
                                    <td>
                                      <button onclick="destroyUser({{ $item->id }})" class="btn btn-icon btn-sm btn-danger rounded-circle"><em class="icon ni ni-trash"></em></button>
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

  @include('admin.notification.add-notif-modal')
@endsection


@push('script')
  <script src="/assets/js/libs/datatable-btns.js?ver=3.1.1"></script>
  <script>
    $("#multi-user-select").select2();



    function destroyUser(id) {
        Swal.fire({
          title: "Are you sure?",
          text: "You want to destroy this data!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "btn-success",
          cancelButtonColor: "btn-danger",
          confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                fetch(`/admin/notif/${id}`, {
                  headers: {
                      'Content-type': 'application/json',
                      'X-CSRF-TOKEN': '{{ csrf_token() }}'
                  },
                  method: 'delete'
                }).then(res => res.json()).then(data => {
                    if(data.message === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Selamat!',
                            text: 'Data berhasil dihapus',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        setTimeout(() => {
                            window.location.reload()
                        }, 1500);
                    }
                }).catch(err => {
                    console.log(err);
                });
            }
        }).catch((error) => {
            console.log(error);
        });
    }
    
  </script>
@endpush