@extends('layouts.front.index_blade')
@push('custom-style')

 <style>
      table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
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
        

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

@endpush
@section('content')
<section>
    <div class="container-fluid">
        <h2 style="text-align: center;">Financial Information</h2>
        <div style="width: 100%; display: flex; justify-content: space-around;">
            <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
        </div>
    </div>
</section>
<section> 
    <div class="row" style="width: 1000px; height: 500px; margin: auto; text-align: center;">
      <table>
        <tr>
            <th>Year</th>
            <th>Total Donations (£)</th>
            <th>Program Impact</th>
        </tr>
        <tr>
            <td>2014</td>
            <td>150,000</td>
            <td>Community Outreach, Education</td>
        </tr>
        <tr>
            <td>2015</td>
            <td>200,000</td>
            <td>Healthcare Initiatives, Youth Development</td>
        </tr>
        <tr>
            <td>2016</td>
            <td>180,000</td>
            <td>Environmental Conservation, Arts & Culture</td>
        </tr>
        <tr>
          <td>2017</td>
          <td>150,000</td>
          <td>Community Outreach, Education</td>
      </tr>
      <tr>
          <td>2018</td>
          <td>200,000</td>
          <td>Healthcare Initiatives, Youth Development</td>
      </tr>
      <tr>
          <td>2019</td>
          <td>180,000</td>
          <td>Environmental Conservation, Arts & Culture</td>
      </tr>
      <tr>
        <td>2020</td>
        <td>180,000</td>
        <td>Environmental Conservation, Arts & Culture</td>
    </tr>
    <tr>
      <td>2021</td>
      <td>150,000</td>
      <td>Community Outreach, Education</td>
  </tr>
  <tr>
      <td>2022</td>
      <td>200,000</td>
      <td>Healthcare Initiatives, Youth Development</td>
  </tr>
  <tr>
      <td>2023</td>
      <td>180,000</td>
      <td>Environmental Conservation, Arts & Culture</td>
  </tr>
    </table>
    <p></p>
    <p></p>

</div>

    {{-- <div style="width: 1000px; height:200px; margin: auto; text-align: center;">
        <p>Explore more details about our charity:</p>
        <a href="https://register-of-charities.charitycommission.gov.uk/charity-search/-/charity-details/4011615/charity-overview" class="btn btn-secondary">More details</a>
    </div> --}}
</section>

@endsection
  