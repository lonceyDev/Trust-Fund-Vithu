@extends('layouts.front.index_blade')
@section('content')
    <div class="page-title-area title-bg-one">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>
                            Sponsorship
                        </h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <span>
                                    Sponsorship
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

                <div class="col-lg-6">
                    <div class="about-content">
                        <p><b>1. Education</b>
                            You could either wholly or partly sponsor the educational expenses of a student.</p>
                        <p>
                            <b>2. Livelihood</b>
                            You could make regular contributions towards the livelihood expenses of a family or contribute to the setup of an income-generating enterprise project to support their regular expenses.
                        </p>

                        <p>
                            Our children are in need of continuous support and rely on the help of our generous sponsors
                             to fulfil their basic needs for food, clothing, shelter, and education. By sponsoring our children, 
                             you fulfil not only their basic needs but also give them an opportunity to re-start their lives;
                              you give them hope and belief in humanity to be able to cope with the atrocities they have been put through. With your help,
                             we are able to extend our children's care and the support they need to rebuild their lives.
                        </p>
                        <p>
                            <b>Sponsorship Programmes</b>
                        <ul class="ms-5">
                            <li>
                                Basic – By committing to sponsoring a month, you will help a child get food, shelter, and care.

                            </li>
                            <li>
                                Education – A sponsorship will ensure a child is provided with the clothing, books, equipment, and support to 
                                participate in extracurricular activities to attend primary or secondary school for basic education up to year 10 (GCE Ordinary Level).

                            </li>
                            <li>
                                Profession –  A sponsorship of a month will support the living and subsistence costs of a student either throughout their university education or 
                                for the length of time taken to obtain a vocational or professional qualification to be able to make them self-sustainable.

                            </li>
                            <li>
                                Enterprise – Choose from one of our microfinance projects and sponsor to help someone set up their own self-employment enterprise venture to support their family.

                            </li>
                            <li>
                                TLC – Tender Loving Care – Give a needy person the love and affection they need. Sponsor special equipment, medical treatment,
                                 or make their wish come true! View details of projects needing funds on our projects page.
                                  We value your commitment and generosity and believe it is our obligation in return to keep you informed of 
                                  how your sponsorship is making a difference in the lives of both children and adults alike.
                                 We will ensure that you receive regular updates on the projects for which contributions are deployed.

                            </li>
                        </ul>
                        </p>


                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="{{ asset('assets/front/img/get-involved/sponsorship.jpg') }}" alt="sponcer">
                    <img class="pt-4" src="{{ asset('assets/front/img/get-involved/slide-3.jpg') }}" alt="sponcer">

                </div>
            </div>
            <p class="pt-2">
                Please note that Vithu Trust Fund does not promote sponsorship or ‘adoption’ of an individual child, 
                as we believe this will discriminate against children with and without sponsors and the special privileges the sponsors may wish to extend towards their sponsored child. The needs of all our children are the same, and they are all treated equally.
                 Please visit our Projects page to sponsor individual projects.


            </p>
        </div>
    </div>
@endsection

@push('custom-style')
    <style>
        .owl-carousel .owl-item img {
            min-height: 180px;
        }
    </style>
@endpush
