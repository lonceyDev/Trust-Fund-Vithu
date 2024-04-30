@extends('layouts.front.index_blade')
    @push('custom-style')
        <style>

                a {
                    color: rgb(58, 55, 55);
                    text-decoration: none;
                }

                a:hover {
                    color: darkcyan;
                }
                table {
                            border-collapse: collapse;
                            width: 100%;
                            margin-top: 20px;
                        }

                th, td {
                            border: 1px solid #ddd;
                            padding: 8px;
                            text-align: left;
                        }

                th {
                            background-color: #f2f2f2;
                        }

        </style>
    @endpush
@section('content')
    <div class="page-title-area title-bg-one">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>
                            Our Accountablty</h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <span>
                                    Our Accountablty Details</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-area pt-100 pb-70">
        <div class="container">
          <section>
                <div class="container-fluid" style="width: 1000px; height: 500px; margin: auto; text-align: center;">
                       <h2 style="text-align: center;">Financial Information</h2>
                    <div style="width: 100%; display: flex; justify-content: space-around;">
                      
                        <div style="text-align: center;">
                            {{-- <h4>Income</h4> --}}
                            {{-- <canvas id="pieChart1"></canvas> --}}
                            {{-- <div id="piechart1" style="width: 500px; height: 400px;"></div> --}}
                            <div id="curve_chart" style="width: 800px; height: 500px;"></div>
                        </div>
                         {{-- <div style="text-align: center;"> --}}
                            {{-- <h4>Expenses</h4>
                            <div id="piechart2" style="width: 500px; height: 400px;"></div> --}}
                            {{-- <canvas id="pieChart2"></canvas> --}}
                        {{-- </div>  --}}
                    </div>
                </div>
            </section>
     
        <div class="row" style="width: 1000px; height: 500px; margin: auto; text-align: center;">
            <div class="col-lg-12">
                <h1>Charity Records</h1>

                <table>
                    <tr>
                        <th>Income / Expenditure</th>
                        <th>30/06/2018</th>
                        <th>30/06/2019</th>
                        <th>30/06/2020</th>
                        <th>30/06/2021</th>
                        <th>30/06/2022</th>
                        <th>30/06/2023</th>

                </tr>
                    <tr>
                        <td>Total gross income</td>
                        <td>£26.94k</td>
                        <td>£39.20k</td>
                        <td>£19.87k</td>
                        <td>£24.11k</td>
                        <td>£15.81k </td>
                        <td>£18.81k </td>

                    </tr>
                    <tr>
                        <td>Total expenditure</td>
                        <td>£27.96k</td>
                        <td>£34.39k</td>
                        <td>£18.17k</td>
                        <td>£26.28k</td>
                        <td>£10.24k </td>
                        <td>£23.01k </td>
                        
                    </tr>
                    <tr>
                        <td>Income from government contracts</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>

                    </tr>
                    <tr>
                        <td>Income from government grants</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>

                    </tr>
                </table>
            <p></p>
            </div>
        </div>
    </div>
</div>
@push('custom-script')
 
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Date', 'Total Gross Income(£)', 'Total expenditure(£)','Income from government contracts(£)','Income from government grants(£)'],
      ['30/06/2018',  26.94 , 27.96, 0,0],
      ['30/06/2019',  39.20 , 34.39, 0,0],
      ['30/06/2020',  19.87 , 18.17, 0,0],
      ['30/06/2021',  24.11 , 26.28, 0,0],
      ['30/06/2022',  15.81 , 10.24, 0,0],
      ['30/06/2023',  18.81, 23.01, 0,0],
    ]);

    var options = {
      title: 'financial History',
      curveType: 'function',
      legend: { position: 'bottom' }
    };
    

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

    chart.draw(data, options);
  }
</script>
@endpush
@endsection