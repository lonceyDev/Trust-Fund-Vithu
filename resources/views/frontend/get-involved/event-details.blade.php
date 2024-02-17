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
                                    <span class="date">{{ \Carbon\Carbon::parse($event->publish_at)->format('d M Y') }}</span>
                                </li>
                                <li>
                                    <i class="icofont-user-alt-3"></i>
                                    By - <a href="#">{{$event->user->name}}</a>
                                </li>
                            </ul>
                            <h2>{{$event->title}}</h2>
                                @if($event->featured_image)
                                 <img src="{{ asset('storage/'.$event->featured_image) }}" alt="event">
                                @else
                                    <p>No image available</p>
                                @endif
                                <?php
                                $descriptionWithoutUrls = preg_replace('/<a\s+(?:[^>]*?\s+)?href=([\'"])(.*?)\1/', '<a href="#"', $event->description);
                                ?>
                                
                                <p style="text-align: center;">{!! nl2br(strip_tags($descriptionWithoutUrls, '<p><br><strong><em><ul><li><img>')) !!}</p>
                                
                            {{-- <p style="text-align: center;">{{$event->description}}<br></p> --}}
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
                                            @if($recentEvent->featured_image)
                                                <img src="{{ asset('storage/'.$recentEvent->featured_image) }}" alt="event"/>
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
                <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and individual citizens that are making.</p>
            </div>
        
            @if (isset($event->gallery) && is_array($event->gallery))
                    <div class="gallery-slider owl-theme owl-carousel">
                        @foreach ($event->gallery as $image)
                            <div class="gallery-item">
                                <a href="{{ asset('storage/'.$image) }}" data-lightbox="roadtrip">
                                    <img src="{{ asset('storage/'.$image) }}" alt="Gallery">
                                    <i class="icofont-eye"></i>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>No gallery images found for this project.</p>
                @endif
            </div>
      
        </div>
   </section>
            </div>
        </div>
    </div>
</main>
@endsection
