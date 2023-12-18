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

                        {{-- <div class="gallery-item">
                            <div style="width: 80%; margin: auto;">
                                <canvas id="scatterChart"></canvas>
                            </div>
                        
                        </div> --}}
                        
                        <div class="gallery-item">
                             <div style="width: 80%; margin: auto;">
                                <canvas id="lineChart"></canvas>
                            </div>
                        
                        </div>



                    </div>
                </div>
            </section>

            <div class="row">
                <h3>Charity Accountability Standards</h3>
                <p>
                    Recognizing and adopting these practices not only benefits charitable nonprofits;- but also donors, and ultimately the individuals and communities that charitable nonprofits serve.

                    We encourage you to become familiar with our recommended 10 standards of charity accountability:-
                    
                    Adopting the standards allows your organization to be trusted by the donors, therefore attracting a lot of  benefits for your organization.
                </p>
                <p>
<b> Standard 1 – Registration and address</b>                   

A nonprofit must be registered by one of the different bodies in their country and should produce a certificate of registration upon request.  It must have a physical address (No P.O. Boxes). This is the address where they carry their charitable activities and must be available during normal business hours.

<b>Standard 2 – Constitution and effectiveness Issues</b>

Every charitable organization should have a constitution in Place. The constitution of a nonprofit organization specifies how the organization operates. A typical constitution addresses all aspects of the organization, purpose, functions, persons in charge and members. Normally you have to write it before you create your nonprofit organization, specify how the constitution will come into force, and detail how the organization can change the constitution if necessary. In addition to a constitution, a nonprofit organization may have bylaws and other rules governing specific aspects of the operation.

 

<b>Standard 3: Mission and Vision Statement</b>

A mission statement is a statement that is used to communicate the purpose of an organization. Mission statements are normally short and simple statements which outline what the organization’s purpose is and are related to the specific sector an organization operates in.

 

<b>Standard 4: Charity Activities </b>

Every organization should have a document that outlines the following;

(a) A summary of the past year’s program service accomplishments,

(b) A summary of long term and short term needs of the organization

 

<b>Standard 5 – Bank Accounts</b>

Every organization shall open a bank account under the name of the organization. All donations and fundraising proceeds should be directed to the nonprofit bank account and not to the individual accounts numbers.

 

 <b>Standard 6 – Governance</b>

Every organization shall be governed by a responsible board of not less than five individuals, a majority of whom shall be independent, who shall meet at least semiannually to establish policy and review its accomplishments.

 

<b>Standard 7-  Leadership and Operational Management </b>

The charity should have in place a staff who runs as an executive responsible for the day-to-day management and operations of the organization. The executive should be committed to the mission of the organization and have the skills necessary to manage the paid and volunteer talent, and financial resources of the organization.

 

<b>Standard 8 – Accreditation </b>

Accreditation demonstrates your organization’s commitment to remaining compliant with industry standards and best practices. Once accredited, You agree to uphold the quality standards set by CESRA. The accredited organization agrees to submit a yearly accreditation renewal review to prove that they are meeting high-quality standards year after year.  You will on the other hand get an profile on this website where all donors will be able to verify your accreditation status.

 

<b>Standard 9 – Complaints</b>

Charities and other not-for-profits should provide a safe and effective service to those who wish to make a complaint to or about the charity. An organization should have policies in place for complaint procedures.  The complaint standard’s goal is to make sure the charity responds promptly to and act on complaints brought to its attention. (see CESRA  complaints form)

 

<b>Standard 10 – Finance, and Compensation</b>

Not more than one or 10% (whichever is greater) directly or indirectly compensated person(s) serving as a voting member(s) of the board. Compensated members shall not serve as the board’s chair or treasurer.
Every organization should spend at least 65% of its total expenses on program activities.
Make available to all, on request, complete annual financial statements prepared in accordance with generally accepted accounting principles
Standard 11-  Non profit’s Obligation for gifts from donors 

Non profit should abit to the terms and conditions of managing gifts as donors intended. Making sure they update the donors on the progress and impact the gifts. They should give detailed reports on the progress of the donation and the organization.

 
<b> Standard 12: Board Meetings</b>

Every non-profit should have a minimum of three evenly spaced meetings per year of the full governing body with a majority in attendance, with face-to-face participation. A conference call of the full board can substitute for one of the three meetings of the governing body. For all meetings, alternative modes of participation are acceptable for those with physical disabilities.

 

<b>Standard 13. Annual Report</b>

The requirement to submit annual returns for your charitable organization is also part of standards of Charity Accountability.  Each Non-profit is encouraged to submit annual returns 3 months after the end of their financial year on – (annual report form)

 

<b>Standard 14.   Conflicts of Interest </b>

A conflict of interest is a transaction or arrangement that might benefit the private interest of an officer, board member, or employee. Nonprofits should have a written conflict of interest policy and statement in place.

The conflict of interest policy should identify the types of conduct or transactions that raise conflict of interest concerns in your organization.
The conflict of interest statement should provide space for the board member, employee or volunteer to disclose any known interests that the individual, or a member of the individual’s immediate family, has in any business entity which transacts business with the organization.
Standard 15: Privacy policy

Every non-profit should maintain a Privacy policy in place.  Privacy is a big deal these days. Every week on the news you read or hear about another person having their identity stolen. This can be discouraging to sites that depend upon consumer trust: namely, online donations. With privacy policies in place, it reassures your donors that you will protect any information they give you through your website’s forms and offline forms.
                </p>
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
