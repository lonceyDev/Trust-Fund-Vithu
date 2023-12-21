@extends('layouts.front.index_blade')
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
                                <a href="https://dev.vithu.org">Home</a>
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
                                    @if(is_array($project->featured_image) && count($project->featured_image) > 0)
                                        <img src="{{ asset('storage/'.$project->featured_image[0]) }}" alt="Blog">
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
                                   <p></p>
                                </div>
                                <div class="bottom">
                                    <div class="skill">
                                        <div class="skill-bar skill1 wow fadeInLeftBig">
                                            <span class="skill-count1">85%</span>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>{{$project->expected_amount}}</li>
                                        <li>{{$project->project_amount}}</li>
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