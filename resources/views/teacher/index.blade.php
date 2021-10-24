@extends('teacher.layouts.app')

@section('content')

    <section class="container py-5">
        <div class="row justify-content-center my-5">
            <div class="filter-btns shadow-md rounded-pill text-center col-auto">
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4 active" data-filter=".project" href="#">Civil</a>
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4 " data-filter=".project" href="#">IT</a>
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4 " data-filter=".project" href="#">Mechanical</a>
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4 " data-filter=".project" href="#">Mechantronic</a>
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4 " data-filter=".project" href="#">Chemical</a>
            </div>
        </div>

        <div class="row projects gx-lg-5" style="position: relative; height: 1247.97px;">
            @forelse($courses as $course)
        
            <a href="{{route('teacher.assignmentform',$course->id)}}" class="col-sm-6 col-lg-4 text-decoration-none project marketing social business" style="position: absolute; left: 0px; top: 0px;">
                <div class="service-work overflow-hidden card mb-5 mx-5 m-sm-0">
                    <img class="card-img-top" style="height:400px" src="{{asset($course->course_img?:'student/assets/img/recent-work-03.jpg')}}" alt="{{$course->title}}">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">{{$course->name}}</h5>
                        <b class="card-text light-300 text-dark font-weight-bold">
                          Total Sections-{{$course->sections_count}}
                        </b>
                        <br>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class="bx bxs-hand-right ms-1"></i>
                          </span>
                    </div>
                </div>
            </a>
        @empty
            <h2>No Courses Assigned Yet!</h2>
        @endforelse           
        </div>
        <div class="d-flex mt-2 justify-content-center">
            {{$courses->links()}}
        </div>
    </section>
@endsection