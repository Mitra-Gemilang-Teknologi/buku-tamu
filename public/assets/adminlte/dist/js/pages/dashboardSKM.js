/*
 * Author: Abdullah A Almsaeed
 * Date: 4 Jan 2014
 * Description:
 *      This is a demo file used only for the main dashboard (index.html)
 **/

/* global moment:false, Chart:false, Sparkline:false */

$(function () {
  'use strict'

  // Make the dashboard widgets sortable Using jquery UI
  $('.connectedSortable').sortable({
    placeholder: 'sort-highlight',
    connectWith: '.connectedSortable',
    handle: '.card-header, .nav-tabs',
    forcePlaceholderSize: true,
    zIndex: 999999
  })
  $('.connectedSortable .card-header').css('cursor', 'move')

  // jQuery UI sortable for the todo list
  $('.todo-list').sortable({
    placeholder: 'sort-highlight',
    handle: '.handle',
    forcePlaceholderSize: true,
    zIndex: 999999
  })

  // bootstrap WYSIHTML5 - text editor
  $('.textarea').summernote()

  $('.daterange').daterangepicker({
    ranges: {
      Today: [moment(), moment()],
      Yesterday: [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      'Last 7 Days': [moment().subtract(6, 'days'), moment()],
      'Last 30 Days': [moment().subtract(29, 'days'), moment()],
      'This Month': [moment().startOf('month'), moment().endOf('month')],
      'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    startDate: moment().subtract(29, 'days'),
    endDate: moment()
  }, function (start, end) {
    // eslint-disable-next-line no-alert
    alert('You chose: ' + start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
  })

  /* jQueryKnob */
  $('.knob').knob()

  // jvectormap data
  var visitorsData = {
    US: 398, // USA
    SA: 400, // Saudi Arabia
    CA: 1000, // Canada
    DE: 500, // Germany
    FR: 760, // France
    CN: 300, // China
    AU: 700, // Australia
    BR: 600, // Brazil
    IN: 800, // India
    GB: 320, // Great Britain
    RU: 3000 // Russia
  }
  // World map by jvectormap
  $('#world-map').vectorMap({
    map: 'usa_en',
    backgroundColor: 'transparent',
    regionStyle: {
      initial: {
        fill: 'rgba(255, 255, 255, 0.7)',
        'fill-opacity': 1,
        stroke: 'rgba(0,0,0,.2)',
        'stroke-width': 1,
        'stroke-opacity': 1
      }
    },
    series: {
      regions: [{
        values: visitorsData,
        scale: ['#ffffff', '#0154ad'],
        normalizeFunction: 'polynomial'
      }]
    },
    onRegionLabelShow: function (e, el, code) {
      if (typeof visitorsData[code] !== 'undefined') {
        el.html(el.html() + ': ' + visitorsData[code] + ' new visitors')
      }
    }
  })

  // Sparkline charts
  // var sparkline1 = new Sparkline($('#sparkline-1')[0], { width: 80, height: 50, lineColor: '#92c1dc', endColor: '#ebf4f9' })
  // var sparkline2 = new Sparkline($('#sparkline-2')[0], { width: 80, height: 50, lineColor: '#92c1dc', endColor: '#ebf4f9' })
  // var sparkline3 = new Sparkline($('#sparkline-3')[0], { width: 80, height: 50, lineColor: '#92c1dc', endColor: '#ebf4f9' })

  // sparkline1.draw([1000, 1200, 920, 927, 931, 1027, 819, 930, 1021])
  // sparkline2.draw([515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921])
  // sparkline3.draw([15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21])

  // The Calender
  $('#calendar').datetimepicker({
    format: 'L',
    inline: true
  })

  // SLIMSCROLL FOR CHAT WIDGET
  $('#chat-box').overlayScrollbars({
    height: '250px'
  })

  /* Chart.js Charts */
  // Sales chart
  var salesChartCanvas = document.getElementById('revenue-chart-canvas').getContext('2d')
  // $('#revenue-chart').get(0).getContext('2d');

  var salesChartData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [
      {
        label: 'Digital Goods',
        backgroundColor: 'rgba(60,141,188,0.9)',
        borderColor: 'rgba(60,141,188,0.8)',
        pointRadius: false,
        pointColor: '#3b8bba',
        pointStrokeColor: 'rgba(60,141,188,1)',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data: [28, 48, 40, 19, 86, 27, 90]
      },
      {
        label: 'Electronics',
        backgroundColor: 'rgba(210, 214, 222, 1)',
        borderColor: 'rgba(210, 214, 222, 1)',
        pointRadius: false,
        pointColor: 'rgba(210, 214, 222, 1)',
        pointStrokeColor: '#c1c7d1',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(220,220,220,1)',
        data: [65, 59, 80, 81, 56, 55, 40]
      }
    ]
  }

  var salesChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false
        }
      }],
      yAxes: [{
        gridLines: {
          display: false
        }
      }]
    }
  }

  // This will get the first returned node in the jQuery collection.
  // eslint-disable-next-line no-unused-vars
  var salesChart = new Chart(salesChartCanvas, { // lgtm[js/unused-local-variable]
    type: 'line',
    data: salesChartData,
    options: salesChartOptions
  })

  // Donut Chart
  var pieChartCanvas = $('#sales-chart-canvas-skm').get(0).getContext('2d')
  $.ajax({
    url: '/data/jenis-kelamin/skm',
    dataType: 'json',
    method: 'get'
  }).done(function (response) {
    var lakiLaki = response.laki_laki[0].total;
    var perempuan = response.perempuan[0].total;
    var pieChart = new Chart(pieChartCanvas, { // lgtm[js/unused-local-variable]
      type: 'doughnut',
      data: {
        labels: [
          'Laki-Laki',
          'Perempuan'
        ],
        datasets: [
          {
            data: [lakiLaki, perempuan],
            backgroundColor: ['#00a65a', '#f39c12']
          }
        ]
      },
      options: pieOptions
    })
  })
  var pieOptions = {
    legend: {
      display: false
    },
    maintainAspectRatio: false,
    responsive: true
  }

  // Donut Chart
  var pieChartCanvasKepuasan = $('#sales-chart-canvas-skm-kepuasan').get(0).getContext('2d')

  $.ajax({
    url: '/data/kepuasan/skm',
    dataType: 'json',
    method: 'get'
  }).done(function (response) {
    console.log('res', response);
    var sangatPuas = response.sangatPuas[0].total;
    var Puas = response.Puas[0].total;
    var TidakPuas = response.TidakPuas[0].total;
    var pieChart = new Chart(pieChartCanvasKepuasan, { // lgtm[js/unused-local-variable]
      type: 'doughnut',
      data: {
        labels: [
          'Sangat Puas',
          'Puas',
          'Tidak Puas'
        ],
        datasets: [
          {
            data: [sangatPuas, Puas, TidakPuas],
            backgroundColor: ['#00a65a', '#f39c12', '#FF0000']
          }
        ]
      },
      options: pieOptions
    })
  })
  var pieOptions = {
    legend: {
      display: false
    },
    maintainAspectRatio: false,
    responsive: true
  }



  // Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
  // eslint-disable-next-line no-unused-vars


  // Sales graph chart
  var salesGraphChartCanvas = $('#line-chart').get(0).getContext('2d')
  // $('#revenue-chart').get(0).getContext('2d');

  var salesGraphChartData = {
    labels: ['2011 Q1', '2011 Q2', '2011 Q3', '2011 Q4', '2012 Q1', '2012 Q2', '2012 Q3', '2012 Q4', '2013 Q1', '2013 Q2'],
    datasets: [
      {
        label: 'Digital Goods',
        fill: false,
        borderWidth: 2,
        lineTension: 0,
        spanGaps: true,
        borderColor: '#efefef',
        pointRadius: 3,
        pointHoverRadius: 7,
        pointColor: '#efefef',
        pointBackgroundColor: '#efefef',
        data: [2666, 2778, 4912, 3767, 6810, 5670, 4820, 15073, 10687, 8432]
      }
    ]
  }

  var salesGraphChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        ticks: {
          fontColor: '#efefef'
        },
        gridLines: {
          display: false,
          color: '#efefef',
          drawBorder: false
        }
      }],
      yAxes: [{
        ticks: {
          stepSize: 5000,
          fontColor: '#efefef'
        },
        gridLines: {
          display: true,
          color: '#efefef',
          drawBorder: false
        }
      }]
    }
  }

  // This will get the first returned node in the jQuery collection.
  // eslint-disable-next-line no-unused-vars
  var salesGraphChart = new Chart(salesGraphChartCanvas, { // lgtm[js/unused-local-variable]
    type: 'line',
    data: salesGraphChartData,
    options: salesGraphChartOptions
  })
})

