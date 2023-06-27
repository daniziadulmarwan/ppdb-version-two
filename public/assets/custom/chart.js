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
          let one = data.parentIncome[1].length;
          let two = data.parentIncome[2].length;
          let three = data.parentIncome[3].length;
          let four = data.parentIncome[4].length;
          let five = data.parentIncome[5].length;
          let six = data.parentIncome[6].length;
          let seven = data.parentIncome[7].length;

          let datas = [one,two,three,four,five,six,seven];

          let categorie = ["500K","1JT","2JT","3JT","4JT","5JT",">5JT"];

          const options = {
              series: [{
                  name: "Penghasilan",
                  data: datas,
              }],
              chart: {
                  height: 350,
                  type: 'radar',
                  toolbar: {
                      show: false
                  }
              },
              xaxis: {
                  categories: categorie
              },
              yaxis: {
                  labels: {
                      show: true,
                      style: {
                          colors: ["#fff"]
                          }
                  }
              }
          };

          const chart = new ApexCharts(document.querySelector("#parent_income_chart"), options);
          chart.render();
      });
}

ParentJobChart()
YearlyChart()
GenderChart()
ParentIncomeChart()