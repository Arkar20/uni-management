@extends('admin.layouts.app')

@section('content')
  
@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
  @endforeach
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

                <form class="form-horizontal " method="post" action="{{route('teacher.store')}}">
                    @csrf
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" value="{{old('name')}}">
                     @error('name')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">E-mail</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="email" value="{{old('email')}}">
                     @error('email')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Ph-Number</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="contact_number" value="{{old('contact_number')}}">
                     @error('email')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="password" >
                     @error('password')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Confirmed Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="password_confirmation" >
                     @error('password_confirmation')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                  </div>

                  <div class="form-group">
                       <label class="col-sm-2 control-label">Address</label>
                  <div class="panel-body col-lg-10 flex justify-content-center">
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="address" >{{old('address')}}</textarea>
                    @error('address')
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

@endsection