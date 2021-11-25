@extends('admin.layouts.app')

@section('content')
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Form elements</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Forms</li>
              <li><i class="fa fa-file-text-o"></i>Form elements</li>
            </ol>
          </div>
        </div>
         <div class="row">
          <div class="col-lg-12">
            
            <section class="panel">
              <header class="panel-heading">
                Form Elements
              </header>
            
              <div class="panel-body">

              {{-- @if(request()->route()->getName()=="course.index") --}}
                <form class="form-horizontal " method="post" action="{{route('exam.store')}}" enctype="multipart/form-data">
                    @csrf
                   

                    <input type="hidden" name="course_id" value="{{$course->id}}" />
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Exam Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" >
                     @error('exam')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Exam Date</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="exam_date" >
                     @error('exam_date')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                  </div>
                 
                  <div class="form-group">
                       <label class="col-sm-2 control-label">Description</label>
                  <div class="panel-body col-lg-10 flex justify-content-center">
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="desc"></textarea>
                    @error('desc')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                  </div>

                   <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <button class="btn btn-default" type="button">Cancel</button>
                      </div>
                    </div>
                </form>
              {{-- @endif  --}}
               
         @endsection