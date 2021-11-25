@extends('admin.layouts.app')

@section('content')
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
                <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Exam Name</th>
                    <th>Course</th>
                    <th>Exam Date</th>
                    <th>Desc</th>
                    <th>Action</th>
                    {{-- <th>Actions</th> --}}
                  </tr>
                </thead>
                <tbody>
                 @forelse($exams as $index=>$exam)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$exam->name}}</td>
                        <td>{{$exam->course->name}}</td>
                        <td>{{$exam->exam_date}}</td>
                        <td>{{$exam->desc}}</td>
                        <td>
                                <div class="btn-group">
                                    
                                    <form action="{{route('exam.destroy',$exam->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                         <button class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></button>
                                    </form>
                                         {{-- <a class="btn btn-primary" href="{{route('student.show',$student->id)}}"><i class="icon_plus_alt2"></i></a> --}}
                                </div>
                         </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="6" class="text-center h3">No Exams Assigned Yet!</td>
                    </tr>
                  @endforelse
                  
                </tbody>
              </table>
              <div class="d-flex  justify-content-center">
                {{$exams->links()}}
              </div>

@endsection