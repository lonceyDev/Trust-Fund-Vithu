@extends('layouts.front.index_blade')
@section('content')
    <div class="page-title-area title-bg-one">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>About Our Logo</h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <span>About Our Logo</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="pt-100">
        <div class="container">
            <div class="row align-items-center">
                <p>Our logo is symbolized to depict to show what we believe in and what we Vithu Trusts stand for;
                    we have searched long and heard to bring the six elements with an underlying meaning from across
                    different cultures to display our purpose and diversity. The logo is also a continuous reminder
                    to us not lose focus of our mission.
                </p>
            </div>

            <div class="row mb-5">
                <div class="col-lg-5">
                    <div class="about-img">
                        <img src="{{ asset('assets/front/img/about/vithu-logo-original.png') }}" alt="About">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="accordion " id="aboutLogo">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="lady-justice">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-lady-justice" aria-expanded="true"
                                    aria-controls="collapse-lady-justice">
                                    Lady Justice
                                </button>
                            </h2>
                            <div id="collapse-lady-justice" class="accordion-collapse collapse show"
                                aria-labelledby="lady-justice" data-bs-parent="#aboutLogo">
                                <div class="accordion-body">
                                    <img class="rounded mx-auto d-block"
                                        src="{{ asset('assets/front/img/about/logo/lady-justice.png') }}"
                                        alt="Lady Justice">

                                    Derived from Themis of Greek mythology is the embodiment of the ‘Devine Order, law
                                    and custom’ – “That which is put in place” meaning to put in place that was
                                    displaced.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="adhi-shesha">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-adhi-shesha" aria-expanded="false"
                                    aria-controls="collapse-adhi-shesha">
                                    Adhi Shesha
                                </button>
                            </h2>
                            <div id="collapse-adhi-shesha" class="accordion-collapse collapse" aria-labelledby="adhi-shesha"
                                data-bs-parent="#aboutLogo">
                                <div class="accordion-body">
                                    <img class="rounded mx-auto d-block"
                                        src="{{ asset('assets/front/img/about/logo/adhi-shesha.png') }}" alt="Adhi Shesha">

                                    According to Hindu mythology 'Shesha' means 'remainder – that which remains when all
                                    else cease to exist'. It is also believed that when Adhi Shesha uncoils, time moves
                                    forward and creation takes place.
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <h2 class="accordion-header" id="leaves">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-leaves" aria-expanded="false" aria-controls="collapse-leaves">
                                    Leaves
                                </button>
                            </h2>
                            <div id="collapse-leaves" class="accordion-collapse collapse" aria-labelledby="leaves"
                                data-bs-parent="#aboutLogo">
                                <div class="accordion-body">
                                    <img class="rounded mx-auto d-block"
                                        src="{{ asset('assets/front/img/about/logo/leaves.png') }}" alt="Tiger">

                                    Leaves Plants emerge from the earth and draw nourishment from it. For this reason,
                                    many mythological traditions associate plants with birth or rebirth and with the
                                    eternal cycle of life springing forth from death.
                                </div>
                            </div>
                        </div>



                        <div class="accordion-item">
                            <h2 class="accordion-header" id="tiger">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-tiger" aria-expanded="false" aria-controls="collapse-tiger">
                                    Tiger
                                </button>
                            </h2>
                            <div id="collapse-tiger" class="accordion-collapse collapse" aria-labelledby="tiger"
                                data-bs-parent="#aboutLogo">
                                <div class="accordion-body">
                                    <img class="rounded mx-auto d-block"
                                        src="{{ asset('assets/front/img/about/logo/tiger.png') }}" alt="Tiger">

                                    Tiger In the ancient Korean history and culture, a tiger is regarded as a guardian
                                    that drives away evil spirit and a sacred creature that brings good luck – the
                                    symbol of courage and absolute power.
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <h2 class="accordion-header" id="grains">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-grains" aria-expanded="false" aria-controls="collapse-grains">
                                    Grains
                                </button>
                            </h2>
                            <div id="collapse-grains" class="accordion-collapse collapse" aria-labelledby="grains"
                                data-bs-parent="#aboutLogo">
                                <div class="accordion-body">
                                    <img class="rounded mx-auto d-block"
                                        src="{{ asset('assets/front/img/about/logo/grains.png') }}" alt="Grains">

                                    Grains Prosperity and ‘Food for all’.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="book-pencil">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-book-pencil" aria-expanded="false"
                                    aria-controls="collapse-book-pencil">
                                    Book & Pencil
                                </button>
                            </h2>
                            <div id="collapse-book-pencil" class="accordion-collapse collapse"
                                aria-labelledby="book-pencil" data-bs-parent="#aboutLogo">
                                <div class="accordion-body">
                                    <img class="rounded mx-auto d-block"
                                        src="{{ asset('assets/front/img/about/logo/book-pencil.png') }}"
                                        alt="Book & Pencil">
                                    Book & Pencil Education is the birthright of every child.
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('custom-script')
    @endpush

    @push('custom-style')
        <style>
            .accordion-header button {
                font-weight: 600;
            }
            .accordion-body img {
                max-width: 140px;
                padding-bottom: 5px
            }
        </style>
    @endpush
