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
                    <th>Download</th>
               </tr>
                <tr>
                    <td>Annual return</td>
                    <td>30 June 2022</td>
                    <td>06 March 2023</td>
                    <td>On time</td>
                    <td><a href="#">download</a></td>
                </tr>
                <tr>
                    <td>Accounts and TAR</td>
                    <td>30 June 2022</td>
                    <td>Not Required</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Annual return</td>
                    <td>30 June 2021</td>
                    <td>09 March 2022</td>
                    <td>On time</td>
                    <td><a href="#">download</a></td>
                </tr>
                <tr>
                    <td>Accounts and TAR</td>
                    <td>30 June 2021</td>
                    <td>Not Required</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Annual return</td>
                    <td>30 June 2021</td>
                    <td>20 July 2020</td>
                    <td>On time</td>
                    <td><a href="#">download</a></td>
                </tr>
                <tr>
                    <td>Accounts and TAR</td>
                    <td>30 June 2021</td>
                    <td>Not Required</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Annual return</td>
                    <td>30 June 2020</td>
                    <td>20 July 2020</td>
                    <td>On time</td>
                    <td><a href="#">download</a></td>
                </tr>
                <tr>
                    <td>Accounts and TAR</td>
                    <td>30 June 2020</td>
                    <td>Not Required</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Annual return</td>
                    <td>30 June 2019</td>
                    <td>29 December 2019</td>
                    <td>On time</td>
                    <td><a href="#">download</a></td>
                </tr>
                <tr>
                    <td>Accounts and TAR</td>
                    <td>30 June 2019</td>
                    <td>29 December 2019</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Annual return</td>
                    <td>30 June 2018</td>
                    <td>29 January 2019</td>
                    <td>On time</td>
                    <td><a href="#">download</a></td>
                </tr>
                <tr>
                    <td>Accounts and TAR</td>
                    <td>30 June 2018</td>
                    <td>29 January 2019</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
             
            </table>
        </div>
    </div>
      <p></p> 
      <p></p> 

    <div>         
    <p>Explore more details about our charity:</p>
     <a href="https://register-of-charities.charitycommission.gov.uk/charity-search/-/charity-details/4011615/charity-overview" class="btn btn-secondary">More details</a>
     <p></p>
    </div>
  </div>
</section> 
     
    <section style="max-width: 100%; padding: 20px; box-sizing: border-box; text-align: center;">
        <div class="container-fluid" style="max-width: 1300px; margin: auto; text-align: center;">
            <h2 style="text-align: center;">Financial Information</h2>
            <p></p>
            <p></p>
    
            <div style="display: flex; flex-wrap: wrap; justify-content: space-around; gap: 20px;">
                <div style="flex: 1; text-align: center;">
                    <a href="{{route('account.bar')}}">
                        <div id="curve_chart" style="width: 400px; height: 220px; margin: auto; text-align: center;"></div>
                    </a>
                    <div>
                        <p>Explore more details about our charity:</p>
                        <a href="{{route('account.bar')}}" class="btn btn-secondary">More details</a>
                    </div>
                </div>

                <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
                    <a href="{{route('account.pie')}}">
                        <div style="text-align: center;">
                           <div id="columnchart_material" style="width: 400px; height: 200px;"></div>
                        </div>
                    </a>
                    <div>
                        <p>Explore more details about our charity:</p>
                        <a href="{{route('account.pie')}}" class="btn btn-secondary">More details</a>
                    </div>
                </div>
    
                <div style="flex: 1; text-align: center;">
                    <a href="{{route('account.line')}}">
                        <div id="columnchart_material2" style="width: 400px; height: 200px; margin: auto; text-align: center;"></div>
                    </a>
                    <p></p>
                    <div>
                        <p>Explore more details about our charity:</p>
                        <a href="{{route('account.line')}}" class="btn btn-secondary">More details</a>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
    </section>
    
    </div>


@endsection

@push('custom-script')
{{-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> --}}

