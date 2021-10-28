@extends('admin.layouts.app')

@section('content')
<section id="main-content">
  <section class="wrapper">
      <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-cloud-download"></i>
              <div class="count">{{$total_students_count}}</div>
              <div class="title">Students</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count">{{$total_courses_count}}</div>
              <div class="title">Courses</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-thumbs-o-up"></i>
              <div class="count">{{$total_teachers_count}}</div>
              <div class="title">Teacher</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-cubes"></i>
              <div class="count">{{$total_sections_count}}</div>
              <div class="title">Sections</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
  </section>
</section>

@endsection