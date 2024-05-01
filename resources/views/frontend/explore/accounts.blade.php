@extends('layouts.front.index_blade')
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
          <section style="max-width: 100%; padding: 20px; box-sizing: border-box; text-align: center;">
              
            <h1>Charity Information</h1>

            <h6>Activities</h6>
            <p>The worldwide relief of poverty, hardship and distress, among children and young people, especially the poor, suffering, homeless, handicapped and victims of war, irrespective of caste, creed or sect. The advancement of education among the beneficiaries, by such charitable means as the trustees shall from time to time determine.</p>
        
            <h6>Income and Expenditure</h6>
            <div class="financial-info">
                <p>Total income: £15,812</p>
                <p>Total expenditure: £10,243</p>
            </div>
        
            <h6>People</h6>
            <p>9 Trustee(s)</p>
            <p>15 Volunteer(s)</p>
            <p>No employees have total benefits over £60k for this charity</p>
        
            <h6>Fundraising</h6>
            <p>This charity raises funds from the public but does not work with professional fundraisers or commercial participators.</p>
        
            <h6>Trading</h6>
            <p>This charity does not have any trading subsidiaries.</p>
        
            <h6>Trustee Payments</h6>
            <p>This table shows the charity's record of submitting annual returns, accounts and trustees' annual report (TAR) for the last five financial periods..</p>
        
        <div>
        <div class="col-lg-12">
            <h1>Charity Records</h1>
            <p>No trustees receive any remuneration, payments or benefits from the charity.</p>

            <table>
                <tr>
                    <th>Title</th>
                    <th>Reporting year</th>
                    <th>Date received</th>
                    <th>Received</th>
                    {{-- <th>Download</th> --}}
               </tr>
                <tr>
                    <td>Annual return</td>
                    <td>30 June 2022</td>
                    <td>06 March 2023</td>
                    <td>On time</td>
                    {{-- <td><a href="#">download</a></td> --}}
                </tr>
                <tr>
                    <td>Accounts and TAR</td>
                    <td>30 June 2022</td>
                    <td>Not Required</td>
                    <td>-</td>
                    {{-- <td>-</td> --}}
                </tr>
                <tr>
                    <td>Annual return</td>
                    <td>30 June 2021</td>
                    <td>09 March 2022</td>
                    <td>On time</td>
                    {{-- <td><a href="#">download</a></td> --}}
                </tr>
                <tr>
                    <td>Accounts and TAR</td>
                    <td>30 June 2021</td>
                    <td>Not Required</td>
                    <td>-</td>
                    {{-- <td>-</td> --}}
                </tr>
                <tr>
                    <td>Annual return</td>
                    <td>30 June 2021</td>
                    <td>20 July 2020</td>
                    <td>On time</td>
                    {{-- <td><a href="#">download</a></td> --}}
                </tr>
                <tr>
                    <td>Accounts and TAR</td>
                    <td>30 June 2021</td>
                    <td>Not Required</td>
                    <td>-</td>
                    {{-- <td>-</td> --}}
                </tr>
                <tr>
                    <td>Annual return</td>
                    <td>30 June 2020</td>
                    <td>20 July 2020</td>
                    <td>On time</td>
                    {{-- <td><a href="#">download</a></td> --}}
                </tr>
                <tr>
                    <td>Accounts and TAR</td>
                    <td>30 June 2020</td>
                    <td>Not Required</td>
                    <td>-</td>
                    {{-- <td>-</td> --}}
                </tr>
                <tr>
                    <td>Annual return</td>
                    <td>30 June 2019</td>
                    <td>29 December 2019</td>
                    <td>On time</td>
                    {{-- <td><a href="#">download</a></td> --}}
                </tr>
                <tr>
                    <td>Accounts and TAR</td>
                    <td>30 June 2019</td>
                    <td>29 December 2019</td>
                    <td>-</td>
                    {{-- <td>-</td> --}}
                </tr>
                <tr>
                    <td>Annual return</td>
                    <td>30 June 2018</td>
                    <td>29 January 2019</td>
                    <td>On time</td>
                    {{-- <td><a href="#">download</a></td> --}}
                </tr>
                <tr>
                    <td>Accounts and TAR</td>
                    <td>30 June 2018</td>
                    <td>29 January 2019</td>
                    <td>-</td>
                    {{-- <td>-</td> --}}
                </tr>
             
            </table>
        </div>
    </div>
      <p></p> 
      <p></p> 

    <div>         
    <p>Explore more details about our charity:</p>
     <a href="https://register-of-charities.charitycommission.gov.uk/charity-search/-/charity-details/4011615/charity-overview" class="btn btn-secondary" target="_blank">More details</a>
     <p></p>
    </div>
  </div>
