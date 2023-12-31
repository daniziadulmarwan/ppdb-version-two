function YearlyChart() {
    fetch("/charts")
        .then((res) => res.json())
        .then((data) => {
            let mtsArray = [];
            let maArray = [];
            let categorie = new Set();
            let ponpes = [];

            for (const key in data.yearly[1]) {
                if (Object.hasOwnProperty.call(data.yearly[1], key)) {
                    const element = data.yearly[1][key];
                    mtsArray.push(element.length);
                }
                categorie.add(key);
            }

            for (const key in data.yearly[2]) {
                if (Object.hasOwnProperty.call(data.yearly[2], key)) {
                    const element = data.yearly[2][key];
                    maArray.push(element.length);
                }
                categorie.add(key);
            }

            for (const key in data.ponpes) {
                if (Object.hasOwnProperty.call(data.ponpes, key)) {
                    const element = data.ponpes[key];
                    ponpes.push(element.length);
                }
                categorie.add(key);
            }

            categorie = Array.from(categorie);

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
                colors: ["#556ee6", "#34c38f", "#EC9706"],
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    width: [3, 3, 3],
                    curve: "straight",
                },
                series: [
                    {
                        name: "Madrasah Aliyah",
                        data: maArray,
                    },
                    {
                        name: "Madrasah Tsanawiyah",
                        data: mtsArray,
                    },
                    {
                        name: "Pondok Pesantren",
                        data: ponpes,
                    },
                ],
                title: {
                    text: "Average Registration Pertahun",
                    align: "left",
                    style: {
                        fontWeight: "500",
                        color: "#eee",
                    },
                },
                grid: {
                    row: {
                        colors: ["transparent", "transparent", "transparent"],
                        opacity: 0.2,
                    },
                    borderColor: "#f1f1f1",
                },
                markers: {
                    style: "inverted",
                    size: 6,
                },
                xaxis: {
                    categories: categorie,
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

function ParentJobChart() {
    fetch("/charts")
        .then((res) => res.json())
        .then((data) => {
            let one = data.parentJob[1]?.length || 0;
            let two = data.parentJob[2]?.length || 0;
            let three = data.parentJob[3]?.length || 0;
            let four = data.parentJob[4]?.length || 0;
            let five = data.parentJob[5]?.length || 0;
            let six = data.parentJob[6]?.length || 0;
            let seven = data.parentJob[7]?.length || 0;
            let eight = data.parentJob[8]?.length || 0;
            let nine = data.parentJob[9]?.length || 0;
            let ten = data.parentJob[10]?.length || 0;

            let citaArr = [
                one,
                two,
                three,
                four,
                five,
                six,
                seven,
                eight,
                nine,
                ten,
            ];

            let title = [
                "Tidak Bekerja",
                "Buruh(Tani,Pabrik,Bangunan)",
                "Dokter/Bidan/Perawat",
                "Guru/Dosen",
                "Pedagang",
                "Wiraswasta",
                "Pengacara/Hakim/Jaksa/Notaris",
                "Petani/Peternak",
                "PNS",
                "Lainnya",
            ];

            let colors = [
                "#34c38f",
                "#556ee6",
                "#f46a6a",
                "#50a5f1",
                "#f1b44c",
                "#8E3200",
                "#7858A6",
                "#37E2D5",
                "#F73D93",
                "#82954B",
            ];

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
                    show: false,
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
                                height: 300,
                                width: 450,
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

function ParentIncomeChart() {
    fetch("/charts")
        .then((res) => res.json())
        .then((data) => {
            let one = data.parentIncome[1]?.length || 0;
            let two = data.parentIncome[2]?.length || 0;
            let three = data.parentIncome[3]?.length || 0;
            let four = data.parentIncome[4]?.length || 0;
            let five = data.parentIncome[5]?.length || 0;
            let six = data.parentIncome[6]?.length || 0;
            let seven = data.parentIncome[7]?.length || 0;

            let datas = [one, two, three, four, five, six, seven];

            let categorie = ["500K", "1JT", "2JT", "3JT", "4JT", "5JT", ">5JT"];

            const options = {
                series: [
                    {
                        name: "Penghasilan",
                        data: datas,
                    },
                ],
                chart: {
                    height: 320,
                    width: 480,
                    type: "radar",
                    toolbar: {
                        show: false,
                    },
                },
                xaxis: {
                    categories: categorie,
                },
                yaxis: {
                    labels: {
                        show: true,
                        style: {
                            colors: ["#fff"],
                        },
                    },
                },
            };

            const chart = new ApexCharts(
                document.querySelector("#parent_income_chart"),
                options
            );
            chart.render();
        });
}

function GenderChart() {
    fetch("/charts")
        .then((res) => res.json())
        .then((data) => {
            let categorie = new Set();
            let serie = [];

            let man = [];
            let woman = [];

            for (const key in data.gender[1]) {
                if (Object.hasOwnProperty.call(data.gender[1], key)) {
                    const element = data.gender[1][key];
                    man.push(element.length);
                }
                categorie.add(key);
            }

            for (const key in data.gender[2]) {
                if (Object.hasOwnProperty.call(data.gender[2], key)) {
                    const element = data.gender[2][key];
                    woman.push(element.length);
                }
                categorie.add(key);
            }

            categorie = Array.from(categorie);
            serie.push({ name: "Laki-laki", data: man });
            serie.push({ name: "Perempuan", data: woman });

            const options = {
                series: serie,
                chart: {
                    type: "bar",
                    height: 350,
                    toolbar: {
                        show: false,
                    },
                },
                colors: ["#34c38f", "#F73D93"],
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: "55%",
                        endingShape: "rounded",
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ["transparent"],
                },
                xaxis: {
                    categories: categorie,
                },

                fill: {
                    opacity: 1,
                },
            };

            const chart = new ApexCharts(
                document.querySelector("#gender_chart"),
                options
            );
            chart.render();
        });
}

ParentJobChart();
YearlyChart();
GenderChart();
ParentIncomeChart();
