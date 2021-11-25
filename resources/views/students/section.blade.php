@extends('students.layouts.app')

@section('content')
 <!-- Start Banner Hero -->
    <div id="work_single_banner" class="bg-light w-100">
        <div class="container-fluid text-light d-flex justify-content-center align-items-center border-0 rounded-0 p-0 py-5">
            <div class="banner-content col-lg-8 m-lg-auto text-center py-5 px-3">
                <h1 class="banner-heading h2 pb-5 typo-space-line-center">{{$section->course->name}}<h1>
                </h1>
                <h3 class="h4 pb-2 light-300">{{$section->course->teacher->name}}</h3>
                <p class="banner-footer light-300">
                  {{$section->course->desc}}
                </p>
            </div>
        </div>
    </div>
    <!-- End Banner Hero -->
    <!-- End Feature Work -->
     <section class="container py-5">

        <div class="row pt-5">
            <div class="worksingle-content col-lg-8 m-auto text-left justify-content-center">
                <h2 class="worksingle-heading h3 pb-3 light-300 typo-space-line">{{$section->course->name}}</h2>
                <p class="worksingle-footer py-3 text-muted light-300">
                    {{$section->course->desc}}
                </p>
            </div>
        </div><!-- End Blog Cover -->
    </section>
    <div class="d-flex justify-content-center pb-5 pt-sm-0 mt-5 px-xl-3">
                <div class="pricing-table card h-100 shadow-sm border-0 py-5">
                    <div class="pricing-table-body card-body text-center align-self-center p-md-0">
                        <i class="pricing-table-icon display-3 bx bx-package text-secondary"></i>
                        <h2 class="pricing-table-heading h5 semi-bold-600">{{$section->name}}</h2>
                        <p>${{$section->course->price}}</p>
                      
                      
                    </div>
                </div>
        </div>
         <div class="container col-lg-8 card my-2 ">
                <h3>Credit Card Infromation</h3>
                <form class="contact-form row" method="POST" action="{{route('course.attend')}}" role="form">
                    @csrf
                    <input type="hidden" name="section" value="{{$section->id}}"/> 
                    <div class="col-lg-12 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingname" name="inputname" placeholder="Name">
                            <label for="floatingname light-300">Name</label>
                        </div>
                    </div>

                    <div class="col-md-12 col-12 m-auto text-end">
                        <button type="submit" class="btn btn-secondary rounded-pill px-md-5 px-4 py-2 radius-0 text-light light-300">Join</button>
                    </div>
                </form>
            </div>
@endsection