@extends('layout')
@section('title','home')
@section('content')
    @auth
        <h3>Welcome, {{ auth()->user()->firstname }}!</h3>
    @endauth
@endsection
