@extends('layouts.front.index_blade')
@section('content')
<main>
    <div class="page-title-area title-bg-seven">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>{{$blog->title}}</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li>
                                <span>{{$blog->title}}</span>
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
                            {{-- <img src="{{asset('storage/'.$blog->featured_image)}}" /> --}}
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    <span class="date">{{ \Carbon\Carbon::parse($blog->publish_at)->format('d M Y') }}</span>
                                </li>
                                <li>
                                    <i class="icofont-user-alt-3"></i>
                                    By - <a href="#">{{$blog->user->name}}</a>
                                </li>
                            </ul>
                            <h2>{{$blog->title}}</h2>
                            <p style="text-align: center; "><img src="{{asset('storage/'.$blog->featured_image)}}" style="width: 100%;"></p><p style="text-align: center; ">{{$blog->content}}<br></p>
                            
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
                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="post widget-item">
                            <h3>Recent Post</h3>
                            @foreach ($recentBlogs as $recentBlog )
                                <div class="post-inner">
                                    <ul class="align-items-center">
                                        <li>
                                            <img src="{{asset('storage/'.$recentBlog->featured_image)}}"  alt="recent blog" />
                                        </li>
                                        <li>
                                            <h4>
                                                <a href="{{ route('blog-details', ['slug' => $recentBlog->slug]) }}">
                                                    {{ $recentBlog->title }}
                                                </a>
                                            </h4>
                                            <p>By - <a href="{{ route('blog-details', ['slug' => $recentBlog->slug]) }}">{{ $recentBlog->user->name }}</a></p>
                                            
                                        </li>
                                    </ul>
                                </div>
                            @endforeach
                                 
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
