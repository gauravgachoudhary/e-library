google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Category', 'Admin', 'User'],
          ['Fiction', 100, 40],
          ['Non-fiction', 170, 60],
          ['Acadmic', 60, 11]
        ]);

        var options = {
          chart: {
            title: 'E-LIBRARY STATISTIC',
            subtitle: 'BOOK UPLOAD BY....., ADMIN, USER',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
        }