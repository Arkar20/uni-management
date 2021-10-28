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
                    <th>Student Name</th>
                    <th>E-Mail</th>
                    <th>NRC Number</th>
                    <th>DOB</th>
                    <th>Address</th>
                    {{-- <th>Actions</th> --}}
                  </tr>
                </thead>
                <tbody>
                 @foreach($students as $index=>$student)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->nrc}}</td>
                        <td>{{$student->dob}}</td>
                        <td>{{$student->address}}</td>
                        <td>
                                <div class="btn-group">
                                    
                                    {{-- <form action="{{route('student.destroy',$student->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                         <button class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></button>
                                    </form> --}}
                                         {{-- <a class="btn btn-primary" href="{{route('student.show',$student->id)}}"><i class="icon_plus_alt2"></i></a> --}}
                                </div>
                         </td>
                    </tr>
                  @endforeach
                  
                </tbody>
              </table>
              <div class="d-flex  justify-content-center">
                {{$students->links()}}
              </div>

@endsection