@extends('layouts.front.index_blade')
@push('custom-style')
<style>
    .owl-carousel .owl-item img {
        min-height: 180px;
    }
.common-btn:hover {
    color: #064674;
    background-color:rgb(252, 252, 252);
    -webkit-transform: translate(0, -5px);
    transform: translate(0, -5px);
}

.common-btn {
    color: #ffffff;
    background-color: rgb(2, 71, 127);
    display: inline-block;
    padding: 12px 25px;
    border-radius: 30px;
    font-weight: 600;
}
a {
    -webkit-transition: 0.5s all ease;
    transition: 0.5s all ease;
    text-decoration: none;
}

</style>
@endpush 
@section('content')
<main>
    <div class="page-title-area title-bg-two">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2 class="text-capitalize"> Projects</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li>
                                <span class="text-capitalize"> Projects</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="donations-area ptb-100">
        <div class="container">
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-sm-6 col-lg-4">
                        <div class="donation-item">
                            <div class="img">
                                <a href="{{route('project-details',['slug' => $project->slug])}}">
                                    @if($project->featured_image)
                                        <img class="project-image" src="{{ asset('storage/'.$project->featured_image) }}" alt="project">
                                    @else
                                       <p>No image available</p>
                                    @endif
                                </a>
                            </div>
                            <div class="inner">
                                <div class="top">
                                    <a class="tags text-capitalize" href="{{route('project-details',['slug'=>$project->slug])}}">{{$project->status}}</a>
                                    <h3>
                                        <a href="{{route('project-details',['slug'=>$project->slug])}}">{{$project->title}}</a>
                                    </h3>
                                   
                                </div>
                                <div class="bottom">
                                    {{-- <ul>
                                        <li>
                                            <i class="icofont-calendar"></i>
                                            <span class="date">{{ \Carbon\Carbon::parse($project->publish_at)->format('d M Y') }}</span>
                                        </li>
                                        <li>
                                            <i class="icofont-user-alt-3"></i>
                                            <span>By:</span>
                                            <a href="#">{{$project->user->name}} </a>
                                        </li>
                                    </ul> --}}
                                    <div class="skill">
                                        <div class="skill-bar skill1 wow fadeInLeftBig">
                                            <span class="skill-count1">85%</span>
                                        </div>
                                    </div>
                                    <p></p>
                                    <ul>
                                        <li><h4>Expected Amount</h4><p></p>
                                            <i class="icofont-location-pin"></i>
                                            <span>LK</span> {{ number_format($project->expected_amount) }}</li>
                                        <li><h4>Project Amount</h4><p></p>
                                            <i class="icofont-location-pin"></i>
                                            <span>LK</span>  
                                            {{ number_format($project->project_amount) }}</li>
                                    </ul>
                                    <h4>Donated by <span>60 people</span></h4>
                                    <p></p>
                                    <a  class="common-btn" href="{{route('project-details',['slug'=>$project->slug])}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach 
            </div> 
          
        </div>              
        <div class="pagination-area">
            {{ $projects->links() }}
        </div>
     </div>
    </section>
</main>
@endsection