@extends('layouts.front.index_blade')
@section('content')
    <div class="page-title-area title-bg-one">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>
                            Teaching in Braille</h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <span>
                                    Teaching in Braille</span>
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
                <div class="col-lg-5 col-md-6 mx-auto">
                    <img src="{{ asset('assets/front/img/sign/Teaching-in-Braille.jpg') }}" alt=" Teaching in Braille">
                </div>
            </div>
            <div class="row">
                <h3>Braille letters </h3>
                <p>
                    The teaching method for Braille is different. Awareness is taught in Braille by specially trained teachers, 
                    the characters are taught in Braille, and the descriptions and descriptions are taught in the same way as normal students. 
                    It is also possible to teach mathematics easily with special maths equipment.
                </p>
                <p>
                    When written in Braille all letters, numbers, and symbols appear to be included in the “six dots.” 
                    The 6th dot is referred to as the 1st, 2nd and 3rd dot for 1-6. One dot / more than one dot is used for each digit/character. 
                    Within these six charges, all the letters are contained in the Braille language. 
                    Students appearing for the exam in Braille will be given extra time (10 minutes more for every 60 minutes) than normal students. 
                    There is also a requirement for supervisors to read the question paper in the examination hall.
                </p>
                <p>
                    The teachers for these will be seen as specially trained teachers, also will be seen as specially trained teachers.
                     They are administrative structures for 8 of these students.
                </p>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 mx-auto">
                    <iframe class="w-100" width="530" height="298" src="https://www.youtube.com/embed/G2Dv9VVOtRE"
                        title="பிறெயிலி இயந்திரம் மற்றும் பிறெயில் பற்றிய அறிமுகம் - Braille Teaching by N.Vijtha Vithu Trust Fund"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>

            <section class="gallery-area two pt-5 pb-70">
                <div class="container-fluid">
                    {{-- <div class="section-title">
                <span class="sub-title">Our gallery</span>
                <h2>Discover the best things we do</h2>
                <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and
                    individual citizens that are making.</p>
            </div> --}}
                    <div class="gallery-slider owl-theme owl-carousel">

                        @for ($i = 0; $i <= 6; $i++)
                            <div class="gallery-item">
                                <a href="{{ asset('assets/front/img/sign/Braille_teaching' . $i . '.jpeg') }}"
                                    data-lightbox="roadtrip">
                                    <img src="{{ asset('assets/front/img/sign/Braille_teaching' . $i . '.jpeg') }}"
                                        alt="Gallery">
                                    <i class="icofont-eye"></i>
                                </a>
                            </div>
                        @endfor


                    </div>
                </div>
            </section>


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
