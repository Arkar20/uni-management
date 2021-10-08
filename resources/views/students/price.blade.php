@extends('students.layouts.app')

@section('content')


    <!-- Start pricing -->
    <div class="container-lg py-5">
        <div class="col-md-12 m-auto text-center py-5">
            <h1 class="pricing-header h2 semi-bold-600">Pricing</h1>
            <p class="pricing-footer">
                Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut facilisis.
            </p>
        </div>


        <div class="row px-lg-3">


            {{-- <div class="col-md-4 pb-5 pt-sm-0 mt-5 px-xl-3">
                <div class="pricing-table card h-100 shadow-sm border-0 py-5">
                    <div class="pricing-table-body card-body rounded-pill text-center align-self-center p-md-0">
                        <i class="pricing-table-icon display-3 bx bx-package text-secondary"></i>
                        <h2 class="pricing-table-heading h5 semi-bold-600">Free Plan</h2>
                        <p>$0</p>
                        <ul class="pricing-table-body text-start text-dark px-4 list-unstyled light-300">
                            <li><i class="bx bxs-circle me-2"></i>5 Users</li>
                            <li><i class="bx bxs-circle me-2"></i>2 TB space</li>
                            <li><i class="bx bxs-circle me-2"></i>Community Forums</li>
                            <li><i class="bx bxs-circle me-2"></i>Email Support</li>
                        </ul>
                        <div class="pricing-table-footer pt-5">
                            <a href="#" class="btn rounded-pill px-4 btn-outline-primary light-300">Get Now</a>
                        </div>
                    </div>
                </div>
            </div> --}}


            {{-- <div class="col-md-4 pt-sm-0 pt-3 px-xl-3">
                <div class="pricing-table card bg-secondary h-100 card-rounded shadow-sm border-0 py-5">
                    <div class="pricing-table-body card-body text-center text-white align-self-center p-md-0">
                        <i class="pricing-table-icon display-3 bx bx-package text-white py-3"></i>
                        <h2 class="pricing-table-heading h5 semi-bold-600">Standard Plan</h2>
                        <p>$120/Year</p>
                        <ul class="pricing-table-list text-start text-dark px-4 list-unstyled light-300">
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>25 to 99 Users</li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>10 TB space</li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Source Files</li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Live Chat</li>
                        </ul>
                        <div class="pricing-table-footer pt-5 pb-2">
                            <a href="#" class="btn rounded-pill px-4 btn-outline-light light-300">Get Now</a>
                        </div>
                    </div>
                </div>
            </div> --}}

        @forelse ($sections as $section)
        <div class="col-md-4 pb-5 pt-sm-0 mt-5 px-xl-3">
                <div class="pricing-table card h-100 shadow-sm border-0 py-5">
                    <div class="pricing-table-body card-body text-center align-self-center p-md-0">
                        <i class="pricing-table-icon display-3 bx bx-package text-secondary"></i>
                        <h2 class="pricing-table-heading h5 semi-bold-600">{{$section->name}}</h2>
                        <p>$840/Year</p>
                        <ul class="pricing-table-list text-start text-dark px-4 list-unstyled light-300">
                            <li><i class="bx bxs-circle me-2"></i>100 users or more</li>
                            <li><i class="bx bxs-circle me-2"></i>80 TB space</li>
                            <li><i class="bx bxs-circle me-2"></i>Full Access Sources</li>
                            <li><i class="bx bxs-circle me-2"></i>Live Chat</li>
                            <li><i class="bx bxs-circle me-2"></i>Customizations</li>
                        </ul>
                        <div class="pricing-table-footer pt-1">
                            <a href="{{route('course.section',$section->id)}}" class="btn rounded-pill px-4 btn-outline-primary light-300">Get Now</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <h3>No information available</h3>
        @endforelse
        


        </div>
    </div>
    <!-- End Content -->
            <div class="container col-lg-8 card my-2 ">
                <h3>Credit Card Infromation</h3>
                <form class="contact-form row" method="post" action="#" role="form">
                        
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