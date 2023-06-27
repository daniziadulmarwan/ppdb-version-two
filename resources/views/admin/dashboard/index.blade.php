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
                                <div class="card-body" style="min-height: 400px;">
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
                                <div class="card-body" style="min-height: 400px; display: flex; justify-content: center; align-items: center; flex-direction: column">
                                    <div class="d-sm-flex flex-wrap">
                                        <h4 class="card-title mb-4">Grafik Pekerjaan Orang Tua</h4>
                                    </div>
                                    
                                    <div id="parent_job_chart" class="apex-charts" dir="ltr"></div>  
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

    <script>
        function YearlyChart() {
            fetch("/charts")
            .then((res) => res.json())
            .then((data) => {
                let ma2022 = data.yearly.filter(
                    (w) => w.jenjang === 1 && w.tahun_ppdb === "2022"
                ).length;
                let mts2022 = data.yearly.filter(
                    (w) => w.jenjang === 2 && w.tahun_ppdb === "2022"
                ).length;

                let ma2023 = data.yearly.filter(
                    (w) => w.jenjang === 1 && w.tahun_ppdb === "2023"
                ).length;
                let mts2023 = data.yearly.filter(
                    (w) => w.jenjang === 2 && w.tahun_ppdb === "2023"
                ).length;

                let ma2024 = data.yearly.filter(
                    (w) => w.jenjang === 1 && w.tahun_ppdb === "2024"
                ).length;
                let mts2024 = data.yearly.filter(
                    (w) => w.jenjang === 2 && w.tahun_ppdb === "2024"
                ).length;

                let ma2025 = data.yearly.filter(
                    (w) => w.jenjang === 1 && w.tahun_ppdb === "2025"
                ).length;
                let mts2025 = data.yearly.filter(
                    (w) => w.jenjang === 2 && w.tahun_ppdb === "2025"
                ).length;

                let ma2026 = data.yearly.filter(
                    (w) => w.jenjang === 1 && w.tahun_ppdb === "2026"
                ).length;
                let mts2026 = data.yearly.filter(
                    (w) => w.jenjang === 2 && w.tahun_ppdb === "2026"
                ).length;

                let ma2027 = data.yearly.filter(
                    (w) => w.jenjang === 1 && w.tahun_ppdb === "2027"
                ).length;
                let mts2027 = data.yearly.filter(
                    (w) => w.jenjang === 2 && w.tahun_ppdb === "2027"
                ).length;

                let ma2028 = data.yearly.filter(
                    (w) => w.jenjang === 1 && w.tahun_ppdb === "2028"
                ).length;
                let mts2028 = data.yearly.filter(
                    (w) => w.jenjang === 2 && w.tahun_ppdb === "2028"
                ).length;

                let mas = [
                    ma2022 ?? 0,
                    ma2023 ?? 0,
                    ma2024 ?? 0,
                    ma2025 ?? 0,
                    ma2026 ?? 0,
                    ma2027 ?? 0,
                    ma2028 ?? 0,
                ];
                let mtss = [
                    mts2022 ?? 0,
                    mts2023 ?? 0,
                    mts2024 ?? 0,
                    mts2025 ?? 0,
                    mts2026 ?? 0,
                    mts2027 ?? 0,
                    mts2028 ?? 0,
                ];

                const options = {
                    chart: {
                        height: 380,
                        type: "line",
                        zoom: {
                            enabled: false,
                        },
                        toolbar: {
                            show: false,
                        },
                    },
                    colors: ["#556ee6", "#34c38f"],
                    dataLabels: {
                        enabled: false,
                    },
                    stroke: {
                        width: [3, 3],
                        curve: "straight",
                    },
                    series: [
                        {
                            name: "Madrasah Aliyah",
                            data: mas,
                        },
                        {
                            name: "Madrasah Tsanawiyah",
                            data: mtss,
                        },
                    ],
                    title: {
                        text: "Average Registration Pertahun",
                        align: "left",
                        style: {
                            fontWeight: "500",
                            color: "#eee"
                        },
                    },
                    grid: {
                        row: {
                            colors: ["transparent", "transparent"],
                            opacity: 0.2,
                        },
                        borderColor: "#f1f1f1",
                    },
                    markers: {
                        style: "inverted",
                        size: 6,
                    },
                    xaxis: {
                        categories: [
                            "2022",
                            "2023",
                            "2024",
                            "2025",
                            "2026",
                            "2027",
                            "2028",
                        ],
                        title: {
                            text: "Total Pendaftaran Tahun",
                        },
                    },
                    legend: {
                        position: "top",
                        horizontalAlign: "right",
                        floating: true,
                        offsetY: -25,
                        offsetX: -5,
                    },
                    responsive: [
                        {
                            breakpoint: 600,
                            options: {
                                chart: {
                                    toolbar: {
                                        show: false,
                                    },
                                },
                                legend: {
                                    show: false,
                                },
                            },
                        },
                    ],
                };
                const chart = new ApexCharts(
                    document.querySelector("#year_chart_datalabel"),
                    options
                );
                chart.render();
                })
            .catch((err) => console.log(err));
        }

        function GenderChart() {
            fetch("/charts")
                .then((res) => res.json())
                .then((data) => {
                    let man = data.gender[1].length;
                    let woman = data.gender[2].length;

                    let gender = [man, woman]
                    let title = ["Laki-laki","Perempuan",];

                    const options = {
                        series: gender,
                        labels: title,
                        chart: {
                            type: 'donut',
                        },
                        responsive: [{
                            breakpoint: 480,
                            options: {
                                chart: {
                                    width: 270,
                                },
                                legend: {
                                    position: 'bottom'
                                },
                            }
                        }]
                    };
        
                    const chart = new ApexCharts(document.querySelector("#gender_chart"), options);
                    chart.render();
            });
        }

        function ParentJobChart() {
            fetch("/charts")
                .then((res) => res.json())
                .then((data) => {
                    let one = data.parentJob[1].length;
                    let two = data.parentJob[2].length;
                    let three = data.parentJob[3].length;
                    let four = data.parentJob[4].length;
                    let five = data.parentJob[5].length;
                    let six = data.parentJob[6].length;
                    let seven = data.parentJob[7].length;
                    let eight = data.parentJob[8].length;
                    let nine = data.parentJob[9].length;
                    let ten = data.parentJob[10].length;

                    let citaArr = [one,two,three,four,five,six,seven,eight,nine,ten];

                    let title = ["Tidak Bekerja","Buruh(Tani,Pabrik,Bangunan)","Dokter/Bidan/Perawat","Guru/Dosen","Pedagang","Wiraswasta","Pengacara/Hakim/Jaksa/Notaris","Petani/Peternak","PNS","Lainnya"];

                    let colors = ["#34c38f","#556ee6","#f46a6a","#50a5f1","#f1b44c","#8E3200","#7858A6","#37E2D5","#F73D93","#82954B"];

                    const options = {
                        chart: {
                            height: 320,
                            width: 480,
                            type: "pie",
                        },
                        series: citaArr,
                        labels: title,
                        colors: colors,
                        legend: {
                            show: true,
                            position: "bottom",
                            horizontalAlign: "center",
                            verticalAlign: "middle",
                            floating: false,
                            fontSize: "14px",
                            offsetX: 0,
                        },
                        responsive: [
                            {
                                breakpoint: 600,
                                options: {
                                    chart: {
                                        height: 240,
                                    },
                                    legend: {
                                        show: false,
                                    },
                                },
                            },
                        ],
                    };

                    const chart = new ApexCharts(
                        document.querySelector("#parent_job_chart"),
                        options
                    );

                    chart.render();
                })
                .catch((err) => console.log(err));
        }

        ParentJobChart()
        YearlyChart()
        GenderChart()
    </script>
@endpush