{{-- <script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Year', 'Inflow', 'Outflow', 'NetFlow'],
        ['2014', 1000, 400, 200],
        ['2015', 1170, 460, 250],
        ['2016', 660, 1120, 300],
        ['2018', 1030, 540, 350],
        ['2019', 1030, 540, 350],
        ['2020', 1030, 540, 350],
        ['2021', 1030, 540, 350],
        ['2022', 1030, 540, 350],
        ['2023', 1030, 540, 350],
      ]);

      var options = {
        title: 'Cash Flow',
        curveType: 'function',
        legend: { position: 'bottom' },
        fontName: 'Britannic Bold', // Set the desired font family
        fontSize: 12,      // Set the desired font size
      };

      var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

      chart.draw(data, google.charts.Bar.convertOptions(options));
    }
  </script>
 <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
  
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Year', 'Donation', 'program impact'],
            ['2014',  1000,      400],
            ['2015',  1170,      460],
            ['2016',  660,       1120],
            ['2017',  1030,      540],
            ['2018',  1000,      400],
            ['2019',  1170,      460],
            ['2020',  660,       1120],
            ['2021',  1030,      540],
            ['2022',  1000,      400],
            ['2023',  1170,      460],
            ['2024',  660,       1120],
            ['2025',  1030,      540]
          ]);
  
          var options = {
            title: 'Annual Donation',
            curveType: 'function',
            legend: { position: 'bottom' }
          };
  
          var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
  
          chart.draw(data, options);
        }
</script> --}}

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
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
      curveType: 'function',
      legend: { position: 'bottom' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

    chart.draw(data, options);
  }
</script>
{{-- <script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Category', 'Amount'],
            ['Income', 8000], // Replace 8000 with your actual income value
            ['Expenses', 5000] // Replace 5000 with your actual expenses value
        ]);

        var options = {
            title: 'Income vs Expenses',
            is3D: true, // Add 3D effect for better visualization
        };

        var chart = new google.visualization.PieChart(document.getElementById('pieChart'));
        chart.draw(data, options);
    }
</script> --}}
<script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Year', 'Income', 'Expenses'],
        ['2004', 102, 400],
        ['2005', 1170, 460],
        ['2006', 660, 1120],
        ['2007', 1030, 540],
        ['2008', 1000, 400],
        ['2009', 1170, 460],
        ['2010', 660, 1120],
        ['2020', 1030, 540],
        ['2021', 1000, 400],
        ['2022', 1170, 460],
        ['2023', 660, 1120],
        ['2024', 1030, 540],
      ]);

      var options = {
        chart: {
          title: 'Income and Expenses Report',
          subtitle: '2004-2024',
        }
      };

      var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

      chart.draw(data, google.charts.Bar.convertOptions(options));
    }
  </script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
          ['Year', 'Donation'],
          ['2004',  1000],
          ['2005',  1170],
          ['2006',  660],
          ['2007',  1030],
          ['2008',  1000],
          ['2009',  1170],
          ['2010',  660],
          ['2011',  1030],
          ['2012',  1000],
          ['2013',  1170],
          ['2014',  1000],
          ['2015',  1170],
          ['2016',  660],
          ['2017',  1030],
          ['2018',  1000],
          ['2019',  1170],
          ['2020',  660],
          ['2021',  1030],
          ['2022',  1000],
          ['2023',  1170]
      
      ]);
      


      var options = {
        chart: {
          title: 'Company Performance',
          subtitle: 'Sales, Expenses, and Profit: 2004-2023',
        }
      };
      

      var chart = new google.charts.Bar(document.getElementById('columnchart_material2'));

      chart.draw(data, google.charts.Bar.convertOptions(options));
    }
  </script>

@endpush
@push('custom-style')

 <style>

 .chart-container {
    max-width: 100%;
    padding: 20px;
    box-sizing: border-box;
    text-align: center;
    overflow: auto; /* Add overflow property to enable scrolling if needed */
}

/* Additional styling for anchor tags */
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
