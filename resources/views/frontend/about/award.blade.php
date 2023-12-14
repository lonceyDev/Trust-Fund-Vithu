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


    <div class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center pb-5">
                <div class="col-lg-5 col-md-6">
                    <img src="{{ asset('assets/front/img/about/Awardslogo-1.png') }}" alt="About">
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="sub-title">Asian Voice Charity Awards</span>
                            <h2>Most Enterprising Award - 2019</h2>
                        </div>
                        <span class="about-span">Vithu Trust Fund was been shortlisted as MOST ENTERPRISING at the Asian Voice Charity Awards 2019.
                        </span>
                    </div>
                </div>
            </div>

            <div class="row align-items-center pt-5">
                <div class="col-lg-7 col-md-6">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="sub-title">Issues 78</span>
                            <h2>Helping victims of war</h2>
                        </div>
                        <span class="about-span">Vithu Trust Fund was been shortlisted as MOST ENTERPRISING at the Asian Voice Charity Awards 2019.                        </span>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <img src="{{ asset('assets/front/img/about/issues.png') }}" alt="About">
                </div>
            </div>
        </div>
    </div>
    @endsection

    @push('custom-script')
    @endpush

    @push('custom-style')

    @endpush
