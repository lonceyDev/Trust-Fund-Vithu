<!-- completed.blade.php -->

@extends('layouts.front.index_blade')
@section('content')
<main>
    <section class="donations-area ptb-100">
        <div class="container">
            <div class="row">
                @foreach ($completedProjects as $project)
                <div class="col-sm-6 col-lg-4">
                    <div class="donation-item">
                        <div class="img">
                            <a href="{{route('project-details',['slug' => $project->slug])}}">
                                @if($project->featured_image)
                                    <img src="{{ asset('storage/'.$project->featured_image) }}" alt="project">
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
            {{ $completedProjects->links() }}
        </div>
    </section>
</main>
@endsection
