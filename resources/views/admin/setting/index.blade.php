@extends('layouts.app')

@push('style')
  <link rel="stylesheet" href="/assets/power-switch.css">
@endpush

@section('content')
  <div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Settings</h3>
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
                                    <!-- Users Table Start -->
                                    @include('admin.setting.user-table')
                                    <!-- Users Table End -->

                                </div>
                                <div class="tab-pane" id="tabTwo">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="title nk-block-title">Registration Management</h4>
                                            <p>Here you can manage when you should open the registration form.</p>
                                        </div>
                                    </div>
                                    <div class="row g-gs">
                                      @include('admin.setting.power-switch')
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabThree">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="title nk-block-title">Email-Settings</h4>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </div>
                                    <div class="row g-gs">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">E-mail to students</label>
                                                <ul class="custom-control-group g-3 align-center">
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="pay-card">
                                                            <label class="custom-control-label" for="pay-card">Course enrolement</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="pay-bitcoin">
                                                            <label class="custom-control-label" for="pay-bitcoin">Add new lesson</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="pay-cash">
                                                            <label class="custom-control-label" for="pay-cash">Update newsletter</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">E-mail to Teachers</label>
                                                <ul class="custom-control-group g-3 align-center">
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="pay-cardd">
                                                            <label class="custom-control-label" for="pay-cardd">Course sale</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="pay-bitcoinn">
                                                            <label class="custom-control-label" for="pay-bitcoinn">Support student</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="pay-cashh">
                                                            <label class="custom-control-label" for="pay-cashh">Feedback course</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon ni ni-search"></em>
                                                    </div>
                                                    <input type="text" class="form-control" id="default-04" placeholder="E-mail from a name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-lg-7">
                                            <div class="form-group mt-2">
                                                <button type="submit" class="btn btn-lg btn-primary" data-bs-target="#modalAlert" data-bs-toggle="modal">Update</button>
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
    </div>
  </div>
@endsection

@push('script')
  <script src="/assets/js/libs/datatable-btns.js?ver=3.1.1"></script>

  <script>
    const switchPowerButton = document.querySelector('.power-switch-button');
    const toggleWrapper = document.querySelector('.toggleWrapper');
    toggleWrapper.addEventListener('click', function() {
      if(switchPowerButton.checked) {
        console.log(0)
      } else {
        console.log(1)
      }
    });
  </script>
@endpush