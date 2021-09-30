@extends('students.layouts.app')

@section('content')

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
        

                      
          

@endsection