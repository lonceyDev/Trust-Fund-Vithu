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
    <div class="page-title-area title-bg-six">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>Events</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li>
                                <span>Event</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<section class="blog-area three ptb-100">
    <div class="container">
      <div class="row">
     @foreach ($events as $event)
        <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="top">
                            <a href="{{route('event-details', $event->slug)}}">
                                @if($event->featured_image)
                                    <img class="event-image" src="{{ asset('storage/'.$event->featured_image) }}" alt="Blog">
                                @else
                                    <p>No image available</p>
                                @endif
                            </a>
                        </div>
                        <div class="bottom">
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    <span class="date">{{ \Carbon\Carbon::parse($event->publish_at)->format('d M Y') }}</span>
                                </li>
                                <li>
                                    <i class="icofont-user-alt-3"></i>
                                    <span>By:</span>
                                    <a href="{{route('event-details',$event->slug)}}">VTF</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="{{route('event-details',$event->slug)}}">{{$event->title}} </a>
                            </h3>
                            <p></p>
                            <a class="blog-btn" href="{{route('event-details',$event->slug)}}">Read More</a>
                        </div>
                    </div>
                </div>
           @endforeach                   
    </div>
    <div class="pagination-area">
        {{ $events->links() }}
    </div>
</section>

@endsection

