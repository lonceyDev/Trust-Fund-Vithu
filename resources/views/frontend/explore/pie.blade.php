@extends('layouts.front.index_blade')
    @push('custom-style')
        <style>

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

        </style>
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
    <div class="about-area pt-100 pb-70">
        <div class="container">
          <section>
                <div class="container-fluid" style="width: 1000px; height: 500px; margin: auto; text-align: center;">
                       <h2 style="text-align: center;">Financial Information</h2>
                    <div style="width: 100%; display: flex; justify-content: space-around;">
                        <div style="text-align: center;">
                            <h4>Income</h4>
                            <canvas id="pieChart1"></canvas>
                        </div>
                        <div style="text-align: center;">
                            <h4>Expenses</h4>
                            <canvas id="pieChart2"></canvas>
                        </div>
                    </div>
                </div>
            </section>
     
        <div class="row" style="width: 1000px; height: 500px; margin: auto; text-align: center;">
            <div class="col-lg-12">
                <h1>Charity Records</h1>

                <table>
                    <tr>
                        <th>Income / Expenditure</th>
                        <th>30/06/2018</th>
                        <th>30/06/2019</th>
                        <th>30/06/2020</th>
                        <th>30/06/2021</th>
                        <th>30/06/2022</th>
                </tr>
                    <tr>
                        <td>Total gross income</td>
                        <td>£26.94k</td>
                        <td>£39.20k</td>
                        <td>£19.87k</td>
                        <td>£24.11k</td>
                        <td>£15.81k </td>
                    </tr>
                    <tr>
                        <td>Total expenditure</td>
                        <td>£27.96k</td>
                        <td>£34.39k</td>
                        <td>£18.17k</td>
                        <td>£26.28k</td>
                        <td>£10.24k </td>
                    </tr>
                    <tr>
                        <td>Income from government contracts</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Income from government grants</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                </table>
            <p></p>
            </div>
        </div>
    </div>
</div>
@push('custom-script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
var ctx = document.getElementById('pieChart1').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Foundation and Grants', 'Individual Conributions', 'Others'],
        datasets: [{
            data: [55,30,15],
            backgroundColor: [
                
                'rgba(54, 162, 235, 0.7)',
                'rgba(255, 206, 86, 0.7)',
                'rgba(255, 99, 132, 0.7)',
                'rgba(75, 192, 192, 0.7)',
                'rgba(153, 102, 255, 0.7)',
            ],
            borderColor: [
            
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
            ],
            borderWidth: 1
        }],
    },
});
var ctx = document.getElementById('pieChart2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Events','Administration','Fundraising'],
        datasets: [{
            data: [35, 45,20 ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.7)',
                'rgba(90, 192, 192, 0.7)',
                'rgba(153, 102, 255, 0.7)',
                'rgba(54, 162, 235, 0.7)',
                'rgba(255, 206, 86, 0.7)',
            
                
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
            ],
            borderWidth: 1
        }],
    },
});

</script>
@endpush
@endsection