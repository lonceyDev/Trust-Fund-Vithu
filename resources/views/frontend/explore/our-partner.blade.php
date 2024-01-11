@extends('layouts.front.index_blade')
@push('custom-style')
    <style>
 
.img-partner {
    /* max-width: 100%; */
    height: 200px;
    width: 200px;
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
                            Our Partners

                        </h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <span>
                                    Our Partners

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
                    <b>Loyalty towards those we – AID</b> <br>
                    All monies raised, whether it be fund raising, individual donations or lobbying other organisations,
                    will be dedicated purely to help the people we AID.
                </p>

            </div>

        </div>
        <div class="benefit-area three pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Our Partners</h2>
                    <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and
                        individual citizens that are making.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="benefit-item four">
                        <a href="http://www.manandco.co.uk/" target="_blank"> 
                            <img src="{{asset('assets/front/img/sponcer/sponcer1.png')}}" alt="" class="img-partner">
                            <h3>Participation</h3>
                            <p>Every participant will participate each activities, getting skill, positive cooperation and
                                ensuring rights of society.
    
                            </p>
                        </a>    
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="benefit-item four">
                            <a href="https://www.successchoices.ch/" target="_blank"><img src="{{asset('assets/front/img/sponcer/sponcer2.png')}}" alt="" class="img-partner">
                                <h3>Participation</h3>
                                <p>Every participant will participate each activities, getting skill, positive cooperation and
                                    ensuring rights of society.
        
                                </p>
                            </a> 
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="benefit-item four">
                            <a href="https://www.schneesportschule-kriens.ch/" target="_blank"><img src="{{asset('assets/front/img/sponcer/sponcer3.gif')}}" alt="" class="img-partner">
                                <h3>Participation</h3>
                                <p>Every participant will participate each activities, getting skill, positive cooperation and
                                    ensuring rights of society.
                                </p>
                            </a>    
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="benefit-item four">
                            <a href="https://www.b-s-k.ch/" target="_blank"><img src="{{asset('assets/front/img/sponcer/sponcer4.png')}}" alt="" class="img-partner">
                                <h3>Participation</h3>
                                <p>Every participant will participate each activities, getting skill, positive cooperation and
                                    ensuring rights of society.
        
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="benefit-item four">
                            <a href="https://sckriens.ch/" target="_blank"><img src="{{asset('assets/front/img/sponcer/sponcer5.webp')}}" alt="" class="img-partner">
                                <h3>Participation</h3>
                                <p>Every participant will participate each activities, getting skill, positive cooperation and
                                    ensuring rights of society.
        
                                </p>
                            </a>    
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="benefit-item four">
                            <a href="https://shaolintempel.ch/" target="_blank"><img src="{{asset('assets/front/img/sponcer/sponcer6.png')}}" alt="" class="img-partner">
                                <h3>Participation</h3>
                                <p>Every participant will participate each activities, getting skill, positive cooperation and
                                    ensuring rights of society.
                                </p>
                            </a>    
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="benefit-item four">
                            <a href="https://lonceytech.com/" target="_blank"><img src="{{asset('assets/front/img/sponcer/sponcer7.png')}}" alt="" class="img-partner">
                                <h3>Participation</h3>
                                <p>Every participant will participate each activities, getting skill, positive cooperation and
                                  ensuring rights of society.
                                </p>
                            </a>    
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="benefit-item four">
                        <a href="https://www.rajcreation.lk/" target="_blank"><img src="{{asset('assets/front/img/sponcer/sponcer8.png')}}" alt="" class="img-partner">
                            <h3>Participation</h3>
                            <p>Every participant will participate each activities, getting skill, positive cooperation and
                                ensuring rights of society.
                            </p>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection

@push('custom-script')
@endpush


