@extends('layouts.front.index_blade')

@section('content')
    <div class="page-title-area title-bg-one">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>Accountablity</h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <span>Accountablity</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <h3 style="text-align: left;"></h3>
            <div class="panel">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <div id="pie-chart"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <h3 style="text-align: left;"></h3>
            <div class="panel">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <div id="bar-chart"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <h3 style="text-align: left;"></h3>
            <div class="panel">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <div id="line-chart"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('custom-script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script>

 $(function() {

            Highcharts.chart('pie-chart', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Browser Usage World wide'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                        }
                    }
                },
                series: [{
                    name: 'Browsers',
                    colorByPoint: true,
                    data: <?= $data ?>
                }]
            });
            //bar chart
            Highcharts.chart('bar-chart', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Student Term Wise Marks'
                },
                xAxis: {
                    categories: <?= $terms?>,
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Marks'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key} Marks</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y}</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: <?= $data ?>
            });
            //line

            Highcharts.chart('line-chart', {

                title: {
                    text: 'Students Term Wise Marks'
                },

                yAxis: {
                    title: {
                        text: 'Number of Marks'
                    }
                },

                xAxis: {
                   categories: <?= $terms ?>
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle'
                },

                series: {{ $data }},

                responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom'
                            }
                        }
                    }]
                }

            });
        });
    </script>
@endpush
