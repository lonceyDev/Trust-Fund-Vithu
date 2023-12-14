@extends('layouts.front.index_blade')
@section('content')

    <div class="page-title-area title-bg-one">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>Our Journey</h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <span>Our Journey</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6">
                    <img src="{{ asset('assets/front/img/about/map.jpg') }}" alt="About"
                        class="border border-primary border-5">
                    <p class="text-center fw-bold fst-italic">SRI LANKA PROJECT AREAS</p>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="about-content">
                        {{-- <div class="section-title">
                            <span class="sub-title">About us</span>
                            <h2>About Our Journey</h2>
                        </div> --}}


                        <p>Raj-Vithuran, the founder of Vithu Trust Fund started his journey by investing his time and
                            effort to identify the needs of people whose lives have been devastated by the civil
                            conflict in Sri Lanka that lasts over three decades. He was passionate about helping the
                            innocent people to bring their lives on track.
                        </p>
                        <p>After working closely with local communities in the rehabilitation work he realized that the
                            redevelopment and resettlement work can be streamlined more efficiently under a legal
                            framework of a social enterprise. His commitment and determination to streamline the
                            redevelopment and resettlement work encouraged Vithu to start the Vithu Trust Fund in
                            December 2004.
                        </p>
                        <p>
                            During his association with the local communities, Vithu observed how the long and bloody
                            conflict has compelled many people to live in pain, anguish and uncertainty. The irrevocable
                            loss caused to them clearly reflected in their sad eyes. No one can compensate the huge loss
                            caused by thousands of innocent victims of the Sri Lankan conflict. So Vithu decided to
                            launch many projects that will surely put a smile on the faces of innocent children and
                            adults.
                        </p>


                        <p>
                            At present, Vithu Trust Fund supports several developmental projects that aim to provide
                            housing, education and care to the innocent victims of Sri Lankan conflict. Within last
                            eight years, these projects have brought a positive change in the lives of thousands of
                            vulnerable people. The support received from our well-wishers and kind hearted donors have
                            provided us momentum to carry out the development work more efficiently and rapidly.
                        </p>

                    </div>

                </div>
            </div>
            <div class="row">

                <p>
                    Vithu Trust Fund regularly collects donations and initiates fundraising activities to fund the
                    redevelopment and resettlement project. Vithu always welcome the support and assistance received
                    from well-wishers, enterprises and organizations across the world to carry on the rehabilitation
                    programs.
                </p>
                <p>
                    The donations received from various sources are used completely to help the poor, homeless and
                    physically children and their families in Sri Lanka. While donating funds, one must feel that he
                    is contributing towards changing the lives of innocent victims of the vicious civil war. We need
                    funds to carry on the programs to bring lives of thousand people on track regardless of their
                    caste, creed and sect.
                </p>
            </div>
        </div>
    </div>
    @endsection

    @push('custom-script')
    @endpush

    @push('custom-style')

    @endpush
