@extends('teacher.layouts.app')

@section('content')

    <section class="container py-5">
        <div class="d-flex justify-content-center ">
            <div class="header">
                    <h1 class=" h2  text-primary pt-3">Assign the Tasks for students</h1>
                    <h2 class=" h4  regular-400">{{$course->name}}</h2>
                    <p class="  text-muted  light-300">
                    {{$course->desc}}
                    </p>
                    <p >Start: {{$course->start_date}} End: {{$course->end_date}}</p>
                    <small>Duration: {{$course->duration()}} months</small>
        </div>
       </div>
        <div class="d-flex justify-content-center">
            <div class="col-lg-8 mb-2">
                <form class="contact-form row" method="POST" action="{{route('teacher.assign',$course->id)}}" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingsubject" name="assignment_subject" placeholder="Subject">
                            <label for="floatingsubject light-300">Subject</label>
                            @error('assignment_subject')
                                  <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div><!-- End Input Subject -->
                    <div class="col-12 mt-2 mb-2">
                        <p class="m-0 p-0">Choose Document</p>
                            <input type="file" class="form-control form-control-lg light-300" id="floatingsubject" name="assignment_file" placeholder="Subject">
                         @error('assignment_file')
                                  <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div><!-- End Input Subject -->
                     <div class="col-12">
                            <p class="m-0">Due Date</p>
                            <input type="date" class="form-control form-control-lg light-300" id="floatingsubject" name="due_date" placeholder="Subject">
                           @error('due_date')
                                  <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div><!-- End Input Subject -->
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <textarea class="form-control light-300" rows="8" placeholder="Message" id="floatingtextarea" name="desc"></textarea>
                            <label for="floatingtextarea light-300">Description</label>
                             @error('desc')
                                  <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div><!-- End Textarea Message -->
                        @forelse ($course->sections as $section)
                            <input type="checkbox" name="sections[]" value="{{$section->id}}"/>{{$section->name}}
                        @empty
                            <h2>No Section to assign in this Course.</h2>
                        @endforelse


                    <div class="col-md-12 col-12 m-auto text-end">
                        <button type="submit" class="btn btn-secondary rounded-pill px-md-5 px-4 py-2 radius-0 text-light light-300">Assign</button>
                    </div>

                </form>
            </div>
            <!-- End Contact Form -->


        </div>
    </section>
@endsection