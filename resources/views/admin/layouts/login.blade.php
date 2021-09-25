@extends('admin.layouts.app')

@section('content')


<div class="container">
{{-- @auth('staff')
    <p>{{dd(auth()->guard('staff')->user()->name)}}</p>
@endauth --}}
    <form class="login-form" action="{{route('staff.store')}}" method="POST">
        @csrf
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" name="email" placeholder="Username" autofocus>
          @error('email')
          <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Password">
        @error('password')
          <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <label class="checkbox">
                <input type="checkbox" value="remember-me"> 
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
      </div>
    </form>
   
  </div>
@endsection