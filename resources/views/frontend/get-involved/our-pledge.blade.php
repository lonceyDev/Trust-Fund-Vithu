@extends('layouts.front.index_blade')
@section('content')
    <div class="page-title-area title-bg-one">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>
                            Our Pledge

                        </h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <span>
                                    Our Pledge

                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <p>
                    We will maintain 100% Transparency, deliver our projects at 0% Administration Cost
                </p>
                <p>
                    <b>Transparency – 100%</b> <br>
                    Every donation will be acknowledged on the Vithu Trust Fund website and will go directly to the
                    Vithu Trust Fund bank account. Also online, will be a Vithu Trust Fund wish list identifying the most
                    needy resources. As funds are collected, you can see which of these resources have been donated and see
                    exactly where your money has gone.
                </p>

                <p>
                    <b>
                        Administration cost: 0%</b> <br>
                    You might wonder how an organisation can run with no administration cost. The volunteers of Vithu Trust
                    Fund use their own resources without any salary being drawn from the Vithu Trust Fund account.
                    ‘Administration cost’ such as printing, website hosting and hiring of venues, for example, will be done
                    through commercial sponsorship and Trustees’ contributions, making every penny you donate available for
                    the cause. All unavoidable operational costs such as bank charges, fees for fundraising namely Just
                    Giving web link, etc are paid for by contributions from Trustees. Thereby, we ensure that 100% of your
                    donations will be applied to worthy causes.
                </p>

                <p>
                    <b>Morality – Basis of our work</b> <br>
                    This basically means that we will endeavor to do the right thing and involve as many people as possible
                    in the decision making process. New proposals will be put on the Vithu Trust Fund website,and we hope
                    you can also get involved and contribute your views. We will help you identify projects that you would
                    like to be aiding directly and help you implement that project at local levels in Sri Lanka.


                </p>
                <p>
                    <b>Integrity – Guaranteed</b>
                    <br>
                    All financial transactions will be closely monitored by a minimum of two trustees on each payment being
                    made by the Charity. Annual accounts will be published in the website.
                </p>
                <p>
                    <b>Loyalty towards those we – AID</b> <br>
                    All monies raised, whether it be fund raising, individual donations or lobbying other organisations,
                    will be dedicated purely to help the people we AID.
                </p>

            </div>

        </div>
    </div>
@endsection

@push('custom-script')
@endpush

@push('custom-style')
    <style>
        .owl-carousel .owl-item img {
            min-height: 180px;
        }
    </style>
@endpush
