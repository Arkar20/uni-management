@extends("teacher.layouts.app")

@section('content')
     <!-- Start Contact -->
    <section class="container py-5">

        <h1 class="col-12 col-xl-8 h2 text-left text-primary pt-3">Edit Your Profile Page</h1>
        <h2 class="col-12 col-xl-8 h4 text-left regular-400">Elit, sed do eiusmod tempor </h2>
        <p class="col-12 col-xl-8 text-left text-muted pb-5 light-300">
            Incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
            gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
            in voluptate.
        </p>

        <div class="row pb-4">
            <div class="col-lg-4">

                <div class="contact row mb-4">
                    <div class="contact-icon col-lg-3 col-3">
                        <div class="py-3 mb-2 text-center border rounded text-secondary">
                            <i class='display-6 bx bx-news'></i>
                        </div>
                    </div>
                    <ul class="contact-info list-unstyled col-lg-9 col-9  light-300">
                        <li class="h5 mb-0">Media Contact</li>
                        <li class="text-muted">{{$teacher->name}}</li>
                        <li class="text-muted">{{$teacher->email}}</li>
                    </ul>
                </div>

                {{-- <div class="contact row mb-4">
                    <div class="contact-icon col-lg-3 col-3">
                        <div class="border py-3 mb-2 text-center border rounded text-secondary">
                            <i class='bx bx-laptop display-6' ></i>
                        </div>
                    </div>
                    <ul class="contact-info list-unstyled col-lg-9 col-9 light-300">
                        <li class="h5 mb-0">Technical Contact</li>
                        <li class="text-muted">{{$teacher->name}}</li>
                        <li class="text-muted">010-020-0340</li>
                    </ul>
                </div> --}}

                <div class="contact row mb-4">
                    <div class="contact-icon col-lg-3 col-3">
                        <div class="border py-3 mb-2 text-center border rounded text-secondary">
                            <i class='bx bx-money display-6'></i>
                        </div>
                    </div>
                    <ul class="contact-info list-unstyled col-lg-9 col-9 light-300">
                        <li class="h5 mb-0">Address</li>
                        <li class="text-muted">Mr. Richard Miles</li>
                        <li class="text-muted">010-020-0340</li>
                    </ul>
                </div>

            </div>


            <!-- Start Contact Form -->
            <div class="col-lg-8 ">
                <form class="contact-form row" method="POST" action="{{route('teacher.update')}}" role="form" >
                    @csrf
                    @method('PUT')


                    <div class="col-lg-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingname" name="name" placeholder="Name" value="{{$teacher->name}}">
                            <label for="floatingname light-300">Name</label>
                        </div>
                        @error('name')
                            <span class="text-danger text-sm-left">{{$message}}</span>
                        @enderror
                    </div><!-- End Input Name -->

                    <div class="col-lg-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingemail" name="email" placeholder="Email" value="{{$teacher->email}}">
                            <label for="floatingemail light-300">Email</label>
                             @error('email')
                            <span class="text-danger text-sm-left">{{$message}}</span>
                        @enderror
                        </div>
                    </div><!-- End Input Email -->

                    <div class="col-lg-6 mb-4">
                        <div class="form-floating">
                            <input type="password" class="form-control form-control-lg light-300" id="floatingphone" name="password" placeholder="Password">
                            <label for="floatingphone light-300">Password</label>

                        </div>
                         @error('password')
                            <span class="text-danger text-sm-left">{{$message}}</span>
                        @enderror
                    </div><!-- End Input Phone -->

                    <div class="col-lg-6 mb-4">
                        <div class="form-floating">
                            <input type="password" class="form-control form-control-lg light-300" id="floatingcompany" name="password_confrim" placeholder="Retype Password" >
                            <label for="floatingcompany light-300">Retype Password</label>
                        </div>
                    </div><!-- End Input Company Name -->

                    <div class="col-lg-12 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingcompany" name="address" value="{{$teacher->address}}">
                            <label for="floatingcompany light-300">Address</label>
                        </div>
                         @error('address')
                            <span class="text-danger text-sm-left">{{$message}}</span>
                        @enderror
                    </div><!-- End Input Company Name -->

                    <div class="col-lg-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingemail" name="contact_number" placeholder="Email" value="{{$teacher->contact_number}}">
                            <label for="floatingemail light-300">Contact Number</label>
                             @error('contact_number')
                            <span class="text-danger text-sm-left">{{$message}}</span>
                        @enderror
                        </div>
                    </div><!-- End Input Email -->


                    <div class="col-lg-12 mb-4">
                        <div class="form-floating">
                            <input type="date" class="form-control form-control-lg light-300" id="floatingcompany" name="dob" value="{{$teacher->dob}}">
                            <label for="floatingcompany light-300">DOB</label>
                        </div>
                         @error('dob')
                            <span class="text-danger text-sm-left">{{$message}}</span>
                        @enderror
                    </div><!-- End Input Company Name -->

                    <div class="col-lg-12 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingcompany" name="nrc" value="{{$teacher->nrc}}">
                            <label for="floatingcompany light-300">NRC Number</label>
                        </div>
                         @error('nrc')
                            <span class="text-danger text-sm-left">{{$message}}</span>
                        @enderror
                    </div><!-- End Input Company Name -->

                    {{-- <div class="col-12">
                        <div class="form-floating mb-4">
                            <select name="" id="" class="form-control form-control-lg light-300">
                                <option value="Male" default>Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <input type="text" class="form-control form-control-lg light-300" id="floatingsubject" name="nrc" placeholder="Subject">
                            <label for="floatingsubject light-300">Choose Gender</label>
                        </div>
                    </div> --}}
                    <!-- End Input Subject -->

                  <!-- End Textarea Message -->

                    <div class="col-md-12 col-12 m-auto text-end">
                        <button type="submit" class="btn btn-secondary rounded-pill px-md-5 px-4 py-2 radius-0 text-light light-300">Update</button>
                    </div>

                </form>
            </div>
            <!-- End Contact Form -->
             <!-- Start Pricing Horizontal Section -->
    <section class="bg-light pt-sm-0 py-5">
        <div class="container py-5">

            <h1 class="h2 semi-bold-600 text-center mt-2">Your Courses</h1>
            <p class="text-center pb-5 light-300">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut facilisis.</p>

            <!-- Start Pricing Horizontal -->
            <div class="pricing-horizontal row col-10 m-auto d-flex shadow-sm rounded overflow-hidden bg-white">
                <div class="pricing-horizontal-icon col-md-3 text-center bg-secondary text-light py-4">
                    <i class="display-1 bx bx-package pt-4"></i>
                    <h5 class="h5 semi-bold-600 pb-4 light-300">Free</h5>
                </div>
                <div class="pricing-horizontal-body offset-lg-1 col-md-5 col-lg-4 d-flex align-items-center pl-5 pt-lg-0 pt-4">
                    <ul class="text-left px-4 list-unstyled mb-0 light-300">
                        <li><i class="bx bxs-circle me-2"></i>5 teachers</li>
                        <li><i class="bx bxs-circle me-2"></i>2 TB space</li>
                        <li><i class="bx bxs-circle me-2"></i>Community Forums</li>
                    </ul>
                </div>
                <div class="pricing-horizontal-tag col-md-4 text-center pt-3 d-flex align-items-center">
                    <div class="w-100 light-300">
                        <p>$0</p>
                        <a href="#" class="btn rounded-pill px-4 btn-outline-primary mb-3">Get Now</a>
                    </div>
                </div>
            </div>
            <!-- End Pricing Horizontal -->

            

        </div>
    </section>
    <!--End Pricing Horizontal Section-->

    

        </div>
    </section>
    <!-- End Contact -->

    
@endsection