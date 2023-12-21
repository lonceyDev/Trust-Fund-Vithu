@extends('layouts.front.index_blade')
@section('content')
<main>
    <!-- Main Content Area -->
    <div class="page-title-area title-bg-seven">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>{{$event->title}}</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li>
                                <span>{{$event->title}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="details-item">
                        <div class="details-img">
                         <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    {{$event->publish_at}} 
                                </li>
                                <li>
                                    <i class="icofont-user-alt-3"></i>
                                    By - <a href="#">{{$event->user->name}}</a>
                                </li>
                            </ul>
                            <h2>{{$event->title}}</h2>
                                @if(is_array($event->featured_image) && count($event->featured_image) > 0)
                                 <img src="{{ asset('storage/'.$event->featured_image[0]) }}" alt="event">
                                @else
                                    <p>No image available</p>
                                @endif
                            <p style="text-align: center;">{{$event->description}}<br></p>
                        </div>
                      <div class="details-share mt-2">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="left">
                                        <ul>
                                            <li>
                                                <span>Follow Us:</span>
                                            </li>
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
                                                <a href="https://www.youtube.com/channel/UCqWcfwkS8hLV3A5rdu22cDw/videos?disable_polymer=1" target="_blank">
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
                        </div>
                    </div>
                </div>
                <!-- Recent Posts Sidebar -->
                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="post widget-item">
                            <h3>Recent Event</h3>
                            @foreach ($recentEvents as $recentEvent)
                                <div class="post-inner">
                                    <ul class="align-items-center">
                                        <li>
                                            @if(is_array($recentEvent->featured_image) && count($recentEvent->featured_image) > 0)
                                                <img src="{{ asset('storage/'.$recentEvent->featured_image[0]) }}" alt="event"/>
                                            @else
                                                <p>No image available</p>
                                            @endif
                                        </li>
                                        <li>
                                            <h4>
                                                <a href="{{ route('event-details', ['slug' => $recentEvent->slug]) }}">
                                                    {{ $recentEvent->title }}
                                                </a>
                                            </h4>
                                            <p>By - <a href="{{ route('event-details', ['slug' => $recentEvent->slug]) }}">{{ $recentEvent->user->name }}</a></p>
                                        </li>
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                   <!-- Gallery Section -->
    <section class="gallery-area two pt-100 pb-70">
        <div class="container-fluid">
            <div class="section-title">
                <span class="sub-title">Our gallery</span>
                <h2>Discover the best things we do</h2>
            </div>
            <div class="gallery-slider owl-theme owl-carousel">
                <!-- Display multiple images in the gallery -->
                @foreach ($event->featured_image as $image)
                    <div class="gallery-item">
                        <a href="" data-lightbox="roadtrip">
                            <img src="{{ asset('storage/'.$image) }}" alt="event">
                            <i class="icofont-eye"></i>
                        </a>
                    </div>  
                @endforeach
            </div>
        </div>
    </section>
            </div>
        </div>
    </div>
</main>
@endsection
