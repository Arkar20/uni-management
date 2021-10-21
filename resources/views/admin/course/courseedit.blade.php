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
                <form class="form-horizontal " action="{{route('course.update',$course->id)}}"  method="POST"  enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" value="{{$course->name}}">
                     @error('name')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                  </div>

                
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Choose Teacher</label>
                    <div class="col-sm-10">
                     <select name="teacher_id" id="section" class="form-control">
                         <option value="{{$course->teacher_id}}" selected>{{$course->teacher->name}}"</option>

                        @foreach (App\Models\Teacher::all() as $teacher)
                         <option value={{$teacher->id}}>{{$teacher->name}}</option>
                        @endforeach
                     </select>
                     @error('teacher')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Course Start Date</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="start_date" value="{{$course->start_date}}">
                     @error('start_date')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Course End Date</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="end_date" value="{{$course->end_date}}">
                     @error('end_date')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Price</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="price" value="{{$course->price}}">
                     @error('price')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Course Image</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" name="img" value="{{$course->course_img}}">
                     @error('price')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Major</label>
                    <div class="col-sm-10">
                      <select  class="form-control" name="major">
                        <option value="{{$course->major}}">{{$course->major}}</option>
                        <option value="Civil">Civil</option>
                        <option value="Mechanical">Mechanical</option>
                        <option value="Mechantronic">Mechantronic</option>
                        <option value="Information Technology">Information Technology</option>
                        <option value="Chemical">Chemical</option>
                      </select>
                     @error('price')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                  </div>
                  
                 
                  <div class="form-group">
                       <label class="col-sm-2 control-label">Description</label>
                  <div class="panel-body col-lg-10 flex justify-content-center">
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="desc">{{$course->desc}}</textarea>
                    @error('desc')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                  </div>

                   <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-success" type="submit">Update</button>
                        <button class="btn btn-default" type="button">Cancel</button>
                      </div>
                    </div>
                </form>
              {{-- @endif  --}}
                
              </div>
            </section>
           
               
         @endsection