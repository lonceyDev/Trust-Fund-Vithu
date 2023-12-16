<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel 10 How To Integrate Line Chart Using HighChart - ONLINE WEB TUTOR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h4 style="text-align: center;">Laravel 10 How To Integrate Line Chart Using HighChart - Online Web Tutor</h4>
        <div class="panel panel-primary">
          <div class="panel-heading">Laravel 10 How To Integrate Line Chart Using HighChart</div>
          <div class="panel-body">
              <div id="line-chart"></div>
          </div>
        </div>
      </div>
      
      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://code.highcharts.com/modules/series-label.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script>
      <script src="https://code.highcharts.com/modules/export-data.js"></script>
      <script src="https://code.highcharts.com/modules/accessibility.js"></script>
      
      <script>
        $(function(){
          Highcharts.chart('line-chart', {
      
              title: {
                  text: 'Students Term Wise Marks'
              },
      
              yAxis: {
                  title: {
                      text: 'Number of Marks'
                  }
              },
      
              xAxis: {
              categories: <?= $terms ?>
          },
      
              legend: {
                  layout: 'vertical',
                  align: 'right',
                  verticalAlign: 'middle'
              },
      
              series: <?= $data ?>,
      
              responsive: {
                  rules: [{
                      condition: {
                          maxWidth: 500
                      },
                      chartOptions: {
                          legend: {
                              layout: 'horizontal',
                              align: 'center',
                              verticalAlign: 'bottom'
                          }
                      }
                  }]
              }
      
              });
        });
      </script>
</body>

</html>