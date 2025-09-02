@extends('layout')
@section('title', 'Registration')
@section('content')

 <div class="container" style="background-color: rgb(239, 241, 241)">
  
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

  <form action="{{ route('register.post') }}" method="POST" class="ms-auto me-auto" style="width: 500px">
    @csrf

    <div class="mb-3">
      <label for="firstname" class="form-label" style="font-size: small">First Name</label>
      <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter your name" style="font-size: small">
    </div>  

    <div class="mb-3">
      <label for="lastname" class="form-label" style="font-size: small">Last Name</label>
      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter your last name" style="font-size: small">
    </div>

    <div class="mb-3">
      <label for="email" class="form-label" style="font-size: small">Email address</label>
      <input type="text" name="email" class="form-control" id="email" placeholder="Enter your email" style="font-size: small">
      <div id="emailHelp" class="form-text" style="font-size: small">Do not share your email with anyone else.</div>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label" style="font-size: small">Password</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" style="font-size: small">
    </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1" style="font-size: small">Check me out</label>
    </div>

    <button type="submit" class="btn btn-primary" style="font-size: small">Submit</button>
  </form>
 </div>
@endsection
