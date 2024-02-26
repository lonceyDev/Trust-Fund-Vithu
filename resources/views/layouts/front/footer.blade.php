<footer class="footer-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a class="logo" href="{{ route('home') }}">
                            <img src="{{ asset('assets/front/img/footer-logo.png') }}" alt="Logo">
                        </a>
                        <p>Vithu Trust Fund is a charity organisation dedicated to improve and safeguard the lives of
                            children in Sri Lanka and raises voice for the needy.
                        </p>
                        <b>Registered Charity:</b>
                        <p class="links">England And Wales
                            <a href="https://register-of-charities.charitycommission.gov.uk/charity-search/-/charity-details/4011615/charity-overview"
                                target="_blank" rel="noopener noreferrer">1107418</a>
                            <br>
                            Sri Lanka
                            <a href="http://www.ngosecretariat.gov.lk/index.php?option=com_content&amp;view=featured&amp;Itemid=101"
                                target="_blank" rel="noopener noreferrer">878</a>
                            <br>
                            Switzerland
                            <a href="https://www.stadt-kriens.ch/dienstleistungen/vereine/vereine-detail.page/968/association/664"
                                target="_blank" rel="noopener noreferrer">Verein</a>
                        </p>
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/vithutrustfund" target="_blank">
                                    <i class="icofont-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/vithutrustfund" target="_blank">
                                    <i class="icofont-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCqWcfwkS8hLV3A5rdu22cDw/videos?disable_polymer=1"
                                    target="_blank">
                                    <i class="icofont-youtube-play"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/vithutrustfund/" target="_blank">
                                    <i class="icofont-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="footer-item">
                    <div class="footer-links" class="shake-text">
                        <h3>Get Started</h3>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">
                                    <i class="icofont-simple-right"></i>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about.about-us') }}">
                                    <i class="icofont-simple-right"></i>
                                    About us
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('projects') }}">
                                    <i class="icofont-simple-right"></i>
                                    Projects
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contacts.create') }}">
                                    <i class="icofont-simple-right"></i>
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('donations') }}">
                                    <i class="icofont-simple-right"></i>
                                    Donate Now
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="footer-item">
                    <div class="footer-causes">
                        <h3>Urgent causes</h3>
                        <div class="cause-inner">
                            <ul class="align-items-center">
                                <li>
                                    <img src="{{ asset('assets/front/img/footer-thumb1.jpg')}}" alt="Cause">
                                </li>
                                <li>
                                    <h3>
                                        <a href="donation-details.html">Donate for melina the little child</a>
                                    </h3>
                                </li>
                            </ul>
                        </div>
                        <div class="cause-inner">
                            <ul class="align-items-center">
                                <li>
                                    <img src="{{ asset('assets/front/img/footer-thumb2.jpg')}}" alt="Cause">
                                </li>
                                <li>
                                    <h3>
                                        <a href="donation-details.html">Relief for Australia cyclone effected</a>
                                    </h3>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>Quick links</h3>
                        <ul>
                            <li>
                                <a href="{{ route('about.logo') }}">
                                    <i class="icofont-simple-right"></i>
                                    About our logo
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('about.history') }}">
                                    <i class="icofont-simple-right"></i>
                                    Our History
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('donations') }}">
                                    <i class="icofont-simple-right"></i>
                                    Donate Now
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about.journey') }}">
                                    <i class="icofont-simple-right"></i>
                                    Our Journey
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about.awards') }}">
                                    <i class="icofont-simple-right"></i>
                                    Awards
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-contact">
                        <h3>Why This Logo?</h3>
                        <div class="logo">
                          <a href="{{ route('about.logo') }}"><img src="{{ asset('assets/front/img/vithu-logo.jpg') }}" alt="Vithu Trust Fund"></a>

                        </div>
                        {{-- <div class="contact-inner">
                            <ul>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <a href="#">6B, Helvetica street, Jordan</a>
                                </li>
                                <li>
                                    <i class="icofont-ui-call"></i>
                                    <a href="tel:+123456789">+123-456-789</a>
                                </li>
                            </ul>
                        </div>
                        <div class="contact-inner">
                            <ul>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <a href="#">6A, New street, Spain</a>
                                </li>
                                <li>
                                    <i class="icofont-ui-call"></i>
                                    <a href="tel:+548658956">+548-658-956</a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-details">
            <span class="copyright">
                Copyright @
                <script>
                    document.write(new Date().getFullYear())
                </script> Vithu Trust Fund.
            </span>
            <span class="credits">
                <a href="https://lonceytech.com/" target="_blank">Designed &
                    Developed by : Loncey Tech</a>
            </span>

        </div>


    </div>
</footer>


<div class="go-top">
    <i class="icofont-arrow-up"></i>
    <i class="icofont-arrow-up"></i>
</div>


<script src="{{ asset('assets/front/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/front/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/front/js/form-validator.min.js') }}"></script>

<script src="{{ asset('assets/front/js/contact-form-script.js') }}"></script>

<script src="{{ asset('assets/front/js/jquery.ajaxchimp.min.js') }}"></script>

<script src="{{ asset('assets/front/js/jquery.meanmenu.js') }}"></script>

<script src="{{ asset('assets/front/js/jquery-modal-video.min.js') }}"></script>

<script src="{{ asset('assets/front/js/wow.min.js') }}"></script>

<script src="{{ asset('assets/front/js/lightbox.min.js') }}"></script>

<script src="{{ asset('assets/front/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('assets/front/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.appear.min.js') }}"></script>

<script src="{{ asset('assets/front/js/jquery.nice-select.min.js') }}"></script>

<script src="{{ asset('assets/front/js/custom.js') }}"></script>
@stack('custom-script')
</body>

</html>
