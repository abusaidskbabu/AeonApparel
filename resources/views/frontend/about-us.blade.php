@extends('frontend.layout.master')

@section('content')
    <section class="page_breadcrumbs cs main_color2 gradient lighten_gradient section_padding_top_40 section_padding_bottom_40 table_section table_section_md" style="background-image: linear-gradient(29deg,#1b1b1b 35%,#ff0000 106%)!important;">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb greylinks">
                    <li> 
                        <a href="{{ route('home') }}">
                        Home
                    </a> 
                    </li>
                    <li> <a href="#">About Us</a> </li>
                </ol>            
            </div>
        </div>
    </section>

    <section class="ls pt-4 section_padding_bottom_150">
        <div class="container">
            <div class="row">
                <div class="col-xs-12"> <img src="{{ asset('frontend/images/about.jpg') }}" class="alignright" alt="">
                    <h2 class="section_header topmargin_0">About Elegrand</h2>
                    <p class="small-text grey">About our comapny</p>
                    @php 
					$about_us = DB::Table('page_cms')->where('slug', 'about-us')->first();
					@endphp
					{!!  $about_us->content !!}
                </div>
            </div>
        </div>
    </section>

    <section class="ls  section_padding_bottom_150">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <h2 class="section_header">Why Choose Us</h2>
                    <p class="small-text grey">our advantages</p>
                    {!!  $about_us->why_chose_us !!}
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="isotope_container isotope row masonry-layout images-grid columns_margin_bottom_20">
                        <div class="isotope-item col-xs-6">
                            <div class="with_shadow text-center"> <img src="{{ asset('frontend/images/features/01.jpg') }}" alt=""> </div>
                        </div>
                        <div class="isotope-item col-xs-6">
                            <div class="with_shadow text-center"> <img src="{{ asset('frontend/images/features/02.jpg') }}" alt=""> </div>
                        </div>
                        <div class="isotope-item col-xs-6">
                            <div class="with_shadow text-center"> <img src="{{ asset('frontend/images/features/03.jpg') }}" alt=""> </div>
                        </div>
                        <div class="isotope-item col-xs-6">
                            <div class="with_shadow text-center"> <img src="{{ asset('frontend/images/features/04.jpg') }}" alt=""> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection