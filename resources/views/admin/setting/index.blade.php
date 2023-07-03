@extends('layouts.app')

@push('style')
    @livewireStyles
@endpush

@section('content')
  <div class="nk-content ">
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
                                  <li class="breadcrumb-item active">Setting</li>
                              </ul>
                            </nav>
                          </div>
                    </div>
                </div>
                <div class="nk-block nk-block-lg">
                    <div class="card">
                        <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#tabOne"><em class="icon ni ni-user-alt"></em><span>User Account Management </span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tabTwo"><em class="icon ni ni-clock"></em></em><span>Form Management </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tabThree"><em class="icon ni ni-lock-alt"></em><span>Change Password </span>
                                </a>
                            </li>
                        </ul>
                        <div class="card-inner">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabOne">
                                    <h4 class="title nk-block-title">User Account Information</h4>
                                    <p>Manage user account who can sign in to this app.</p>
                                    @include('admin.setting.tab-one')
                                </div>
                                <div class="tab-pane" id="tabTwo">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="title nk-block-title">Registration Management</h4>
                                            <p>Here you can manage when you should open the registration form.</p>
                                        </div>
                                    </div>
                                    <div class="row g-gs">
                                        @include('admin.setting.tab-two')
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabThree">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="title nk-block-title">Change Password</h4>
                                            <p>If you want to be secret, Probably you should change your password.</p>
                                        </div>
                                    </div>
                                    <div class="row g-gs">
                                        @include('admin.setting.tab-three')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  @include('admin.setting.create-user-modal')
  @include('admin.setting.edit-user-modal')
@endsection

@push('script')
  @livewireScripts
  <script src="/assets/js/libs/datatable-btns.js?ver=3.1.1"></script>

  <script>
    Livewire.on('createNewUser', (msg) => {
        $('#modalCreateNewUser').modal('hide');
        Swal.fire({
            icon: 'success',
            title: 'Selamat!',
            text: msg,
            showConfirmButton: false,
            timer: 1500
        });
        setTimeout(() => {
            window.location.reload()
        }, 1500);
    });

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
                fetch(`/admin/setting/${id}`, {
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

    Livewire.on('destroyDataUser', (msg) => {
        Swal.fire({
            icon: 'success',
            title: 'Selamat!',
            text: 'Success delete data',
            showConfirmButton: false,
            timer: 1500
        });
        setTimeout(() => {
            window.location.reload()
        }, 1500);
    });

    $('.table').on('click', '.edit-button', function() {
        $('#userUpdateModal').modal('show')
        let id = $(this).data('id');
        Livewire.emit('getSettingEditId', id);
    })

    Livewire.on('userUpdated', () => {
        $('#userUpdateModal').modal('hide');
        Swal.fire({
            icon: 'success',
            title: 'Selamat!',
            text: 'Berhasil update data',
            showConfirmButton: false,
            timer: 1500
        });
        setTimeout(() => {
            window.location.reload()
        }, 1500);
    });

    document.getElementById('customSwitch2').addEventListener('change', (e) => {
        this.checkboxValue = e.target.checked ? 'on' : 'off';
        console.log(this.checkboxValue)
        Livewire.emit('turnSwitch', this.checkboxValue);
    });
  </script>
@endpush