</section> 
     
    <section style="max-width: 100%; padding: 20px; box-sizing: border-box; text-align: center;">
        <div class="container-fluid" style="max-width: 1300px; margin: auto; text-align: center;">
            <h2 style="text-align: center;">Financial Information</h2>
            <p></p>
            <p></p>
    
            <div>
                {{-- <div style="flex: 1; text-align: center;">
                    <a href="{{route('accounts.bar')}}">
                        <div id="curve_chart" style="width: 400px; height: 220px; margin: auto; text-align: center;"></div>
                    </a>
                    <div>
                        <p>Explore more details about our charity:</p>
                        <a href="{{route('accounts.bar')}}" class="btn btn-secondary">More details</a>
                    </div>
                </div> --}}

                <div style="width: 500px; height: 300px; margin: auto;">
                    <a href="{{route('accounts.pie')}}">
                        <div style="text-align: center;">
                           <div id="curve_chart"></div>
                        </div>
                    </a>
                    <div>
                        <p>Explore more details about our charity:</p>
                        <a href="{{route('accounts.pie')}}" class="btn btn-secondary">More details</a>
                    </div>
                </div>
    
                {{-- <div style="flex: 1; text-align: center;">
                    <a href="{{route('accounts.line')}}">
                        <div id="columnchart_material2" style="width: 400px; height: 200px; margin: auto; text-align: center;"></div>
                    </a>
                    <p></p>
                    <div>
                        <p>Explore more details about our charity:</p>
                        <a href="{{route('accounts.line')}}" class="btn btn-secondary">More details</a>
                    </div>
                    <p></p>
                </div> --}}
            </div>
        </div>
    </section>
    
    </div>


@endsection

@push('custom-script')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
{{-- <script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Year', 'Inflow', 'Outflow'],
      ['2004',  1000,      400],
      ['2005',  1170,      460],
      ['2006',  660,       1120],
      ['2007',  1030,      540],
      ['2008',  1000,      400],
      ['2009',  1170,      460],
      ['2010',  660,       1120],
      ['2011',  1030,      540],
      ['2012',  1000,      400],
      ['2013',  1170,      460],
      ['2014',  660,       1120],
      ['2015',  1030,      540],
      ['2016',  1000,      400],
      ['2017',  1170,      460],
      ['2018',  660,       1120],
      ['2019',  1030,      540],
      ['2020',  1000,      400],
      ['2021',  1170,      460],
      ['2022',  660,       1120],
      ['2023',  1030,      540],
      ['2024',  1030,      540]

    ]);

    var options = {
      title: 'Non-Profit Organization Cash Flow Statement',
      subtitle: '2004-2023',
      curveType: 'function',
      legend: { position: 'bottom' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

    chart.draw(data, options);
  }
</script> --}}

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
{{-- 
  <script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
     var data = google.visualization.arrayToDataTable([
      ['Donation', 'Education', 'Youth Development', 'Arts & Culture', 'Healthcare',
        { role: 'annotation' } ],
       ['2004', 10, 24, 20, 32, ''],
      ['2005', 16, 22, 23, 30, ''],
      ['2006', 28, 19, 29, 30, ''],
      ['2007', 10, 24, 20, 32, ''],
      ['2008', 16, 22, 23, 30, ''],
      ['2009', 28, 19, 29, 30, ''],
      ['2010', 10, 24, 20, 32, ''],
      ['2011', 16, 22, 23, 30, ''],
      ['2012', 28, 19, 29, 30, ''],
      ['2013', 10, 24, 20, 32, ''],
      ['2014', 16, 22, 23, 30, ''],
      ['2015', 28, 19, 29, 30, ''],
      ['2016', 10, 24, 20, 32, ''],
      ['2017', 16, 22, 23, 30, ''],
      ['2018', 28, 19, 29, 30, ''],
      ['2019', 10, 24, 20, 32, ''],
      ['2020', 16, 22, 23, 30, ''],
      ['2021', 28, 19, 29, 30, ''],
      ['2022', 10, 24, 20, 32, ''],
      ['2023', 16, 22, 23, 30, '']
    ]);

    var options = {
      title: 'Non-Profit Organization Donation Details',
      subtitle: '2004-2023',
    //   width: 1200,
    //   height: 400,
      legend: { position: 'top', maxLines: 3 },
      bar: { groupWidth: '75%' },
      isStacked: true,
    };
     
      var chart = new google.charts.Bar(document.getElementById('columnchart_material2'));

      chart.draw(data, google.charts.Bar.convertOptions(options));
    }
  </script> --}}

@endpush
        @push('custom-style')

        <style>

            .chart-container {
                max-width: 100%;
                padding: 20px;
                box-sizing: border-box;
                text-align: center;
                overflow: auto; 
            }

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
            h6,h2,h1 {
                color: rgb(46, 45, 45);
            }

        </style>


        @endpush
