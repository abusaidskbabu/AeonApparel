@extends('frontend.base')
@section('css')
    <link href="{{asset('frontend/css/about.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/error_track.css')}}" rel="stylesheet">
@endsection
@section('body')
    <div id="page">
        @include('frontend.nav')
        <main class="text-black">
            @if (empty($client))
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
            @else
                <div class="container-fluid">
                    <div class="row row-cols-lg-1">
                        <img src="{{asset('frontend/img/partners.jpg')}}" height="800px" class="img-fluid" alt="">
                    </div>

                </div>

                <div class="container mt-10">

                    <h1>{{ $client->name }}</h1>
                    <h2>Documents / Files</h2>

                    <div class="row mt-10">

                    @foreach($client_files as $file)
                        <div class="col-md-4 col-lg-4 col-sm-4">
                            <div class="box_view text-center mb-5">
                                <a class="btn_2 text-black" href="{{ asset($file->file) }}">View</a>
                            </div>

                        </div>
                    @endforeach

                    </div>

                </div>
                <!-- /container -->
            @endif
        </main>
        <!--/main-->
        @include('frontend.footer')
    </div>
    <!-- page -->
@endsection
