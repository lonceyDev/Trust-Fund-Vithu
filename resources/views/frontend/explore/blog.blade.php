@extends('layouts.front.index_blade')
    @push('custom-style')
        <style>
            .pagination-area {
              margin-top: 20px; 
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
                        <h2>Blog</h2>
                        <ul>
                            <li>
                                <a href="https://dev.vithu.org">Home</a>
                            </li>
                            <li>
                                <span>Blog</span>
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
     @foreach ($blogs as $blog)
        <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="top">
                            <a href="{{route('blog-details',['slug' => $blog->slug])}}">
                                <img src="{{asset('storage/'.$blog->featured_image)}}" alt="Blog">
                            </a>
                        </div>
                        <div class="bottom">
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    <span class="date">{{ \Carbon\Carbon::parse($blog->publish_at)->format('d M Y') }}</span>
                                </li>
                                <li>
                                    <i class="icofont-user-alt-3"></i>
                                    <span>By:</span>
                                    <a href="{{route('blog-details',['slug' => $blog->slug])}}">{{$blog->user->name}} </a>
                                </li>
                            </ul>
                            <h3>
                                <a href="{{route('blog-details',['slug' => $blog->slug])}}">{{$blog->title}} </a>
                            </h3>
                            <p></p>
                            <a class="blog-btn" href="{{route('blog-details', ['slug' => $blog->slug])}}">Read More</a>
                        </div>
                    </div>
                </div>
            
           @endforeach
        </div>
    </div>
            <div class="pagination-area">
                {{ $blogs->links() }}
            </div>
    </div>
</section>
</main>
@endsection