//Bar chart 1

$.ajax({
  url: '/data/pendidikan/skm',
  dataType: 'json',
  method: 'get'
}).done(function (response) {
  var ctx = document.getElementById("myChart-skm").getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["SD", "SMP", "SMA", "DI/DII/DIII", "SI/DIV", "S2"],
      datasets: [{
        label: 'Jumlah Responden',
        data: [response.sd[0].total, response.smp[0].total, response.sma[0].total, response.d123[0].total, response.s1d4[0].total, response.s2[0].total],
        backgroundColor: [
          'rgba(255, 99, 132)',
          'rgba(54, 162, 235)',
          'rgba(255, 206, 86)',
          'rgba(75, 192, 192)',
          'rgba(153, 102, 255)',
          'rgba(255, 159, 64)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
})
$.ajax({
  url: '/data/survey/layanan',
  dataType: 'json',
  method: 'get'
}).done(function (response) {
  console.log(response.answer_1[0].answer_1)
  var ctx = document.getElementById("myChart-skm-layanan").getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Persyaratan", "Prosedur", "Waktu Pelayanan", "Biaya Tarif", "Produk Layanan", "Kompetensi Pelayanan", "Perilaku Pelaksana", "Pungutan Tidak Resmi", "Penanganan Pengaduan"],
      datasets: [{
        label: 'Jumlah Responden',
        data: [response.answer_1[0].answer_1, response.answer_2[0].answer_2, response.answer_3[0].answer_3, response.answer_4[0].answer_4, response.answer_5[0].answer_5, response.answer_6[0].answer_6, response.answer_7[0].answer_7, response.answer_8[0].answer_8, response.answer_9[0].answer_9],
        backgroundColor: [
          'rgba(255, 99, 132)',
          'rgba(54, 162, 235)',
          'rgba(255, 206, 86)',
          'rgba(75, 192, 192)',
          'rgba(153, 102, 255)',
          'rgba(255, 159, 64)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
})




// HArian

//bar chat 2
$.ajax({
  url: '/data/kunjungan/skm',
  dataType: 'json',
  method: 'get'
}).done(function (response) {
  var tanggalKunjungan = []
  var totalKunjungan = []
  $.each(response.data, function (index, value) {
    tanggalKunjungan.push(value.tanggal_kunjungan)
    totalKunjungan.push(value.total_kunjungan)
  })
  console.log(tanggalKunjungan)
  var ctxHarian = document.getElementById("myChartHarian-skm").getContext('2d');
  var myChartHarian = new Chart(ctxHarian, {
    type: "bar",
    data: {
      labels: tanggalKunjungan,
      datasets: [
        {
          label: "Total Kunjungan",
          data: totalKunjungan,
          backgroundColor: [
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
          ],
          borderColor: [
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235, 1)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
          ],
          borderWidth: 1,
        },
      ],
    },
    options: {
      scales: {
        yAxes: [
          {
            ticks: {
              beginAtZero: true,
            },
          },
        ],
      },
    },
  });
})


// Mingguan

//bar chat 2
$.ajax({
  url: '/data/kunjungan/mingguan/skm',
  dataType: 'json',
  method: 'get'
}).done(function (response) {
  var ctxMingguan = document.getElementById("myChartMingguan-skm").getContext('2d');
  var myChartMingguan = new Chart(ctxMingguan, {
    type: "bar",
    data: {
      labels: [
        "Minggu Ke 1",
        "Minggu Ke 2",
        "Minggu Ke 3",
        "Minggu Ke 4",
        "Minggu Ke 5",
      ],
      datasets: [
        {
          label: "Total Kunjungan",
          data: [response.minggu1[0].total, response.minggu2[0].total, response.minggu3[0].total, response.minggu4[0].total, response.minggu5[0].total],
          backgroundColor: [
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",

          ],
          borderColor: [
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",

          ],
          borderWidth: 1,
        },
      ],
    },
    options: {
      scales: {
        yAxes: [
          {
            ticks: {
              beginAtZero: true,
            },
          },
        ],
      },
    },
  });
})



// Mingguan

//bar chat 2
$.ajax({
  url: '/data/kunjungan/bulanan/skm',
  dataType: 'json',
  method: 'get'
}).done(function (response) {
  var ctxBulanan = document.getElementById("myChartBulanan-skm").getContext('2d');
  var myChartBulanan = new Chart(ctxBulanan, {
    type: "bar",
    data: {
      labels: ["January", "February", "Maret", "April", "Mei", "Juni", "July", "Agustus", "September", "Oktober", "November", "Desember"],
      datasets: [
        {
          label: "Total Kunjungan",
          data: [response.data[0].total_kunjungan[0].total, response.data[1].total_kunjungan[0].total, response.data[2].total_kunjungan[0].total, response.data[3].total_kunjungan[0].total, response.data[4].total_kunjungan[0].total,
          response.data[5].total_kunjungan[0].total, response.data[6].total_kunjungan[0].total, response.data[7].total_kunjungan[0].total, response.data[8].total_kunjungan[0].total, response.data[9].total_kunjungan[0].total, response.data[10].total_kunjungan[0].total,
          response.data[11].total_kunjungan[0].total],
          backgroundColor: [
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",

          ],
          borderColor: [
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",

          ],
          borderWidth: 1,
        },
      ],
    },
    options: {
      scales: {
        yAxes: [
          {
            ticks: {
              beginAtZero: true,
            },
          },
        ],
      },
    },
  });
})

// Layananan

//bar chat 2
$.ajax({
  url: '/data/kunjungan/layanan/skm',
  dataType: 'json',
  method: 'get'
}).done(function (response) {
  let Namalayanan = []
  let totalLayanan = []
  $.each(response.data, function (index, value) {
    Namalayanan.push(value.layanan)
    totalLayanan.push(value.total)
  })
  var ctxLayanan = document.getElementById("myChartLayanan-skm").getContext('2d');
  var myChartLayanan = new Chart(ctxLayanan, {
    type: "bar",
    data: {
      labels: Namalayanan,
      datasets: [
        {
          label: "Total Kunjungan",
          data: totalLayanan,
          backgroundColor: [
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
          ],
          borderColor: [
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
            "rgba(54, 162, 235)",
          ],
          borderWidth: 1,
        },
      ],
    },
    options: {
      scales: {
        yAxes: [
          {
            ticks: {
              beginAtZero: true,
            },
          },
        ],
      },
    },
  })
})
