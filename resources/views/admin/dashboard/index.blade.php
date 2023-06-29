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
                                        <div class="amount" style="font-size: 32px; font-weight: bold">{{ $total }}</div>
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
                                        <div class="amount" style="font-size: 32px; font-weight: bold">{{ $ma }}</div>
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
                                        <div class="amount" style="font-size: 32px; font-weight: bold">{{ $mts }}</div>
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
                                        <div class="amount" style="font-size: 32px; font-weight: bold">{{ $ponpes }}</div>
                                        <div class="info"><span class="change up text-danger"><em class="icon ni ni-user-alt"></em> Peserta Didik</span></div>
                                    </div>
                                    <div class="bg-primary-dim" style="display: inline-flex; width: 60px; height: 60px; justify-content: center; align-items: center; border-radius: 10px">
                                        <span class="icon ni ni-sun bg-primary-dim big-size"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End 4 Card -->

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-sm-flex flex-wrap">
                                        <h4 class="card-title mb-4">Jumlah Pendaftar Tahunan</h4>
                                    </div>
                                    
                                    <div id="year_chart_datalabel" class="apex-charts" dir="ltr"></div>  
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body" style="min-height: 440px;">
                                    <div class="d-sm-flex flex-wrap">
                                        <h4 class="card-title mb-4">Grafik Jenis Kelamin</h4>
                                    </div>
                                    
                                    <div style="flex; justify-content: center; align-items: center; flex-direction: column">
                                        <div id="gender_chart" class="apex-charts" dir="ltr"></div>  
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body" style="min-height: 440px;">
                                    <div class="d-sm-flex flex-wrap">
                                        <h4 class="card-title mb-4">Grafik Pekerjaan Orang Tua</h4>
                                    </div>
                                    
                                    <div style=" display: flex; justify-content: center; align-items: center;">
                                        <div id="parent_job_chart" class="apex-charts" dir="ltr"></div>  
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body" style="min-height: 440px;">
                                    <div class="d-sm-flex flex-wrap">
                                        <h4 class="card-title mb-4">Grafik Penghasilan Orang Tua</h4>
                                    </div>
                                    
                                    <div style="display: flex; justify-content: center; align-items: center;">
                                        <div id="parent_income_chart" class="apex-charts" dir="ltr"></div>  
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
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="/assets/custom/js/chart.js"></script>
@endpush