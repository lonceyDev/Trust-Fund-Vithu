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
         
            <section>

            <div class="row" style="width: 1200px; height: 1000px; margin: auto; text-align: center;">
                <h2>Vithu Trust Accountability </h2>
                <h4>Annual Report Summary - [2014-2023]</h4>
                <p>
                    At Vithu Trust, we believe in accountability, transparency, and the power of collective impact. Our Annual Report Summary for [2014-2023] provides a concise overview of our achievements, challenges, and financial stewardship.
                </p>
                <p>
                   <h6> Financial Overview:</h6>
                    Total Revenue: $125,457,125
                    Total Expenses: $124,758,961
                    Net Surplus: $12,345,678
                    
                    <h6>Funding Breakdown:</h6>
                   <p>Donations and Grants:</p> 
                    <p>
                         Percentage breakdown of revenue from individual donations, grants, and other sources.
                    </p>
                   <h6>Program Expenses:</h6> 
                    <p>
                        Allocation of funds to specific programs or initiatives.
                        Strategic Investments:
                        Infrastructure and Capacity Building:
                        Description of investments made to strengthen our organization's capabilities.
                        Community Impact
                        Beneficiary Stories:
                        Impactful Stories:
                    </p> 
                    <p> 
                        Personal narratives highlighting the positive impact of our work on individuals or communities.
                        Quantifiable Results:
                    </p>
                    <p>
                        Key metrics and statistics demonstrating the tangible outcomes of our efforts.
                        Acknowledgments
                        We extend our heartfelt gratitude to our supporters, volunteers, partners, and the communities we serve. Your dedication and collaboration make our mission possible.
                    </p>
                    <p>
                    Looking Ahead
                    Future Initiatives:
                    Upcoming Projects:
                    </p>
                    <p>
                     A glimpse into planned initiatives and projects for the upcoming year.
                    Collaborative Opportunities:

                    Invitations for continued collaboration and support from our stakeholders.
                    How You Can Get Involved
                    Your involvement is crucial to our success. Whether through volunteering, contributing, or spreading awareness, your support makes a difference.
                </p>
                    <h6>Contact Us</h6>
                    <p>For more details or inquiries, please contact us at.</p>

                    <p>Thank you for being an integral part of Vithu Trust. Together, we are making a lasting impact and building a better future.</p>
                </p>
            </div>
            <div style="width: 1000px; height:200px; margin: auto; text-align: center;">
                <p>Explore more details about our charity:</p>
                <a href="https://register-of-charities.charitycommission.gov.uk/charity-search/-/charity-details/4011615/charity-overview" class="btn btn-secondary">More details</a>
            </div>
        </div>
    </section>      
     <section>
        <div class="container-fluid" style="max-width: 1100px; margin: auto; text-align: center;">
            <h2 style="text-align: center;">Financial Information</h2>
            <p></p>
            <div style="display: flex; flex-wrap: wrap; justify-content: space-around; gap: 20px;">
                <div style="flex: 1; text-align: center;">
                    <a href="{{route('account.bar')}}">
                        <canvas id="barChart" style="width: 100%; height: 300px;"></canvas>
                    </a>
                    <p></p>
                    <a href="{{route('account.bar')}}">Non-Profit Organization Cash Flow Insights</a>
                </div>
                <div style="flex: 1; text-align: center;">
                    <a href="{{route('account.pie')}}">
                        <canvas id="pieChart" style="width: 100%; height: 300px;"></canvas>
                    </a>
                    <p></p>
                    <a href="{{route('account.pie')}}">Visualizing Income Sources and Program Expenses Revenue</a>
                </div>
                <div style="flex: 1; text-align: center;">
                    <a href="{{route('account.line')}}">
                        <canvas id="lineChart" style="width: 100%; height: 300px;"></canvas>
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
