@extends('frontend.base')
@section('css')
<link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/css/signin.css')}}">
@endsection
@section('body')
@php 
  $wss = DB::table('website_setting')->orderBy('id','DESC')->first();
@endphp
<form class="form-signin" method="POST">
    @csrf
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times</button>
        <ul>
        @foreach ($errors->all() as $error)
        <li style="color:red;">{{$error}}</li>
        @endforeach
        </ul>
    </div>
    @endif
    <div class="flux justify-content-between">
      <img class="mb-8" src="{{asset($wss->logo ?? '')}}" alt="" width="150" height="100">
      <h6 class="mb-3 font-weight-normal text-dark">{{ $wss->name ?? '' }}</h6>
    </div>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="text" name="email" class="form-control mb-2" placeholder="Email address" autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password">
    @if(session()->has('msg'))
        <span style="color:red">
            {{ session()->get('msg') }}
        </span>
    @endif
    <div class="checkbox mb-3">
      <label class="text-dark">
        <input type="checkbox"  value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2020 {{ $wss->name ?? '' }}</p>
  </form>
@endsection