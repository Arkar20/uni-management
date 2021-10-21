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
            <a href="{{route('course.create')}}" class="btn btn-primary">Create New Course</a>
           
            <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Couse Name</th>
                    <th>Description</th>
                    <th>Tr Name</th>
                    <th>Section</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($courses as $index=>$course)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$course->name}}</td>
                        <td>{{$course->desc}}</td>
                        <td>{{$course->teacher->name}}</td>
                        {{-- <td>{{$course->section->section_start_date}}-{{$course->section->section_end_date}}</td> --}}
                        <td>
                                <div class="btn-group">
                                    
                                    {{-- <form action="{{route('course.delete',$course->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                         <button class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></button>
                                    </form> --}}
                                    <span class="d-flex justify-content-center">{{$course->sections->count()}}</span>
                                         <a class="btn btn-primary" href="{{route('section.index')}}"><i class="icon_plus_alt2"></i></a>
                                </div>
                         </td>
                        <td>
                                <div class="btn-group">
                                    
                                    <form action="{{route('course.delete',$course->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                         <button class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></button>
                                    </form>
                                         <a class="btn btn-primary" href="{{route('course.edit',$course->id)}}"><i class="icon_plus_alt2"></i></a>
                                </div>
                         </td>
                    </tr>
                  @endforeach
                  
                </tbody>
              </table>
              <div class="d-flex  justify-content-center">
                {{$courses->links()}}
              </div>
         @endsection