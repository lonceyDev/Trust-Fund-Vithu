@extends('layouts.front.index_blade')
@section('content')
    <div class="page-title-area title-bg-one">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>
                            AmazonSmile

                        </h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <span>
                                    AmazonSmile

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
            <img class="rounded mx-auto d-block" src="{{ asset('assets/front/img/get-involved/amazon-smile-logo.jpg') }}"
                alt="AmazonSmile">

            <div class="row">
                <p>
                    <a href="http://smile.amazon.co.uk/" target="_blank" rel="noopener noreferrer"><img class="d-block"
                            src="{{ asset('assets/front/img/get-involved/amazon-smile.png') }}" alt="AmazonSmile"></a>
                </p>

                <p>
                    AmazonSmile is a simple and easy way for you to support Vithu Trust Fund (VTF) every time you shop — at
                    no cost to you. When you select Vithu Trust Fund (VTF) as your charitable organization of choice, Amazon
                    donates 0.5% of the price of eligible <a href="http://smile.amazon.co.uk/" target="_blank" rel="noopener noreferrer">AmazonSmile</a>  purchases to our organization.

                </p>
                <p>
                    <b>3 steps to get started
                    </b>

                    <ol class="ps-5">
                        <li>
                            Visit <a href="http://smile.amazon.co.uk/" target="_blank" rel="noopener noreferrer"> smile.amazon.com </a> and choose Vithu Trust Fund (VTF) as your charitable organization of choice.

                        </li>
                        <li>
                            Using a new or existing Amazon account, go about your shopping — you’ll see the same low prices and shopping features as amazon.com.

                        </li>
                        <li>
                            Make sure to use smile.amazon.com every time you shop. The more money spent at Amazon Smile, the more money will be generated to support Vithu Trust Fund (VTF) mission of helping the needy break the cycle of poverty.

                        </li>
                    </ol>


                </p>
                <p>
                    Have more questions? <a href="http://smile.amazon.co.uk/about" target="_blank" rel="noopener noreferrer"> See Amazon’s FAQs about Amazon Smile.</a>

                </p>
                <p>
                    Are you a Chrome user? There is an extension for Chrome browsers you can add to ensure whenever you are on Amazon’s site, you will be on AmazonSmile. <a href="https://chrome.google.com/webstore/detail/smile-always/jgpmhnmjbhgkhpbgelalfpplebgfjmbf?hl=en" target="_blank" rel="noopener noreferrer"> Find more about the extension here.</a>


                </p>
                <p>
                    On behalf of all the children, Elderly,Animal farms and needy that will benefit from your gift, thank you and God bless you
                </p>

            </div>



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
