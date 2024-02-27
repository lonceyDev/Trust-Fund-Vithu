@extends('layouts.front.index_blade')
@section('content')
    <div class="page-title-area title-bg-one">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>About</h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <span>About</span>
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
                <div class="col-lg-4">
                    <img src="{{ asset('assets/front/img/about/vithu.jpg') }}" alt="About"
                        class="border border-primary border-5">

                </div>
                <div class="col-lg-8">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="sub-title">About us</span>
                            <h2>We're for social causes</h2>
                        </div>
                        {{-- <span class="about-span">We exist for non-profits, social enterprises, community groups,
                            activists,lorem politicians and individual citizens that are making.</span> --}}
                        <p>Vithu Trust Fund is a charity organisation dedicated to improve and safeguard the lives of
                            children in Sri Lanka and raise voice for the needy. There are thousands of children who go
                            through the day without a single nourishing meal. They include victims of war, which has thrown
                            the bread-winners of these families out of work and the future of our youngsters into darkness.

                        </p>
                        <p>On 23rd December 2004, Vithu Trust Fund was started by Mr. Raj-Vithuran as a registered charity
                            in England & Wales (Registration number 1107418). The founder was passionate about making a
                            difference to the lives of needy people from a very young age when he was closely associated
                            with the Ramakrishna Mission in Colombo.

                        </p>
                    </div>
                </div>
            </div>

            <div class="row">

                <blockquote class="mt-5">
                    <i class="icofont-quote-left"></i>
                    “Take up one idea. Make that one idea your life – think of it, dream of it and live on that idea. Let
                    the brain, muscles, nerves, every part of your body, be full of that idea, and just leave every other
                    idea alone. This is the way to success.”
                    <i class="text-primary">- Swami Vivekananda</i>

                </blockquote>

                <p>
                    His commitment to the cause made him raise funds to help the needy people when has only 19. With passage
                    of time, his passion and commitment have involved Raj-Vithuran with many charitable activities that aim
                    to care for the poor and underprivileged children who need immediate help. The passion and compassion of
                    Vithu is being shared now by his wife Shimari. The couple is working tirelessly to rebuild the lives of
                    young victims whose life have been devastated due to the long war in Sri Lanka.


                </p>
            </div>
        </div>
    </div>


    <section class="dream-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Fulfill our dream</span>
                <h2>Let's make a change</h2>
                <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and
                    individual citizens that are making.</p>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="dream-item">
                        <h3>
                            <a href="{{route('donation')}}">Over 20M+ people around the world is having good life because of
                                Findo</a>
                        </h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>
                        <h4><span>*50</span>country served world wide</h4>
                        <span class="sub-span">01</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="dream-item">
                        <h3>
                            <a href="{{route('donation')}}">We are supporting the poor and homeless people by providing
                                food</a>
                        </h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>
                        <h4><span>*Food</span>served world wide</h4>
                        <span class="sub-span">02</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="dream-item">
                        <h3>
                            <a href="{{route('donation')}}">First time a non- profitable organization is fighting against the
                                poverty</a>
                        </h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>
                        <h4><span>*Finance</span>collecting & donating</h4>
                        <span class="sub-span">03</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="dream-item">
                        <h3>
                            <a href="{{route('donation')}}">Over 1200+ volunteer working for Findo around the world</a>
                        </h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>
                        <h4><span>*Volunteer</span>in every Country</h4>
                        <span class="sub-span">04</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="dream-item">
                        <h3>
                            <a href="{{route('donation')}}">Hands move to support in Yemen combat covid-19 by donating face
                                masks</a>
                        </h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>
                        <h4><span>*Lockdown</span>covid-19 helping</h4>
                        <span class="sub-span">05</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="dream-item">
                        <h3>
                            <a href="{{route('donation')}}">This project seeks to build houses for reduce their suffering allow
                                them to live</a>
                        </h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>
                        <h4><span>*150</span>house project</h4>
                        <span class="sub-span">06</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="benefit-area two pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="benefit-img">
                        <img src="{{ asset('assets/front//img/benefit-main1.jpg') }}" alt="Benefit">
                        <img src="{{ asset('assets/front//img/benefit-shape1.png') }}" alt="Benefit">
                        {{-- <div class="video-wrap">
                            <button class="js-modal-btn">
                                <i class="icofont-ui-play"></i>
                            </button>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title">
                        <span class="sub-title">Core features</span>
                        <h2>Mission to make a smile</h2>
                        <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians
                            and individual citizens that are making.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-6">
                            <div class="benefit-item">
                                <i class="flaticon-house"></i>
                                <h3>Build home</h3>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique illum excepturi
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-sm-6">
                            <div class="benefit-item two">
                                <i class="flaticon-hospital"></i>
                                <h3>Medical facilities</h3>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique illum excepturi
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-sm-6">
                            <div class="benefit-item three">
                                <i class="flaticon-fast-food"></i>
                                <h3>Food & water</h3>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique illum excepturi
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-sm-6">
                            <div class="benefit-item four">
                                <i class="flaticon-graduation-cap"></i>
                                <h3>Education facilities</h3>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique illum excepturi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="team-area four pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Volunteer</span>
                <h2>Meet our excellent</h2>
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
        blockquote {
            margin-top: 10px;
            background-color: #f9f9f9;
            padding: 30px 30px 30px 60px;
            font-size: 18px;
            font-weight: 600;
            color: #302c51;
            position: relative;
            margin-left: 35px;
            margin-bottom: 25px;
        }
    </style>
@endpush
