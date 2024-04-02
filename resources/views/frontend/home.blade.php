@extends('layouts.front.index_blade')
    @push('custom-style')
        <style>
            .owl-carousel .owl-item img {
                min-height: 180px;
            }

       </style>
    @endpush
@section('content')
   
    <main>
        <div class="video-banner-area">
            <div class="video-overlay"></div>

            <video loop="" muted="" autoplay="" poster="#" class="background-video">
                <source src="{{ asset('assets/front/img/home-video.mp4') }}" type="video/mp4">
            </video>


            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="video-banner-content">
                            <h1>We help all of the people in need around the world</h1>
                            <p>It is a long established fact that a reader will be page distracted by the readable content
                                of a pain</p>
                            <div class="banner-btn-area">
                                <a class="common-btn banner-btn" href="{{ route('donation') }}">Get Start A Fundraising</a>
                                <a class="common-btn" href="{{ route('donation') }}">Donate Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- About  --}}
        <div class="about-area two pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <span class="sub-title">About us</span>
                                <h2>Who we are?</h2>
                            </div>
                            <p> <b>Vithu Trust Fund</b>
                                is a  dedicated charity organisation committed to improving and safeguarding the lives of children in 
                                Sri Lanka and raising voice for the needy and providing essential support to those who need it most.
                            </p>
                            <p>
                                There are thousands of children who go through the day without a single nourishing meal. 
                                They include war victims ,  who have lost their breadwinners and cast doubt on our children's future. 

                            </p>
                            <ul>
                                <li>
                                    <span>01</span>
                                    Funds for Education

                                </li>
                                <li>
                                    <span>02</span>
                                    Funds for Shelter
                                </li>
                                <li>
                                    <span>03</span>
                                    Funds for upbringing children
                                </li>
                                <li>
                                    <span>04</span>
                                    Funds for the elderly
                                </li>
                            </ul>
                            <div class="about-btn-area">
                                <a class="common-btn about-btn" href="{{ route('donation') }}">Get Start A Fundraising</a>
                                <a class="common-btn" href="{{ route('about.about-us') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="{{ asset('assets/front/img/about/about-main7.jpg') }}" alt="About">
                            {{-- <div class="video-wrap">
                                <button class="js-modal-btn">
                                    <i class="icofont-ui-play"></i>
                                </button>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="feature-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-item">
                            <i class="flaticon-solidarity"></i>
                            <h3>
                                <a href="{{ route('volunteering') }}">Be a volunteer</a>
                            </h3>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply rom text. Contrary to popular belief is
                                not simply.</p>
                            <a class="feature-btn" href="{{ route('volunteering') }}">Join Now</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-item two">
                            <i class="flaticon-donation"></i>
                            <h3>
                                <a href="{{ route('donation') }}">Donate now</a>
                            </h3>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply rom text. Contrary to popular belief is
                                not simply.</p>
                            <a class="feature-btn" href="{{ route('donation') }}">Join Now</a>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                        <div class="feature-item three">
                            <i class="flaticon-love"></i>
                            <h3>
                                <a href="{{ route('contact.create') }}">Show your love</a>
                            </h3>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply rom text. Contrary to popular belief is
                                not simply.</p>
                            <a class="feature-btn" href="{{ route('contact.create') }}">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="benefit-area three pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Core features</span>
                    <h2>Our Values</h2>
                    <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and
                        individual citizens that are making.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="benefit-item">
                            <i class="flaticon-house"></i>
                            <h3>Leading</h3>
                            <p>With oppressed and marginalized groups, future generations and partners.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="benefit-item three">
                            <i class="flaticon-fast-food"></i>
                            <h3>Feeding</h3>
                            <p>Deduction of poverty of himself and re motivated of Sustainability income</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="benefit-item two">
                            <i class="flaticon-hospital"></i>
                            <h3>Protect</h3>
                            <p>The leading groups should be gain proper skill from the Common life & Individual human rights
                                and democratic Government.

                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="benefit-item four">
                            <i class="flaticon-graduation-cap"></i>
                            <h3>Participation</h3>
                            <p>Every participant will participate each activities, getting skill, positive cooperation and
                                ensuring rights of society.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Projects --}}
        <section class="donations-area three pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Causes to care</span>
                    <h2>Be the reason of someone smiles</h2>
                    <p>Help others by donating to their fundraiser, or start one for someone you care about.</p>
                </div>
                <div class="row">
                    @foreach ($projects as $project)
                        <div class="col-sm-6 col-lg-4">
                            <div class="donation-item">
                                <div class="img">
                                    <a href="{{ route('project-details',$project->slug) }}">
                                        @if($project->featured_image) 
                                            <img src="{{ asset('storage/' . $project->featured_image) }}" alt="Blog">
                                        @else
                                            <p>No image available</p>
                                        @endif
                                    </a>
                                </div>

                                <div class="inner">
                                    <div class="top">
                                        <a class="tags text-capitalize"
                                            href="{{ route('project-details',$project->slug) }}">{{ $project->status }}</a>
                                        <h3>
                                            <a
                                                href="{{ route('project-details', $project->slug) }}">{{ $project->title }}</a>
                                        </h3>
                                    </div>
                                    <div class="bottom">

                                        <div class="skill">
                                            <div class="skill-bar skill1 wow fadeInLeftBig">
                                                <span class="skill-count1">85%</span>
                                            </div>
                                        </div>
                                        <b></b>
                                        <ul>
                                            <li>
                                                <h4>Expected Amount</h4>
                                                <p></p>
                                                <i class="icofont-location-pin"></i>
                                                <span>LKR</span> {{ number_format($project->expected_amount) }}
                                            </li>
                                            <li>
                                                <h4>Project Amount</h4>
                                                <p></p>
                                                <i class="icofont-location-pin"></i>
                                                <span>LK</span>
                                                {{ number_format($project->project_amount) }}
                                            </li>
                                        </ul>
                                        <h4>Donated by <span>60 people</span></h4>
                                        <p></p>
                                        <a class="common-btn"
                                            href="{{ route('project-details',$project->slug) }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- End Projects --}}
        {{-- events --}}
        <section class="event-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Our events</span>
                    <h2>Upcoming events near you</h2>
                </div>
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="event-item">
                            @if ($event)
                                <img src="{{ asset('assets/front/img/event/event1-13.jpg') }}" alt="Event">

                                <div class="inner">
                                    <h4>
                                        {{ \Carbon\Carbon::parse($event->events_at)->format('d') }}
                                        <span
                                            class="month">{{ \Carbon\Carbon::parse($event->events_at)->format('M') }}</span>
                                    </h4>
                                    <h3>
                                        <a href="{{ route('event-details',$event->slug) }}">{{ $event->title }}
                                        </a>
                                    </h3>
                                    <ul>
                                        <li>
                                            <i class="icofont-location-pin"></i>
                                            <span>{{ $event->location }}</span>

                                        </li>
                                    </ul>
                                @else
                                    <p>No upcoming events available</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    @foreach ($events as $event)
                    
                        <div class="event-item-right">

                          {{-- @dd($event->events_at) --}}
                            <h4>
                                {{ \Carbon\Carbon::parse($event->events_at)->format('d') }}
                                <span class="month">{{ \Carbon\Carbon::parse($event->events_at)->format('M') }}</span>
                            </h4>
                            <h3>
                                <a href="{{ route('event-details',$event->slug) }}">{{ $event->title }} </a>

                            </h3>
                            <ul>

                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <span>{{ $event->location }}</span>
                                </li>
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
            </div>
        </section>
        {{-- End events --}}
        <div class="counter-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-6 col-lg-3">
                        <div class="counter-item">
                            <i class="flaticon-index"></i>
                            <h3>
                                <span class="odometer" data-count="550">00</span>
                                <span class="target">+</span>
                            </h3>
                            <p>Children we educated</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-3">
                        <div class="counter-item">
                            <i class="flaticon-event"></i>
                            <h3>
                                <span class="odometer" data-count="1200">00</span>
                                <span class="target">+</span>
                            </h3>
                            <p>Shelters we built</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-3">
                        <div class="counter-item">
                            <i class="flaticon-charity"></i>
                            <h3>
                                <span class="odometer" data-count="900">00</span>
                                <span class="target">+</span>
                            </h3>
                            <p>Children we supported</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-3">
                        <div class="counter-item">
                            <i class="flaticon-helping-hand"></i>
                            <h3>
                                <span class="odometer" data-count="1900">00</span>
                                <span class="target">+</span>
                            </h3>
                            <p>Elders - We take care of</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="work-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="work-content">
                            <div class="section-title">
                                <span class="sub-title">How we work</span>
                                <h2>We exist for non-profits, social enterprises, community groups</h2>
                            </div>
                            <ul>
                                <li>
                                    <h3><span>01</span>Raise money from different sources</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, pariatur esse
                                        animi temporibus iusto at dolorum</p>
                                </li>
                                <li>
                                    <h3><span>02</span>Giving relief in rural area all over the world</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, pariatur esse
                                        animi temporibus iusto at dolorum</p>
                                </li>
                                <li>
                                    <h3><span>03</span>Gather all the money and giving relief in need</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, pariatur esse
                                        animi temporibus iusto at dolorum</p>
                                </li>
                                <li>
                                    <h3><span>04</span>Go to the country that really needs help</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, pariatur esse
                                        animi temporibus iusto at dolorum</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="work-img">
                            <img src="{{ asset('assets/front/img/work/work2.jpeg') }}" alt="Work">
                            <img src="{{ asset('assets/front/img/work/work2.jpeg') }}" alt="Work">
                        </div>
                    </div>
                </div>
            </div>
        </section>

