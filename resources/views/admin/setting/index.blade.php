@extends('layouts.app')

@push('style')
  <style>
    /* Power Switch Style Start */
    .power-switch-wrapper {
      position: relative;
      margin: 0;
      padding: 0;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    input {
      display: none;
    }

    .toggleWrapper {
      z-index: 3;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all .2s;
      width: 100px;
      height: 100px;
      border-radius: 50%;
      background-color: #fe4551;
      box-shadow: 0 20px 20px 0 rgba(#fe4551, 0.3);
      
      &:active {
        width: 95px;
        height: 95px;
        box-shadow: 0 15px 15px 0 rgba(#fe4551, 0.5);
        
        .toggle {
          height: 17px;
          width: 17px;
        }
      }
      
      .toggle {
        transition: all 0.2s ease-in-out;
        height: 20px;
        width: 20px;
        background-color: transparent;
        border: 10px solid #fff;
        border-radius: 50%;
        cursor: pointer;
        
        animation: red .7s linear forwards;
      }
    }

    .background {
      position: absolute;
      height: 100%;
      width: 100%;
      background-color: #fef5f4;
    }

    input:checked {
      & ~ .background {
        background-color: #f9faf7;
      }
      & + .toggleWrapper {
        background-color: #48e98a;
        box-shadow: 0 20px 20px 0 rgba(#48e98a, 0.3);
        
        &:active {
          box-shadow: 0 15px 15px 0 rgba(#48e98a, 0.5);
        }

        .toggle {
          width: 0;
          background-color: #fff;
          border-color: transparent;
          border-radius: 30px;
          animation: green .7s linear forwards !important;
        }
      }
    }
    
    .footer {
      font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
      position: absolute;
      display: flex;
      flex-direction: column;
      left: calc(50% - 96px);
      bottom: 0;
      font-style: italic;
      font-size: 12px;
      color: #212121;
      background-color: white;
      padding: 15px 20px;
      border-radius: 5px 5px 0 0;
      box-shadow: 0 5px 15px 0 rgba(0, 0, 0, 0.25);
      text-align: center;

      a {
        color: #222;
      }
    }

    @keyframes red {
      0% {
        height: 30px;
        width: 0;
        border-width: 5px;
      }
      55% {
        height: 13px;
        width: 27px;
        border-width: 10px;
      }
      
      70% {
        height: 20px;
        width: 20px;
        border-width: 10px;
      }
      
      85% {
        height: 15px;
        width: 25px;
        border-width: 10px;
      }
      
      100% {
        height: 20px;
        width: 20px;
        border-width: 10px;
      }
    }

    @keyframes green {
      0% {
        height: 20px;
        width: 20px;
        border-width: 10px;
      }
      25%, 55%, 85% {
        height: 30px;
        width: 5px;
        border-width: 5px;
      }
      
      40%, 70%, 100% {
        height: 30px;
        width: 0;
        border-width: 5px;
      }
    }
    /* Power Switch Style End */
  </style>
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
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function() {
      $('.toggleWrapper').click(function() {
        let res = $('.opo').attr(':checked')
        if(res === undefined) {
          $('.opo').attr(':checked')
        } else {
          $('.opo').remove(':checked')
        }
      });
    })
  </script>
@endpush