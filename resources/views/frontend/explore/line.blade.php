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
        width: 1200,
        height: 400,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: true,
      };
       
        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

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
<section>
<div class="about-area pt-100 pb-70">
    <div class="container-fluid">
        <h2 style="text-align: center;">Financial Information</h2>
        <div style="width: 100%; display: flex; justify-content: space-around;">
            <div id="columnchart_material" style="width: 1200px; height: 500px;"></div>
        </div>
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
  