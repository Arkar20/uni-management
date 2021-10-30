@extends('students.layouts.app')

@section('content')
<div id="app">
    <seach-component 
                        />
</div>
    <!-- Start Banner Hero -->
    <div id="work_banner" class="banner-wrapper bg-light w-100 py-5">
        <div class="banner-vertical-center-work container text-light d-flex justify-content-center align-items-center py-5 p-0">
            <div class="banner-content col-lg-8 col-12 m-lg-auto text-center">
                <h1 class="banner-heading h2 display-3 pb-5 semi-bold-600 typo-space-line-center">Our Work</h1>
                <h3 class="h4 pb-2 regular-400">Elit, sed do eiusmod tempor incididunt</h3>
                <p class="banner-body pb-2 light-300">
                    Vector illustration <a class="text-white" href="http://freepik.com/" target="_blank">Freepik</a>.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                    commodo viverra maecenas accumsan lacus.
                </p>
                <button type="submit" class="btn rounded-pill btn-outline-light px-4 me-4 light-300">Learn More</button>
                <button type="submit" class="btn rounded-pill btn-secondary text-light px-4 light-300">Contact Us</button>
            </div>
        </div>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Our Work -->
    <section class="container py-5">
        <div class="row justify-content-center my-5">
            <div class="filter-btns shadow-md rounded-pill text-center col-auto">
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4 active" data-filter=".project" href="#">All</a>
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".business" href="#">Business</a>
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".marketing" href="#">Marketing</a>
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".social" href="#">Social Media</a>
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".graphic" href="#">Graphic</a>
            </div>
        </div>

        <div class="row projects gx-lg-5">
            @forelse ($courses as $course)
            <a href="{{route('course.single',$course->id)}}" class="col-sm-6 col-lg-4 text-decoration-none project marketing social business mb-4">
                <div class="service-work overflow-hidden card mb-5 mx-5 m-sm-0">
                    <img class="card-img-top" src="{{asset($course->getCourseImg())}}" alt="{{$course->name}}" style="height:400px"/>
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">{{$course->name}}</h5>
                        <p class="card-text light-300 text-dark m-0">
                           {{substr($course->desc,0,20)}}...
                        </p>
                        <b>Major-{{$course->major}}</b> <br>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            @empty
                <h3>No Courses Found...</h3>
            @endforelse
           
           
           
         
            
        </div>
        <div class="container d-flex justify-content-center">
            {{$courses->links()}}
        </div>
    </section>
    <!-- End Our Work -->
@endsection