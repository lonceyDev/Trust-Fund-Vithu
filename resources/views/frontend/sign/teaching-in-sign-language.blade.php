@extends('layouts.front.index_blade')
@section('content')
    <div class="page-title-area title-bg-one">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>
                            Teaching in sign language</h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <span>
                                    Teaching in sign language</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about-area pt-100 pb-70">
        <div class="container">
            {{-- <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 mx-auto">
                    <img src="{{ asset('assets/front/img/sign/Teaching-in-Braille.jpg') }}" alt=" Teaching in Braille">
                </div>
            </div> --}}
            <section class="gallery-area two pt-1 pb-2">
                <div class="container-fluid">
                    <div class="gallery-slider-1 owl-theme owl-carousel">


                        <div class="gallery-item">
                            <a href="{{ asset('assets/front/img/sign/a-z.png') }}" data-lightbox="roadtrip">
                                <img src="{{ asset('assets/front/img/sign/a-z.png') }}" alt="Gallery">
                                <i class="icofont-eye"></i>
                            </a>
                        </div>

                        <div class="gallery-item">
                            <a href="{{ asset('assets/front/img/sign/mei-letters.png') }}" data-lightbox="roadtrip">
                                <img src="{{ asset('assets/front/img/sign/mei-letters.png') }}" alt="Gallery">
                                <i class="icofont-eye"></i>
                            </a>
                        </div>

                        <div class="gallery-item">
                            <a href="{{ asset('assets/front/img/sign/k-row.png') }}" data-lightbox="roadtrip">
                                <img src="{{ asset('assets/front/img/sign/k-row.png') }}" alt="Gallery">
                                <i class="icofont-eye"></i>
                            </a>
                        </div>



                    </div>
                </div>
            </section>

            <div class="row">
                <h3>Learn Sign Language</h3>
                <p>
                    For deaf students, all communication is done in sign language. The language of communication of the
                    common people is English, Tamil, Sinhala, French .. There are many languages of communication in sign
                    language as well. For them, learning and communication are still a crisis due to the lack of sign
                    language for all words.
                </p>
                <p>
                    Tamil Sign Language is formed by the using of both hands. Finger Sign Language is a sign language for
                    all characters. But the lack of sign language for all words is seen as the biggest barrier to
                    communication, learning and employment for the disabled (hearing impaired). There is also a need to
                    interpret many words based on examples.
                </p>
            </div>
        </div>
    </div>
@endsection

@push('custom-script')
    <script>
        // Gallery Slider JS
        $('.gallery-slider-1').owlCarousel({
            items: 1,
            loop: false,
            margin: 20,
            nav: false,
            dots: false,
            smartSpeed: 1000,
            autoplay: false,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 3,
                },
                1000: {
                    items: 3
                }
            }
        });
    </script>
@endpush

@push('custom-style')
    <style>
        .owl-carousel .owl-item img {
            min-height: 180px;
        }
    </style>
@endpush
