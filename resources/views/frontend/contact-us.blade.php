@extends('layouts.front.index_blade')
@push('custom-style')
    <style>
        .common-btn {
        color: #072a5f;
        background-color: var(--theme-dark-primaryprimary);
        display: inline-block;
        padding: 12px 25px;
        border-radius: 30px;
        font-weight: 600;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            line-height: 1.5;
            color: #ffffff;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            background-color: rgb(41, 129, 237);
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            border-radius: .25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
    </style>
    <!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush
@section('content')
<div class="page-title-area title-bg-eight">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>Contact Us</h2>
                    <ul>
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li>
                            <span>Contact Us</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="contact-area  pt-100 pb-70">
    <div class="container">
        <form  method="POST" action="{{route('contact.mail')}}" id="contactForm1">
            @csrf
        
            <h2>GET IN TOUCH</h2>
            <p>
                Please feel free to contact us if you have any further questions.</p>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>
                            <i class="icofont-user-alt-3"></i>
                        </label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" required
                            data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>
                            <i class="icofont-ui-email"></i>
                        </label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                            required data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>
                            <i class="icofont-ui-call"></i>
                        </label>
                        <input type="text" name="phone" id="phone" placeholder="Phone" required
                            data-error="Please enter your number" class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>
                            <i class="icofont-notepad"></i>
                        </label>
                        <input type="text" name="subject" id="subject" class="form-control"
                            placeholder="Subject" required data-error="Please enter your subject">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>
                            <i class="icofont-comment"></i>
                        </label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="8"
                            placeholder="Write message" required data-error="Write your message"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                {{-- <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <div class="form-check agree-label">
                            <input name="gridCheck" value="I agree to the terms and privacy policy."
                                class="form-check-input" type="checkbox" id="gridCheck" required>
                            <label class="form-check-label" for="gridCheck">
                                Accept <a href="#">Terms & Conditions</a> And <a
                                    href="#">Privacy Policy.</a>
                            </label>
                            <div class="help-block with-errors gridCheck-error"></div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-12">
                    <button type="submit" class="btn common-btn">
                        Send Message
                    </button>
                    {{-- <div id="msgSubmit" class="h3 text-center hidden"></div> --}}
                    <div class="clearfix"></div>
                </div>
            </div>
        </form>
    </div>
</div>
</main>
@push('custom-script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    $(document).ready(function(){
     
    });
        $('#contactForm1').submit(function(e){
            e.preventDefault();

            $.ajax({
    type: 'POST',
    url: "{{ route('contact.mail') }}",
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data: {
        'name': $("#name").val(),
        'email': $("#email").val(),
        'phone': $("#phone").val(),
        'subject': $("#subject").val(),
        'message': $("#message").val()
    },
    success: function(response) {
        
        toastr.success('Your message has been sent successfully!', 'Success');

                $('#contactForm1')[0].reset();
    },
    error: function(xhr, status, error) {

        toastr.error('An error occurred while sending your message. Please try again later.', 'Error');
    }
  });
});

</script>

@endpush
@endsection