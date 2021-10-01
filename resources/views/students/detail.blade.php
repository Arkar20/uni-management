@extends('students.layouts.app')

@section('content')
<<<<<<< HEAD
   <!-- Start Banner Hero -->
    <div id="work_single_banner" class="bg-light w-100">
        <div class="container-fluid text-light d-flex justify-content-center align-items-center border-0 rounded-0 p-0 py-5">
            <div class="banner-content col-lg-8 m-lg-auto text-center py-5 px-3">
                <h1 class="banner-heading h2 pb-5 typo-space-line-center">{{$course->name}}<h1>
                </h1>
                <h3 class="h4 pb-2 light-300">{{$course->teacher->name}}</h3>
                <p class="banner-footer light-300">
                  {{$course->desc}}
                </p>
            </div>
        </div>
    </div>
    <!-- End Banner Hero -->

    <!-- Start Feature Work -->

    <!-- End Feature Work -->
     <section class="container py-5">

        <div class="row pt-5">
            <div class="worksingle-content col-lg-8 m-auto text-left justify-content-center">
                <h2 class="worksingle-heading h3 pb-3 light-300 typo-space-line">{{$course->name}}</h2>
                <p class="worksingle-footer py-3 text-muted light-300">
                    {{$course->desc}}
                </p>
            </div>
        </div><!-- End Blog Cover -->
         

        <div class="row">
            <div class="col-md-8 m-auto text-left justify-content-center">
                <p class="display-6 py-4 ps-4 border border-5 border-top-0 border-end-0 border-bottom-0 border-start">
                    <i>
                          "Vestibulum vestibulum est eu lorem laoreet suscipit. Duis auctor,
                          metus vel sollicitudin hendrerit, elit neque pulvinar magna, non
                          sodales orci turpis blandit quam."
                      </i>
                </p>
                <p class="text-muted light-300">
                    Nam tortor quam, aliquet vel nibh sit amet, faucibus bibendum nisl.
                    Donec vehicula nulla justo, vel sodales massa vestibulum nec. Praesent
                    non orci sed massa fringilla rutrum at et odio. Quisque est orci,
                    elementum sed neque ac, suscipit consectetur leo. Cras fermentum luctus
                    cursus. Ut porta, augue vel tempus congue, augue purus vulputate ex,
                    lacinia lobortis arcu metus sed lectus.
                </p>
            </div>
        </div><!-- End Qute -->
          <div class="d-flex justify-content-center">
                            <a href="{{route('student.pricing',$course->id)}}" type="submit" class="btn btn-secondary text-white px-md-4 px-2 py-md-3 py-1 radius-0 light-300">Join Class</a>
              </div>
      </section>
    <!-- Start Related Post -->
    <article class="container-fluid bg-light">
        <div class="container">
            <div class="worksingle-related-header row">
                <h1 class="h2 py-5">Related Post</h1>
                <div class="col-md-12 text-left justify-content-center">
                    <div class="row gx-5">


                        <div class="col-sm-6 col-lg-4 mb-5">
                            <a href="#" class="related-content card text-decoration-none overflow-hidden h-100">
                                <img class="related-img card-img-top" src="./assets/img/related-post-01.jpg" alt="Card image cap">
                                <div class="related-body card-body p-4">
                                    <h5 class="card-title h6 m-0 semi-bold-600 text-dark">Digital Marketing</h5>
                                    <p class="card-text pt-2 mb-1 light-300 text-dark">
                                        Lorem ipsum dolor sit amet, consectetur.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-primary light-300">Read more</span>
                                        <div class="light-300">
                                            <i class='bx-fw bx bx-heart me-1'></i>5
                                            <i class='bx-fw bx bx-chat    ms-1 me-1'></i>3
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 mb-5">
                            <a href="#" class="related-content card text-decoration-none overflow-hidden h-100">
                                <img class="related-img card-img-top" src="./assets/img/related-post-02.jpg" alt="Card image cap">
                                <div class="related-body card-body p-4">
                                    <h5 class="card-title h6 m-0 semi-bold-600 text-dark">App Development</h5>
                                    <p class="card-text pt-2 mb-1 light-300 text-dark">
                                        Tempor incididunt ut labore et dolore.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-primary light-300">Read more</span>
                                        <div class="light-300">
                                            <i class='bx-fw bx bx-heart me-1'></i>11
                                            <i class='bx-fw bx bx-chat    ms-1 me-1'></i>9
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 mb-5">
                            <a href="#" class="related-content card text-decoration-none overflow-hidden h-100">
                                <img class="related-img card-img-top" src="./assets/img/related-post-03.jpg" alt="Card image cap">
                                <div class="related-body card-body p-4">
                                    <h5 class="card-title h6 m-0 semi-bold-600 text-dark">Digital Marketing</h5>
                                    <p class="card-text pt-2 mb-1 light-300 text-dark">
                                        Consectetur adipiscing elit.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-primary light-300">Read more</span>
                                        <div class="light-300">
                                            <i class='bx-fw bx bx-heart me-1'></i>31
                                            <i class='bx-fw bx bx-chat    ms-1 me-1'></i>2
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

    </article>
    <!-- End Related Post -->

=======

@include('students.layouts.carousel')
<form action="{{route('course.attend')}}" class="portfolio-info card container mt-10" method="post">
    @csrf
    <input type="hidden" value="{{$course->id}}" name="course">
              <h3>Course information</h3>
              <ul>
                <li><strong>Name</strong>: {{$course->name}}</li>
                <li><strong>Course Start date</strong>: {{$course->getStartDate()}}</li>
                <li><strong>Course End Date</strong>:{{$course->getEndDate()}}</li>
              </ul>
              <div class="containers d-inline">
            
            @foreach ($course->sections as $section)
            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="section" id="inlineRadio1" value="{{$section->id}}">
                                <label class="form-check-label" for="inlineRadio1">{{$section->name}}</label>
             </div>
             @endforeach

        </div>
                
        <button type="submit" class="btn btn-primary">Attend</button>
</form>
        

                      
          
>>>>>>> 3b7a8e1a23596b5e45efc429ecce9ae737848e8e

@endsection