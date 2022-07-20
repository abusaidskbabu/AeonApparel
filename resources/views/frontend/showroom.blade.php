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
                    <li> <a href="#">Showrooms</a> </li>
                </ol>            
            </div>
        </div>
    </section>

    <section class="ls pt-4 section_padding_bottom_150">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="isotope_container isotope row masonry-layout images-grid columns_margin_bottom_20">
                        @foreach($data as $row)
                            <div class="isotope-item col-xs-12 col-sm-4"> 
                                <a href="{{ route('showroom.details', $row->id)}}" class="with_shadow br-radius-5">
                                    <img src="{{asset($row->banner)}}" class="p-2" alt="">
                                    <h4 class="m-0 p-2 text-center border-top-1"> {{$row->title}} </h4>
                                </a> 
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection