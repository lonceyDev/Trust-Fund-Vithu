@extends('layouts.front.index_blade')
@push('custom-style')
<style>
    .modal-body {
    font-family: 'Poppins', sans-serif;
    line-height: 1.6;
    color: #333;
}

.modal-body p {
    margin: 0;
    padding: 10px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.modal-body p strong {
    font-size: 1.1em;
    color: #007bff;
}

.modal-body p::before {
    /* content: "\2022"; Bullet point */
    color: #007bff;
    font-weight: bold;
    display: inline-block; 
    width: 1em;
    margin-left: -1em;
}

</style>
    
@endpush
@section('content')
<div class="about-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Make a donation
            </span>
            <h2>Make An Online Donation, Setup Monthly Payments</h2>
        </div>
        <div class="row donation">
            @if (false)
            <div class="col-sm-6 col-lg-6">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <a href="https://vithu.enthuse.com/Donate#!/" target="_blank"> <img
                                    src="{{asset('assets/front/img/donation/enthuse.png')}}"
                                    class="img-fluid rounded-start" alt="Enthuse">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Donate via Charity Checkout</h5>
                                <p class="card-text">Charity Checkout provides charities with both credit/ debit
                                    card and Direct Debit
                                    payment processing facilities. The company is a registered HMRC Gift Aid agent
                                    and also
                                    processes Gift Aid on behalf of its charity clients</p>
                                <p class="card-text">
                                    <a href="https://vithu.enthuse.com/Donate#!/" target="_blank"
                                        class="btn btn-primary" alt="Enthuse">Donate Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="col-sm-6 col-lg-6 mx-auto">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <a href="http://paypal.me/vtf2004" target="_blank"> <img
                                    src="{{asset('assets/front/img/donation/paypal.png')}}"
                                    class="img-fluid rounded-start" alt="Paypal">

                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Donate via PayPal</h5>
                                <p class="card-text">PayPal is an American, international digital wallet based
                                    e-commerce business allowing
                                    payments and money transfers to be made through the Internet.</p>
                                <p class="card-text">
                                    <a href="http://paypal.me/vtf2004" target="_blank"
                                        class="btn btn-primary" alt="Paypal">Donate Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row pt-2 flags">
            <!-- UK Flag -->
            <div class="col-12 col-lg-3 d-flex flex-column align-items-center mb-3">
                <img src="{{asset('assets/front/img/donation/uk-flag.png')}}" class="img-thumbnail mb-2" alt="" data-bs-toggle="modal" data-bs-target="#uk">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uk">Donate Now</button>
                <div class="modal fade" id="uk" tabindex="-1" aria-labelledby="ukLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ukLabel">
                                    <img src="{{asset('assets/front/img/flags/uk.gif')}}"> UK
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    <strong>Account Name:</strong> HSBC Bank<br>
                                    <strong>International Bank Account Number (IBAN):</strong><br>
                                    <span style="font-size: 16px;">GB26MIDL40184192205262</span><br>
                                    <strong>Branch Identifier Code (BIC):</strong> MIDLGB2103W<br>
                                    <strong>Shortcode:</strong> 40-18-41<br>
                                    <strong>Account Number:</strong> 92205262<br>
                                    <strong>Bank Address:</strong> 9 Wellesley Road, Croydon CR9 2AA
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Swiss Flag -->
            <div class="col-12 col-lg-3 d-flex flex-column align-items-center mb-3">
                <img src="{{asset('assets/front/img/donation/swiss.png')}}" class="img-thumbnail mb-2" alt="" data-bs-toggle="modal" data-bs-target="#swiss">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#swiss">Donate Now</button>
                <div class="modal fade" id="swiss" tabindex="-1" aria-labelledby="swissLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="swissLabel">
                                    <img src="{{asset('assets/front/img/flags/ch.gif')}}"> Swiss Bank
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    <strong>Account Name:</strong> Vithu Trust Fund<br>
                                    <strong>IBAN:</strong> CH33 0077 8205 8509 1200 1<br>
                                    <strong>Account Number:</strong> 60-41-2<br>
                                    <strong>Bank:</strong> Luzerner Kantonalbank AG<br>
                                    <strong>Location:</strong> 6003 Luzern<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- German Flag with PayPal Link -->
            <div class="col-12 col-lg-3 d-flex flex-column align-items-center mb-3">
                <a href="https://www.paypal.com/paypalme/vtf2004" target="_blank" rel="noopener noreferrer" alt="Paypal">
                    <img src="{{asset('assets/front/img/donation/german.png')}}" class="img-thumbnail mb-2">
                </a>
                <a href="https://www.paypal.com/paypalme/vtf2004" target="_blank" rel="noopener noreferrer" alt="Paypal">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#german">Donate Now</button>
                </a>
            </div>
        
            <!-- Sri Lanka Flag -->
            <div class="col-12 col-lg-3 d-flex flex-column align-items-center mb-3">
                <img src="{{asset('assets/front/img/donation/lk.png')}}" class="img-thumbnail mb-2" alt="" data-bs-toggle="modal" data-bs-target="#lk">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#lk">Donate Now</button>
                <div class="modal fade" id="lk" tabindex="-1" aria-labelledby="lkLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="lkLabel">
                                    <img src="{{asset('assets/front/img/flags/lk.gif')}}"> Sri Lanka
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    <strong>Account Name:</strong> Vithu Trust Fund (VTF) Pvt.<br>
                                    <strong>Bank:</strong> COMMERCIAL BANK<br>
                                    <strong>Account Number:</strong> 1000013090<br>
                                    <strong>Branch Code:</strong> 7056 101
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
</div>

</div>


@endsection
