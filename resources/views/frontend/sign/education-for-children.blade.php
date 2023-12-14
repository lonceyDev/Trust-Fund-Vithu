@extends('layouts.front.index_blade')
@section('content')
    <div class="page-title-area title-bg-one">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>Education For Children
                        </h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <span>Education For Children
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
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 mx-auto">
                    <iframe width="716" height="auto" src="https://www.youtube.com/embed/qKjv5Jwy5Uk" title="Sajeevan Special Birthday Lunch part 2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="col-lg-3 col-md-6 mx-auto">
                    <iframe width="537" height="auto" src="https://www.youtube.com/embed/dNl9LwX3CYQ" title="Arulaham 2011" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>


                <div class="col-lg-3 col-md-6 mx-auto">
                    <iframe width="716" height="auto" src="https://www.youtube.com/embed/MX4ffE6VaEw" title="Asian Voice Charity Awards 2019" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                </div>


                <div class="col-lg-3 col-md-6 mx-auto">
                    <iframe width="716" height="auto" src="https://www.youtube.com/embed/Hxpmka6OFHE" title="Birthday wishes from Team Sri Lanka" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row mt-2">
                <h3>An easy way to teach children
                </h3>
                <p>We do not impose education on our children, we need to tell them naturally that it is a sport so that
                    they do not have the fear or hatred that they are learning. It basically introduces Ava with the aim of
                    teaching everyday words such as letters, numbers, and colours in a way that makes it easier for children
                    to understand, such as learning with a teacher while they are at home.</p>
            </div>



        </div>
    </div>
@endsection

@push('custom-script')
@endpush

@push('custom-style')
    <style>
    iframe {
        width: 100%;
    }

    </style>
@endpush
