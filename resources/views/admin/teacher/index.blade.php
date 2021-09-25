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
                    <th>Teacher Name</th>
                    <th>Contact Number</th>
                    <th>E-Mail</th>
                    <th>Address</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($teachers as $index=>$teacher)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$teacher->name}}</td>
                        <td>{{$teacher->contact_number}}</td>
                        <td>{{$teacher->email}}</td>
                        <td>{{$teacher->address}}</td>
                        <td>
                                <div class="btn-group">
                                    
                                    <form action="{{route('teacher.destroy',$teacher->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                         <button class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></button>
                                    </form>
                                         <a class="btn btn-primary" href="{{route('teacher.show',$teacher->id)}}"><i class="icon_plus_alt2"></i></a>
                                </div>
                         </td>
                    </tr>
                  @endforeach
                  
                </tbody>
              </table>
              <div class="d-flex  justify-content-center">
                {{$teachers->links()}}
              </div>

@endsection