{{-- Gallery Start --}}
        {{-- <section class="gallery-area two pt-100 pb-70">
            <div class="container-fluid">
                <div class="section-title">
                    <span class="sub-title">Our gallery</span>
                    <h2>Discover the best things we do</h2>
                    <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and
                        individual citizens that are making.</p>
                </div>
                <div class="gallery-slider owl-theme owl-carousel">
               
                    
            @foreach ($projects as $image)
                <div class="gallery-item">
                    <a href="{{ asset('storage/'.$image) }}" data-lightbox="roadtrip">
                        <img src="{{ asset('storage/'.$image) }}" alt="project">
                        <i class="icofont-eye"></i>
                    </a>
                </div>
           @endforeach
                    

                </div>
            </div>
        </section> --}}
{{-- End Gallery--}}

        {{-- Blogs --}}
    <section class="blog-area three pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Latest news & blog</span>
                    <h2>Latest charity blog</h2>
                    <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and
                        individual citizens that are making.</p>
                </div>
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-sm-6 col-lg-4">
                            <div class="blog-item">
                                <div class="top">
                                    <a href="{{ route('blog-details',$blog->slug) }}">
                                        <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="Blog">
                                    </a>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li>
                                            <i class="icofont-calendar"></i>
                                            <span
                                                class="date">{{ \Carbon\Carbon::parse($blog->publish_at)->format('d M Y') }}</span>
                                        </li>
                                        <li>
                                            <i class="icofont-user-alt-3"></i>
                                            <span>By:</span>
                                            <a href="#">VTF</a>
                                        </li>
                                    </ul>
                                    <h3>
                                        <a href="{{ route('blog-details',$blog->slug) }}">{{ $blog->title }}
                                        </a>
                                    </h3>
                                    <p></p>
                                    <a class="blog-btn" href="{{ route('blog-details',$blog->slug) }}">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

@endsection
