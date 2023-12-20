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
            {{-- <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 mx-auto">
                    <img src="{{ asset('assets/front/img/sign/Teaching-in-Braille.jpg') }}" alt=" Teaching in Braille">
                </div>
            </div> --}}
            <section class="gallery-area two pt-1 pb-2">
                <div class="container-fluid">
                    <div class="gallery-slider-1 owl-theme owl-carousel">


                        <div class="gallery-item">
                            <div style="width: 80%; margin: auto;">
                                <canvas id="barChart"></canvas>
                            </div>
                        
                        </div>

                        <div class="gallery-item">
                            <div style="width: 80%; margin: auto;">
                                <canvas id="pieChart"></canvas>
                            </div>
                        </div>

                        <div class="gallery-item">
                            <div style="width: 80%; margin: auto;">
                                <canvas id="scatterChart"></canvas>
                            </div>
                        
                        </div>
                        
                        {{-- <div class="gallery-item">
                             <div style="width: 80%; margin: auto;">
                                <canvas id="lineChart"></canvas>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </section>

            <div class="row">
                <h3>Charity Accountability Standards</h3>
                <p>
                    very week on the news you read or hear about another person having their identity stolen. This can be discouraging to sites that depend upon consumer trust: namely, online donations. With privacy policies in place, it reassures your donors that you will protect any information they give you through your website’s forms and offline forms.
                </p>
            </div>
            <div>
                <a href="https://register-of-charities.charitycommission.gov.uk/charity-search/-/charity-details/4011615/charity-overview" class="btn btn-secondary">More Report</a>
            </div>
        </div>
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
<script>
    var ctx = document.getElementById('scatterChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'scatter',
        data: {
            labels: @json($scatter['labels']),
            datasets: [{
                label: 'Scatter Chart',
                data: @json($scatter['data']),
                backgroundColor: 'rgba(75, 192, 192, 0.7)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                x: {
                    type: 'linear',
                    position: 'bottom'
                },
                y: {
                    type: 'linear',
                    position: 'left'
                }
            }
        }
    });
</script>
    <script>
        // Gallery Slider JS
        $('.gallery-slider-1').owlCarousel({
            items: 1,
            loop: false,
            margin: 20,
            nav: false,
            dots: false,
            smartSpeed: 1000,
            autoplay: false,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 3,
                },
                1000: {
                    items: 3
                }
            }
        });
    </script>
@endpush

@push('custom-style')
    <style>
        .owl-carousel .owl-item img {
            min-height: 180px;
        }
    </style>
@endpush
