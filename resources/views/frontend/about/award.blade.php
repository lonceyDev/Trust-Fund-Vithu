@extends('layouts.front.index_blade')
@section('content')
    <div class="page-title-area title-bg-one">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>Awards</h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <span>Awards</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="benefit-area three pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Our Awards</h2>
                <p>We exist for non-profits, social enterprises, community groups, activists, politicians and individual citizens that are making.</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="benefit-item" style="height: 550px; text-align: center;">
                        <img src="{{ asset('assets/front/img/about/issues.png') }}" alt="About">
                        <div class="section-title">
                            <h2>Issues 78</h2>
                            <h3>Helping victims of war</h3>
                        </div>
                        
                        <p>Vithu Trust Fund was been shortlisted as MOST ENTERPRISING at the Asian Voice Charity Awards 2019.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="benefit-item three" style="height: 550px; text-align: center;">
                        <img src="{{ asset('assets/front/img/about/Awardslogo-1.png') }}" alt="About">
                        <div class="section-title">
                            <h2>Asian Voice Charity Awards</h2>
                            <h3>Most Enterprising Award - 2019</h3>
                        </div>
                
                        <p>Vithu Trust Fund was been shortlisted as MOST ENTERPRISING at the Asian Voice Charity Awards 2019.</p>
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
        .benefit-item img {
            border: 2px solid rgb(8, 8, 94); /* Adding border style to the images */
            border-radius: 5px; /* Adding border radius for rounded corners */
            margin-bottom: 20px; /* Adjusting the gap between the image and the section title */
        }
    </style>
    @endpush
