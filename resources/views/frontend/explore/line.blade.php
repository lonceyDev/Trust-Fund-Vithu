@extends('layouts.front.index_blade')
@push('custom-script')
    
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
@endpush
@section('content')
<section>
    <div class="container-fluid">
        <h2 style="text-align: center;">Financial Information</h2>
        <div style="width: 100%; display: flex; justify-content: space-around;">
           <div id="curve_chart" style="width: 1000px; height: 500px; margin: auto; text-align: center;"></div>
        </div>
    </div>
</section>
<section> 
    <div class="row" style="width: 1000px; height: 500px; margin: auto; text-align: center;">
        <h3>"Empower Change: Support Vithu Trust  with Your Annual Donation!"</h3>
        <p>
            Explore the tangible outcomes of previous donations and how they have transformed lives. Our [highlight specific success stories, testimonials, or achievements] are a testament to the generosity of supporters like you. Your annual donation ensures that these success stories continue and that more individuals can benefit from our programs and services.
        </p>
        <p>
            Your support is invaluable to us. On behalf of Vithu Trust and the communities we serve, we extend our heartfelt gratitude for your commitment to positive change. With your annual donation, we are one step closer to achieving our goals and making a lasting impact.
        </p>
    </div>
    <div style="width: 1000px; height:200px; margin: auto; text-align: center;">
        <p>Explore more details about our charity:</p>
        <a href="https://register-of-charities.charitycommission.gov.uk/charity-search/-/charity-details/4011615/charity-overview" class="btn btn-secondary">More details</a>
    </div>
</section>

@endsection
  