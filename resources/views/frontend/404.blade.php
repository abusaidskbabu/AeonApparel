@extends('frontend.base')
@section('css')
<link href="{{asset('frontend/css/error_track.css')}}" rel="stylesheet">
@endsection
@section('body')
<div id="page">
@include('frontend.nav')
<main class="bg_gray">
    <div id="error_page">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-7 col-lg-9">
                    <img src="{{asset('frontend/img/404.svg')}}" alt="" class="img-fluid" width="400" height="212">
                    <p>The page you're looking is not founded!</p>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /error_page -->
</main>
<!--/main-->
@include('frontend.footer')
</div>
@endsection