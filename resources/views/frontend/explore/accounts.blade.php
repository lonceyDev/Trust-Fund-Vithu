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
                @foreach($accounts as $account)
                    <h2>{{ $account->title }}</h2>
                    <p style="text-align: center;">{!! $account->description !!}<br></p>
                @endforeach
            <div >
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
                        <canvas id="barChart" style="width: 100%; height: 400px;"></canvas>
                    </a>
                    <p></p>
                     <p></p>

                    <a href="{{route('account.bar')}}">Non-Profit Organization Cash Flow Insights</a>
                </div>
                <div style="flex: 1; text-align: center;">
                    <a href="{{route('account.pie')}}">
                        <canvas id="pieChart" style="width: 200%; height: 400px;"></canvas>
                    </a>
                    <p></p>
                     <p></p>
    
                    <a href="{{route('account.pie')}}">Visualizing Income Sources and Program Expenses Revenue</a>
                </div>
                <div style="flex: 1; text-align: center;">
                    <a href="{{route('account.line')}}">
                        <canvas id="lineChart" style="width: 100%; height: 400px;"></canvas>
                    </a>
                    <p></p>
                    <a href="{{route('account.line')}}">Explore the tangible outcomes of previous donations</a>
                </div>
            </div>
        </div>
      
        
        </section>
    </div>


@endsection

@push('custom-script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    var ctx = document.getElementById('barChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: @json($data['labels']),
            datasets: [{
                label: 'Data',
                data: @json($data['data']),
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>



<script>
    var ctx = document.getElementById('lineChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: @json($line['labels']),
            datasets: [{
                label: 'Data',
                data: @json($line['data']),
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                fill: false
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<script>
    var ctx = document.getElementById('pieChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: @json($pie['labels']),
            datasets: [{
                data: @json($pie['data']),
                backgroundColor: [
                    'rgba(255, 99, 132, 0.7)',
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 206, 86, 0.7)',
                    'rgba(75, 192, 192, 0.7)',
                    'rgba(153, 102, 255, 0.7)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                ],
                borderWidth: 1
            
            }]
        },
    });
    </script>

@endpush
@push('custom-style')
<style>
a {
        color: rgb(58, 55, 55);
        text-decoration: none; 
    }

    a:hover {
        color: darkcyan;
    }
</style>
@endpush
