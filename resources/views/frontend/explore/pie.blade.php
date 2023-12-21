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
            
    <div class="row" style="width: 1000px; height: 800px; margin: auto; text-align: center;">
        <div class="col-lg-12">
                <h3>Support in Action: Visualizing Income Sources and Program Expenses</h3>
                <p>
                    Income:

                    Donations: Contributions from individuals, corporations, foundations, and other entities.
                    Grants: Funding received from government bodies, private foundations, or other grant-making organizations.
                    Fundraising Events: Money raised through events, galas, charity auctions, and other fundraising activities.
                    Membership Fees: If applicable, fees paid by members for being part of the organization.
                    Investment Income: Interest, dividends, or capital gains from investments.
                    Expenditure:
                </p>
                <p>   
                    Program Services: The primary activities or services provided by the organization to fulfill its mission. This could include direct aid, education programs, healthcare services, etc.
                    Administrative Costs: Overhead expenses such as salaries of non-program staff, office supplies, utilities, and general administrative expenses.
                    Fundraising Costs: Expenses related to organizing and conducting fundraising activities, events, and campaigns.
                    Grants and Assistance: Money distributed as grants or aid to other organizations or individuals as part of the organization's mission.
                    Other Expenses: Miscellaneous expenses that don't fall directly into the above categories.
                    When creating the pie chart, you would assign a portion of the circle to each income source and expenditure category based on the percentage of the total income or expenditure it represents. The size of each slice should reflect the proportional contribution to the overall budget.
                </p>
                <p> 
                    For example, if fundraising events contribute 30% of the total income, the corresponding slice of the pie chart for "Fundraising Events" would be 30% of the entire circle. Similarly, if administrative costs constitute 15% of total expenditure, the "Administrative Costs" slice would be 15% of the pie chart.
                </p>
                <p>  
                    Ensure that the chart is labeled clearly and provides a visual representation of how the organization's finances are distributed. This can be a powerful tool for stakeholders, donors, and the public to understand the organization's financial priorities and sustainability.
                </p>  
          
            </div>
            <div style="width: 1000px; height:200px; margin: auto; text-align: center;">
                <p>Explore more details about our charity:</p>
                <a href="https://register-of-charities.charitycommission.gov.uk/charity-search/-/charity-details/4011615/charity-overview" class="btn btn-secondary">More details</a>
            </div>
        </div>
    </div>
@endsection

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

