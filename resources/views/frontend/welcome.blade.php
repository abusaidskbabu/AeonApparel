@extends('frontend.base')
@section('css')
<link href="{{asset('frontend/css/contact.css')}}" rel="stylesheet">
@endsection
@section('body')
<div id="page">
	@include('frontend.nav')
	<main>

        <div class="container-fluid">
            <div class="row row-cols-lg-1">


            <div id="mainSlider" class="owl-carousel owl-theme">

                @forelse($sliders as $slider)

                <div class="item"><img src="{{ $slider->image }}" alt=""></div>

                @empty
                @endforelse

            </div>

            </div>

        </div>



        <div class="container-fluid">
            <div class="row row-cols-lg-1">


                @forelse($division as $div)

                <div class="col-md-4 col-lg-4 col-sm-4 p-0 division">

                    <a href="{{ route('division', $div->id) }}">

                    <div class="divisionSlider" class="owl-carousel owl-theme">

                        <div class="item relative text-center">

                            <img class="img-fluid img-thumbnail" src="{{ $div->image }}" alt="">

                            <h1 class="font-bold centerItem text-uppercase">{{ $div->division_name }}</h1>

                        </div>

                        <div class="item relative text-center">

                            <img class="img-fluid img-thumbnail" src="{{ $div->image }}" alt="">

                            <h1 class="font-bold centerItem text-uppercase">{{ $div->division_name }}</h1>

                        </div>

                    </div>

                    </a>

                </div>

                @empty

                @endforelse
            </div>
        </div>










		<!--/banners_grid -->

        <!-- Full Page Image Header with Vertically Centered Content -->
        <div class="hero-image-service" id="serviceImage">
            <div class="hero-text-service">
                <h1>OUR SERVICES</h1>
            </div>
        </div>




        <div class="container-fluid">
            <div class="row row-cols-lg-1">

                @forelse($service as $ser)

                    <div class="col-md-4 col-lg-4 p-0 servicesArea">
                        <a href="{{ route('service.view', $ser->id) }}">

                            <div class="divisionSlider" class="owl-carousel owl-theme">

                                <div class="item relative text-center">

                                    <img class="img-fluid img-thumbnail" src="{{ $ser->icon }}" alt="">

                                    <h1 class="font-bold centerItem text-uppercase">{{ $ser->title }}</h1>

                                </div>

                                <div class="item relative text-center">

                                    <img class="img-fluid img-thumbnail" src="{{ $ser->icon }}" alt="">

                                    <h1 class="font-bold centerItem text-uppercase">{{ $ser->title }}</h1>

                                </div>

                            </div>

                        </a>
                    </div>

                @empty

                @endforelse
            </div>
        </div>



        <!--/banners_grid -->

        <!-- Full Page Image Header with Vertically Centered Content -->
        <div class="hero-image-clients flex flex-column justify-evenly ">

            <div class="text-center">
                <h1>OUR CLIENTS</h1>

            </div>

            <div id="clientSlider" class="owl-carousel owl-theme ">

                @forelse($client as $cl)

                    <div class="item text-center">

                        <a href="{{ route('client-info', $cl->id) }}">

                        <img class="img-fluid img-thumbnail" width="50%" src="{{ asset($cl->image) }}">

                        </a>


                    </div>

                @empty
                @endforelse


            </div>





        </div>







        @include('frontend.contact-form')


		<!-- /container -->
	</main>
	<!-- /main -->
	@include('frontend.footer')
	</div>
	<!-- page -->

@endsection














