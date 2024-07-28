@extends('layouts.front.index_blade')
@section('content')
    <div class="page-title-area title-bg-one">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>
                            Volunteering
                        </h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <span>
                                    Volunteering
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about-area pt-5 pb-70">
        <div class="container">
            <div class="row">
                <p>
                    <b>Vithu Trust Fund</b>is seeking volunteers to participate and offer their assistance to work with us on our projects in Sri Lanka.


                </p>
                <p>
                    Volunteers will be provided special training on the work they need to carry out.
                    Boarding and accommodations will be provided throughout their stay to work on the projects.
                    In return, volunteers will be expected to work on projects in Sri Lanka ranging from teaching
                     children and young people in schools and colleges to providing coaching and training to develop
                      entrepreneurial skills to members of the local community to participate in cooperative sustainable income-generating projects.


                </p>
                <p>
                    Please view our Projects page [Insert link] to choose the projects you wish to offer your skills as a volunteer.r.


                </p>
                <p>If you are interested in becoming a volunteer with Vithu Trust Fund, please contact us at charity@vithu.org or send us a message via our contact us section.
                </p>
            </div>

            <div class="row pt-3">
                <div class="col-lg-8 col-md-6">
                    <h3>
                        Donate

                    </h3>
                    <p>
                        Charity Checkout provides charities with both credit and debit card and direct debit payment processing facilities.
                        The company is a registered HMRC Gift Aid agent and also processes Gift Aid on behalf of its charity clients.

                    </p>
                    <a class="common-btn" href="http://paypal.me/vtf2004" target="_blank"
                        rel="noopener noreferrer">Donate</a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <img class="img-thumbnail" src="{{ asset('assets/front/img/get-involved/childreninslk.jpg') }}"
                        alt="Volunteering">

                </div>
            </div>
        </div>
    </div>
    <section class="team-area pt-100 pb-70 " style="    background-color: #f9f9f9;">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Volunteer</span>
                <h2>Meet our excellent volunteers</h2>
                <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and
                    individual citizens that are making.</p>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="team-item">
                        <div class="top">
                            <img src="{{ asset('assets/front/img/volunteers/thayalini.jpg') }}" alt="Sasikumar Thayalini">
                        </div>
                        <div class="bottom">
                            <h3>Sasikumar Thayalini</h3>
                            <span>VTF Jaffna-T</span>
                            <p>Thayalini, she is qualified diploma in pre-school teaching, She also volunteer dance teaches
                                bharatanatyam, Hindu religion and Tamil language. She is a very active volunteer for
                                children’s education.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="team-item">
                        <div class="top">
                            <img src="{{ asset('assets/front/img/volunteers/paritha.jpg') }}" alt="Sinnarasa Paritha">
                        </div>
                        <div class="bottom">
                            <h3>Sinnarasa Paritha</h3>
                            <span>VTFJaffna-T</span>
                            <p>
                                Paritha, she is a very enthusiastic active volunteer to VTF. She is in children’s counseling
                                in Jaffna education center. She also help the pre-school teaching, She is a very active
                                volunteer for children’s education.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="team-item">
                        <div class="top">
                            <img src="{{ asset('assets/front/img/volunteers/thinesh.jpg') }}" alt="Dineskumar Kularasa">
                        </div>
                        <div class="bottom">
                            <h3>Dineskumar Kularasa</h3>
                            <span>VTF Northern Province</span>
                            <p>Dineskumar, an outreach volunteer, has the ability to work anywhere anytime. Dineskumar, who
                                has been with us since his college days in 2011, is currently a field officer and has the
                                ability to go anywhere. A talented woodworker and dedicated sincer volunteer.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-4">
                    <div class="team-item">
                        <div class="top">
                            <img src="{{ asset('assets/front/img/volunteers/piralayini.jpg') }}"
                                alt="Parbagini Dineshkumar">
                        </div>
                        <div class="bottom">
                            <h3>Parbagini Dineshkumar
                            </h3>
                            <span>VTF Jaffna-T
                            </span>
                            <p>Prabhajini is an excellent village leader, Who unites everyone with the aim of working
                                together in the village where she lives. Hardworking, volunteer entrepreneur very
                                enthusiastic encouraging personality. Her role in rural development is immense.

                            </p>
                        </div>
                    </div>
                </div>



                <div class="col-sm-6 col-lg-4">
                    <div class="team-item">
                        <div class="top">
                            <img src="{{ asset('assets/front/img/volunteers/arifa.jpg') }}" alt="Aarifa Farhan">
                        </div>
                        <div class="bottom">
                            <h3>Aarifa Farhan
                            </h3>
                            <span>VTF Haputhalai
                            </span>
                            <p>Arifa, she is working at Asian Media Publications Journalist who works in Haputale as a
                                teacher to develop the skills of the students who are learning behind the scenes, is a
                                broad-minded person who is working towards building a library in the Haputale area. A
                                service oriented employee with a vision of the Seed Trust Fund in the hill country.

                            </p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
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
