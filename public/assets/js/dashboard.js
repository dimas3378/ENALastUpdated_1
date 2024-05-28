/* Sebelumnya pada dashboard menggunakan $function, 
akan tetapi dihapus agar dapat diakses secara global */

  // =====================================
  // Total Project; Bar Chart
  // =====================================
  
  const data = {
    labels: ['2024-01-01', '2024-02-02', '2024-10-02', '2024-12-02', '2025-02-02'],
    datasets: [{
      label: 'On Review',
      data: [18, 12, 6, 9, 12, 3, 9],
      backgroundColor: [
        'rgba(54, 162, 235, 0.2)',
      ],
      borderColor: [
        'rgba(54, 162, 235, 1)',
      ],
      borderWidth: 1
    },
    {
      label: 'RFQ Submitted',
      data: [11, 2, 8, 4, 16, 9, 10],
      backgroundColor: [
        'rgba(75, 192, 192, 0.2)',
      ],
      borderColor: [
        'rgba(75, 192, 192, 1)',
      ],
      borderWidth: 1
    },
  ]
  };

  // config 
  const config = {
    type: 'bar',
    data,
    
    options: {
      scales: {
        x: {
          min: '2024-01-01',
          max: '2024-12-31',
          type: 'time',
          time: {
            unit: 'day'
          }
        },
      y: {
          beginAtZero: true
        },
      },
      
/*       layout: {
        padding: 10,
        
      } */
      
    }
  };


  // render init block
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );

  
  function filterChart(date) {
    console.log(date.value);
    const year = date.value.substring(0, 4);
    const month = date.value.substring(5, 7);
    console.log(month)

    const lastDay = (y,m) => {
     console.log(new Date(y, m, 0).getDate())
    }

    lastDay(year, month);

    const startDate = '${date.value}-01';
    const endDate = '${date.value}-${lastDay(year, month)}'; 
    
    myChart.config.options.scales.x.min = startDate;
    myChart.config.options.scales.x.max = endDate;
    myChart.update();
  }

  // =====================================
  // Ongoing Progress; Pie Chart
  // =====================================

  var ongoing = {
    color: "#adb5bd",
    series: [38, 40, 25],
    labels: ["2022", "2021", "2020"],
    chart: {
      width: 180,
      type: "pie",
      fontFamily: "Plus Jakarta Sans', sans-serif",
      foreColor: "#adb0bb",
    },
    plotOptions: {
      pie: {
        startAngle: 0,
        endAngle: 360,
        donut: {
          size: '75%',
        },
      },
    },
    stroke: {
      show: false,
    },

    dataLabels: {
      enabled: false,
    },

    legend: {
      show: false,
    },
    colors: ["#5D87FF", "#82b7f7", "#b4d4f4", "#ecf2ff", "#F9F9FD"],

    responsive: [
      {
        breakpoint: 991,
        options: {
          chart: {
            width: 150,
          },
        },
      },
    ],
    tooltip: {
      theme: "dark",
      fillSeriesColor: false,
    },
  };

  var chart = new ApexCharts(document.querySelector("#ongoing"), ongoing);
  chart.render();


  // =====================================
  // Progress; Pie Chart
  // =====================================

  var progress = {
    color: "#adb5bd",
    series: [38, 40, 25],
    labels: ["2022", "2021", "2020"],
    chart: {
      width: 180,
      type: "pie",
      fontFamily: "Plus Jakarta Sans', sans-serif",
      foreColor: "#adb0bb",
    },
    plotOptions: {
      pie: {
        startAngle: 0,
        endAngle: 360,
        donut: {
          size: '75%',
        },
      },
    },
    stroke: {
      show: false,
    },

    dataLabels: {
      enabled: false,
    },

    legend: {
      show: false,
    },
    colors: ["#5D87FF", "#82b7f7", "#b4d4f4", "#ecf2ff", "#F9F9FD"],

    responsive: [
      {
        breakpoint: 991,
        options: {
          chart: {
            width: 150,
          },
        },
      },
    ],
    tooltip: {
      theme: "dark",
      fillSeriesColor: false,
    },
  };

  var chart = new ApexCharts(document.querySelector("#progress"), progress);
  chart.render();

  // =====================================
  // Payment; Pie Chart
  // =====================================

  var payment = {
    color: "#adb5bd",
    series: [5, 40],
    labels: ["Angsuran", "Lunas"],
    chart: {
      width: 180,
      type: "pie",
      fontFamily: "Plus Jakarta Sans', sans-serif",
      foreColor: "#adb0bb",
    },
    plotOptions: {
      pie: {
        startAngle: 0,
        endAngle: 360,
        donut: {
          size: '75%',
        },
      },
    },
    stroke: {
      show: false,
    },

    dataLabels: {
      enabled: false,
    },

    legend: {
      show: false,
    },
    colors: ["#5D87FF", "#82b7f7", "#b4d4f4", "#ecf2ff", "#F9F9FD"],

    responsive: [
      {
        breakpoint: 991,
        options: {
          chart: {
            width: 150,
          },
        },
      },
    ],
    tooltip: {
      theme: "dark",
      fillSeriesColor: false,
    },
  };

  var chart = new ApexCharts(document.querySelector("#payment"), payment);
  chart.render();

  // =====================================
  // Division; Pie Chart
  // =====================================

  var division = {
    color: "#adb5bd",
    series: [11, 14, 9, 20],
    labels: ["AE", "DE", "ME", "FE"],
    chart: {
      width: 180,
      type: "pie",
      fontFamily: "Plus Jakarta Sans', sans-serif",
      foreColor: "#adb0bb",
    },
    plotOptions: {
      pie: {
        startAngle: 0,
        endAngle: 360,
        donut: {
          size: '75%',
        },
      },
    },
    stroke: {
      show: false,
    },

    dataLabels: {
      enabled: false,
    },

    legend: {
      show: false,
      
    },
    colors: ["#5D87FF", "#82b7f7", "#b4d4f4", "#ecf2ff", "#F9F9FD"],

    responsive: [
      {
        breakpoint: 991,
        options: {
          chart: {
            width: 150,
          },
        },
      },
    ],
    tooltip: {
      theme: "dark",
      fillSeriesColor: false,
    },
  };

  var chart = new ApexCharts(document.querySelector("#division"), division);
  chart.render();
  
  // =====================================
  // Earning; fungsi di bawah ini tidak digunakan 
  // =====================================

  var earning = {
    chart: {
      id: "sparkline3",
      type: "area",
      height: 60,
      sparkline: {
        enabled: true,
      },
      group: "sparklines",
      fontFamily: "Plus Jakarta Sans', sans-serif",
      foreColor: "#adb0bb",
    },
    series: [
      {
        name: "Earnings",
        color: "#49BEFF",
        data: [25, 66, 20, 40, 12, 58, 20],
      },
    ],
    stroke: {
      curve: "smooth",
      width: 2,
    },
    fill: {
      colors: ["#f3feff"],
      type: "solid",
      opacity: 0.05,
    },

    markers: {
      size: 0,
    },
    tooltip: {
      theme: "dark",
      fixed: {
        enabled: true,
        position: "right",
      },
      x: {
        show: false,
      },
    },
  };
  new ApexCharts(document.querySelector("#earning"), earning).render();
