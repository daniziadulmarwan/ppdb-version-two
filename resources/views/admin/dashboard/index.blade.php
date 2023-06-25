@extends('layouts.app')

@push('style')
    <style>
        .big-size {
        font-size: 32px;
        }
    </style>
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
                                  <li class="breadcrumb-item active">Dashboard</li>
                              </ul>
                            </nav>
                          </div>

                    </div>
                </div>

                <div class="nk-block">
                    <div class="row g-gs">

                        <!-- Start 4 Card -->
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body" style="display: flex; justify-content: space-between;align-items: center">
                                    <div class="card-title">
                                        <h6 class="title pt-2" style="font-size: 18px;">Total Pendaftar</h6>
                                        <div class="amount" style="font-size: 32px; font-weight: bold">96</div>
                                        <div class="info"><span class="change up text-danger"><em class="icon ni ni-user-alt"></em> Peserta Didik</span></div>
                                    </div>
                                    <div class="bg-info-dim" style="display: inline-flex; width: 60px; height: 60px; justify-content: center; align-items: center; border-radius: 10px">
                                        <span class="icon ni ni-users bg-info-dim big-size"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body" style="display: flex; justify-content: space-between;align-items: center">
                                    <div class="card-title">
                                        <h6 class="title pt-2" style="font-size: 18px;">MA Al-Amin</h6>
                                        <div class="amount" style="font-size: 32px; font-weight: bold">40</div>
                                        <div class="info"><span class="change up text-danger"><em class="icon ni ni-user-alt"></em> Peserta Didik</span></div>
                                    </div>
                                    <div class="bg-success-dim" style="display: inline-flex; width: 60px; height: 60px; justify-content: center; align-items: center; border-radius: 10px">
                                        <span class="icon ni ni-award bg-success-dim big-size"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body" style="display: flex; justify-content: space-between;align-items: center">
                                    <div class="card-title">
                                        <h6 class="title pt-2" style="font-size: 18px;">MTs Al-Amin</h6>
                                        <div class="amount" style="font-size: 32px; font-weight: bold">56</div>
                                        <div class="info"><span class="change up text-danger"><em class="icon ni ni-user-alt"></em> Peserta Didik</span></div>
                                    </div>
                                    <div class="bg-danger-dim" style="display: inline-flex; width: 60px; height: 60px; justify-content: center; align-items: center; border-radius: 10px">
                                        <span class="icon ni ni-building bg-danger-dim big-size"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body" style="display: flex; justify-content: space-between;align-items: center">
                                    <div class="card-title">
                                        <h6 class="title pt-2" style="font-size: 18px;">Pesantren</h6>
                                        <div class="amount" style="font-size: 32px; font-weight: bold">45</div>
                                        <div class="info"><span class="change up text-danger"><em class="icon ni ni-user-alt"></em> Peserta Didik</span></div>
                                    </div>
                                    <div class="bg-primary-dim" style="display: inline-flex; width: 60px; height: 60px; justify-content: center; align-items: center; border-radius: 10px">
                                        <span class="icon ni ni-sun bg-primary-dim big-size"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End 4 Card -->


                        

                        <div class="col-xxl-6">
                            <div class="card card-full">
                                <div class="nk-ecwg nk-ecwg8 h-100">
                                    <div class="card-inner">
                                        <div class="card-title-group mb-3">
                                            <div class="card-title">
                                                <h6 class="title">Sales Statistics</h6>
                                            </div>
                                            <div class="card-tools">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle link link-light link-sm dropdown-indicator" data-bs-toggle="dropdown">Weekly</a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><span>Daily</span></a></li>
                                                            <li><a href="#" class="active"><span>Weekly</span></a></li>
                                                            <li><a href="#"><span>Monthly</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nk-ecwg8-legends">
                                            <li>
                                                <div class="title">
                                                    <span class="dot dot-lg sq" data-bg="#6576ff"></span>
                                                    <span>Total Order</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="title">
                                                    <span class="dot dot-lg sq" data-bg="#eb6459"></span>
                                                    <span>Cancelled Order</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="nk-ecwg8-ck">
                                            <canvas class="ecommerce-line-chart-s4" id="salesStatistics"></canvas>
                                        </div>
                                        <div class="chart-label-group ps-5">
                                            <div class="chart-label">01 Jul, 2020</div>
                                            <div class="chart-label">30 Jul, 2020</div>
                                        </div>
                                    </div><!-- .card-inner -->
                                </div>
                            </div><!-- .card -->
                        </div>

                        <div class="col-xxl-3 col-md-6">
                            <div class="card card-full overflow-hidden">
                                <div class="nk-ecwg nk-ecwg7 h-100">
                                    <div class="card-inner flex-grow-1">
                                        <div class="card-title-group mb-4">
                                            <div class="card-title">
                                                <h6 class="title">Order Statistics</h6>
                                            </div>
                                        </div>
                                        <div class="nk-ecwg7-ck">
                                            <canvas class="ecommerce-doughnut-s1" id="orderStatistics"></canvas>
                                        </div>
                                        <ul class="nk-ecwg7-legends">
                                            <li>
                                                <div class="title">
                                                    <span class="dot dot-lg sq" data-bg="#816bff"></span>
                                                    <span>Completed</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="title">
                                                    <span class="dot dot-lg sq" data-bg="#13c9f2"></span>
                                                    <span>Processing</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="title">
                                                    <span class="dot dot-lg sq" data-bg="#ff82b7"></span>
                                                    <span>Cancelled</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- .card-inner -->
                                </div>
                            </div><!-- .card -->
                        </div>

                        <div class="col-xxl-3 col-md-6">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <div class="card-title-group mb-2">
                                        <div class="card-title">
                                            <h6 class="title">Store Statistics</h6>
                                        </div>
                                    </div>
                                    <ul class="nk-store-statistics">
                                        <li class="item">
                                            <div class="info">
                                                <div class="title">Orders</div>
                                                <div class="count">1,795</div>
                                            </div>
                                            <em class="icon bg-primary-dim ni ni-bag"></em>
                                        </li>
                                        <li class="item">
                                            <div class="info">
                                                <div class="title">Customers</div>
                                                <div class="count">2,327</div>
                                            </div>
                                            <em class="icon bg-info-dim ni ni-users"></em>
                                        </li>
                                        <li class="item">
                                            <div class="info">
                                                <div class="title">Products</div>
                                                <div class="count">674</div>
                                            </div>
                                            <em class="icon bg-pink-dim ni ni-box"></em>
                                        </li>
                                        <li class="item">
                                            <div class="info">
                                                <div class="title">Categories</div>
                                                <div class="count">68</div>
                                            </div>
                                            <em class="icon bg-purple-dim ni ni-server"></em>
                                        </li>
                                    </ul>
                                </div><!-- .card-inner -->
                            </div><!-- .card -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
  </div>
@endsection