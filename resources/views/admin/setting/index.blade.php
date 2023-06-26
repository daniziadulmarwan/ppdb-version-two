@extends('layouts.app')

@push('style')
  <link rel="stylesheet" href="/assets/power-switch.css">
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
                                            <h4 class="title nk-block-title">Change Password</h4>
                                            <p>If you want to be secret, Probably you should change your password.</p>
                                        </div>
                                    </div>
                                    <div class="row g-gs">
                                        @include('admin.setting.change-password')
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

  @include('admin.setting.create-user')
@endsection

@push('script')
  <script src="/assets/js/libs/datatable-btns.js?ver=3.1.1"></script>
  @livewireScripts
@endpush