@extends('frontend.layout.master')

@section('content')
    <section class="page_breadcrumbs cs main_color2 gradient lighten_gradient section_padding_top_40 section_padding_bottom_40 table_section table_section_md" style="background-image: linear-gradient(131deg,#F8AE54 37%,#414E57 61%)!important;">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb greylinks">
                    <li> 
                        <a href="{{ route('home') }}">
                        Home
                    </a> 
                    </li>
                    <li> <a href="#">Clients</a> </li>
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
                            <div class="isotope-item col-xs-4 col-sm-3"> 
                                <a href="#" class="with_shadow">
                                    <img src="{{asset($row->image)}}" alt="">
                                </a> 
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection