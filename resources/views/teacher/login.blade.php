@extends("teacher.layouts.app")

@section('content')
     <!-- Start Contact -->
    <section class="container py-5">

        <h1 class=" h2 text-center text-primary pt-3">Login Teacher</h1>
        {{-- <h2 class="col-12 col-xl-8 h4 text-left regular-400">Elit, sed do eiusmod tempor </h2>
        <p class="col-12 col-xl-8 text-left text-muted pb-5 light-300">
            Incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
            gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
            in voluptate.
        </p> --}}

        <div class="row pb-4">
            {{-- <div class="col-lg-4"> --}}

                {{-- <div class="contact row mb-4">
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
                </div> --}}

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

                {{-- <div class="contact row mb-4">
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
                </div> --}}

            {{-- </div> --}}


            <!-- Start Contact Form -->
            <div class="col-lg-12 ">
                <form class="contact-form row" method="POST" action="{{route('teacher.login')}}" role="form" >
                    @csrf


                    <div class="col-lg-12 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingname" name="email" placeholder="Name" value="">
                            <label for="floatingname light-300">Email</label>
                        </div>
                        @error('email')
                            <span class="text-danger text-sm-left">{{$message}}</span>
                        @enderror
                    </div><!-- End Input Name -->
                    
                    <div class="col-lg-12 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingname" name="password" placeholder="Name" value="">
                            <label for="floatingname light-300">Password</label>
                        </div>
                        @error('password')
                            <span class="text-danger text-sm-left">{{$message}}</span>
                        @enderror
                    </div><!-- End Input Name -->

                  
                    <div class="col-md-12 col-12 m-auto text-end">
                        <button type="submit" class="btn btn-secondary rounded-pill px-md-5 px-4 py-2 radius-0 text-light light-300">Login</button>
                    </div>

                </form>
            </div>
            <!-- End Contact Form -->
         

            

        </div>
    </section>
    <!--End Pricing Horizontal Section-->

    

        </div>
    </section>
    <!-- End Contact -->

    
@endsection