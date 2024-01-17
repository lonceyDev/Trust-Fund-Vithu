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
              
                    <h2>Activities - how the charity spends its money</h2>
                    <p style="text-align: center;">The WORLWIDE relief of poverty, hardship and distress, among children and young people, especially the poor, suffering, homeless, handicapped and victims of war, irrespective of caste, creed or sect ; The advancement of education among the beneficiaries, by such charitable means as the trustees shall from time to time determine<br></p>
                    <h3>Income and expenditure</h3>
                    <p>Data for financial year ending 30 June 2022<br></p>
                    <ul>
                        <li>Total income: £15,812</li>
                        <li>Total expenditure: £10,243</li>
                    </ul>
                    <h4>People</h4>
                    <ul>
                        <li>9 Trustee(s)</li>
                        <li>15 Volunteer(s)</li>
                    </ul>
        <div>
                <p>Explore more details about our charity:</p>
                <a href="https://register-of-charities.charitycommission.gov.uk/charity-search/-/charity-details/4011615/charity-overview" class="btn btn-secondary">More details</a>
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
                        <div id="columnchart_material" style="width: 400px; height: 220px; margin: auto; text-align: center;"></div>
                    </a>
                    <div>
                        <p>Explore more details about our charity:</p>
                        <a href="{{route('account.bar')}}" class="btn btn-secondary">More details</a>
                    </div>
                </div>

                <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
                    <a href="{{route('account.pie')}}">
                        <div style="text-align: center;">
                           <div id="pieChart" style="width: 400px; height: 200px;"></div>
                        </div>
                    </a>
                    <div>
                        <p>Explore more details about our charity:</p>
                        <a href="{{route('account.pie')}}" class="btn btn-secondary">More details</a>
                    </div>
                </div>
    
                <div style="flex: 1; text-align: center;">
                    <a href="{{route('account.line')}}">
                        <div id="curve_chart" style="width: 400px; height: 200px; margin: auto; text-align: center;"></div>
                    </a>
                    <p></p>
                    <div>
                        <p>Explore more details about our charity:</p>
                        <a href="{{route('account.line')}}" class="btn btn-secondary">More details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    </div>


@endsection

@push('custom-script')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
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
            legend: { position: 'bottom' }
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
</script>

<script>
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
</script>
>

@endpush
@push('custom-style')
<style>
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

</style>


@endpush
