@extends('layouts.front.index_blade')
@push('custom-style')

 <style>
      table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        td {
            border: 1px solid #ebe7e7;
            text-align: justify;
            padding: 8px;
        }
        th {
            background-color: #938e8e;
            color: #ebe7e7;
            border: 1px solid #ebe7e7;
            text-align: left;
            padding: 8px;
        }
      a {
            color: rgb(58, 55, 55);
            text-decoration: none;
        }

    a:hover {
             color: darkcyan;
        }
   </style>
@endpush
 @push('custom-script')

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
 @endpush
@section('content')
<section>
    <div class="container-fluid">
        
        <h2 style="text-align: center;">Cash Flow</h2>
        <div style="width: 1200px; height:500px; margin: auto; padding:3%; text-align: center;">
            <div id="curve_chart" style="width: 1200px; height: 500px"></div>
        </div>
    </div> 
</section>
<section> 
    <div class="row" style="width: 1000px; height: 1200px; margin: auto;padding:4%; text-align: center;">
      <h2>Non-Profit Organization Cash Flow Statement (2024)</h2>

    <table>
        <tr>
            <th>Cash Flow</th>
            <th>Inflows (£)</th>
            <th>Outflows (£)</th>
        </tr>
        <tr>
            <td style="background-color: #d6d3d3;">Operating Activities</td>
            <td></td>
            <td></td>
        </tr>
        <!-- Add more rows as needed -->
        <tr>
            <td>Donations and Grants</td>
            <td>100,000 </td>
            <td></td>
        </tr>
        <!-- Add more rows as needed -->
        <tr>
            <td>Program Revenue </td>
            <td>50,000</td>
            <td></td>
        </tr>
        <tr>
            <td>Other Income </td>
            <td>5000</td>
            <td></td>
        </tr>
        <!-- Add more rows as needed -->
        <tr>
            <td>Total Operating Inflows</td>
            <td> 155,000</td>
            <td></td>
        </tr>
        <!-- Add more rows as needed -->
        <tr>
            <td> Salaries and Wages </td>
            <td></td>
            <td> -80,000 </td>
        </tr>
        <tr>
            <td>Program Expenses </td>
            <td></td>
            <td>-40,000</td>
        </tr>
        <tr>
            <td>Administrative Expenses </td>
            <td></td>
            <td>-15,000 </td>
        </tr>
        <tr>
            <td> Rent and Utilities  </td>
            <td></td>
            <td>-10,000</td>
        </tr>
        <tr>
            <td> Other Operating Expenses </td>
            <td></td>
            <td>-5,000</td>
        </tr>
      <tr>
            <td>Total Operating Outflows </td>
            <td></td>
            <td>-150,000 </td>
        </tr>
        <tr>
            <td>Net Operating Cash Flow</td>
            <td>25,000</td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #d6d3d3;"> Investing Activities</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td> Purchase of Equipment</td>
            <td></td>
            <td>-10,000</td>
        </tr>
        <tr>
            <td>Investment Incomee</td>
            <td> 2,000</td>
            <td></td>
        </tr>
        <tr>
            <td>Net Investing Cash Flow</td>
            <td> </td>
            <td> -8,000</td>
        </tr>
        <tr>
            <td style="background-color: #d6d3d3;">  Financing Activities</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td> Debt Repayment  </td>
            <td></td>
            <td>-5,000</td>
        </tr>
       <tr>
            <td> Net Financing Cash Flow</td>
            <td> </td>
            <td> -5000</td>
        </tr>
        <tr>
            <td>  Net Cash Flow </td>
            <td>12,000</td>
            <td></td>
        </tr>
        <tr>
            <td>  Beginning Cash Balance </td>
            <td> 30,000  </td>
            <td></td>
        </tr>
       <tr>
            <td style="background-color: #d5cdcd">  Ending Cash Balance </td>
            <td style="background-color: #d5cdcd">   42,000 </td>
            <td style="background-color: #d5cdcd"> </td>
        </tr>
    </table>
    <p></p>
    </div>
    {{-- <div style="width: 1000px; height:200px; margin: auto; text-align: center;">
        <p>Explore more details about our charity:</p>
        <a href="https://register-of-charities.charitycommission.gov.uk/charity-search/-/charity-details/4011615/charity-overview" class="btn btn-secondary">More details</a>
    </div> --}}
</section>    
@endsection
