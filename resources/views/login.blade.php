@extends('layout')
@section('title', 'Login')
@section('content')
 <div class="container" style="background-color: rgb(239, 241, 241)" >
   <div class="mt-5">
      @if($errors->any())
        <div class="col-12">
              @foreach($errors->all() as $error)
              <div class="alert alert-danger">{{$error}}</div>
              @endforeach
        </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif

          @if(session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
  </div>

    <form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto" style="width: 500px">
        @csrf
        <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label" style="font-size: small">Email address</label>
             <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter you email" style="font-size: small">
        <div id="emailHelp" class="form-text" style="font-size: small">Donot share your email with anyone else.</div>
        </div>
      <div class="mb-3">
             <label for="exampleInputPassword1" class="form-label" style="font-size: small">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password" style="font-size: small">
          </div>
        <div class="mb-3 form-check">
             <input type="checkbox" class="form-check-input" id="exampleCheck1">
             <label class="form-check-label" for="exampleCheck1" style="font-size: small">Check me out</label>
        </div>
  <button type="submit" class="btn btn-primary" style="font-size: small">Login</button>
</form>
 </div>
@endsection   