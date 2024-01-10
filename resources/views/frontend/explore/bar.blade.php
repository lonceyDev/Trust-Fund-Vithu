@extends('layouts.front.index_blade')
 @push('custom-script')
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

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
          chart: {
            title: 'Cash Flow',
            subtitle: 'Inflow, Outflow, and NetFlow: 2014-2023',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script> --}}


<script type="text/javascript">

  // google.charts.load('current', {'packages':['bar']});
  // google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    // Load the Visualization API with the callback function
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // Callback that creates and populates a data table,
    // instantiates the bar chart, passes in the data and
    // draws it.
    function drawChart() {
      // Replace 'YOUR_API_KEY' with your actual API key
      gapi.client.init({
        'apiKey': 'AIzaSyCDHWb_0ZzTvAHFhP5irKPa2qpAe6_KMfc',
        'discoveryDocs': ['https://docs.google.com/spreadsheets/d/1Uiw1kGzzqKRiy3WwC2j0sRB3IRIzmybL9Cj_NQRVhMs/edit#gid=0'],
      }).then(function() {
        // Call the Sheets API
        return gapi.client.sheets.spreadsheets.values.get({
          spreadsheetId: '1Uiw1kGzzqKRiy3WwC2j0sRB3IRIzmybL9Cj_NQRVhMs',
          range: 'demo', // Specify the sheet and range
        });
      }).then(function(response) {
        var dataTable = new google.visualization.DataTable();
        var data = response.result.values;

        // Assuming the first row contains headers
        var headers = data[0];
        for (var i = 1; i < data.length; i++) {
          var row = data[i];
          for (var j = 0; j < headers.length; j++) {
            dataTable.addColumn('string', headers[j]);
          }
          dataTable.addRows([row]);
        }

        var options = {
          title: 'Cash Flow',
          chartArea: {width: '50%'},
          hAxis: {
            title: 'X-Axis Label',
            minValue: 0
          },
          vAxis: {
            title: 'Y-Axis Label'
          }
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(dataTable, options);
      });
    }
  }
</script>

 @endpush
@section('content')
<section>
    <div class="container-fluid">
        
        <h2 style="text-align: center;">Cash Flow</h2>
        {{-- <div style="width: 1000px; height:500px; margin: auto; padding:3%; text-align: center;">
            <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
        </div> --}}
        <div style="width: 1000px; height:500px; margin: auto; padding:3%; text-align: center;">
            <div id="chart_div" style="width: 800px; height: 500px;"></div>
        </div>
    </div> 
</section>
<section> 
    <div class="row" style="width: 1000px; height: 1000px; margin: auto;padding:4%; text-align: center;">
        <h3>Transparency in Action: Non-Profit Organization Cash Flow Insights</h3>
        <p>
            Our Cash Flow Bar Chart provides a snapshot of our organization's financial performance over the past [2014-2023]. The chart is color-coded to help you easily distinguish between different categories such as revenue, expenses, and net cash flow
        </p>
        <p>
            Inflow (Blue Bars):

            Green bars represent the various sources contributing to our organization's income. This includes donations, grants, and other inflows that sustain our mission.
        </p>
        <p>
            Outflow (Red Bars):

             Red bars signify the expenses incurred by our organization. These encompass operational costs, program expenditures, and other necessary outflows essential for achieving our goals.
        </p>
        <p>
            Net Flow (Orange Line):

            The blue line on the chart illustrates the Net Cash Flow, offering a comprehensive view of our financial health. It is the result of subtracting total outflow from total inflow.       
        </p>
        <p>
            Your support directly influences our inflow and enables us to effectively manage our outflow. By contributing to Vithu Trust, you become an integral part of our mission.
        </p>
        <p>
            
        Certainly! Here's an updated version of the content with a focus on inflow, outflow, and net flow using a bar chart:



        Explore the allocation of outflows across different expense categories.
        How You Can Contribute
        Your support directly influences our inflow and enables us to effectively manage our outflow. By contributing to Vithu Trust, you become an integral part of our mission.


        Financial Transparency
        We value your trust and are open to any inquiries you might have regarding our financials. For more detailed information or specific questions, please contact our finance team .

        Thank you for being a vital supporter of Vithu Trust. Together, we continue to make a positive impact on [describe the mission and goals of your organization].
        </p>
    </div>
    <div style="width: 1000px; height:200px; margin: auto; text-align: center;">
        <p>Explore more details about our charity:</p>
        <a href="https://register-of-charities.charitycommission.gov.uk/charity-search/-/charity-details/4011615/charity-overview" class="btn btn-secondary">More details</a>
    </div>
</section>    
@endsection
