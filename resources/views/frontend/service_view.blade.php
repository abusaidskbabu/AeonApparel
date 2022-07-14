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
                    <li> <a href="#">Services</a> </li>
                    <li> <a href="#">{{ $title }}</a> </li>
                </ol>            
            </div>
        </div>
    </section>

    <section class="ls pt-4 section_padding_bottom_150 columns_margin_bottom_0 columns_padding_30 service-single-item">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="item-media-wrap">
                        <div class="item-media"> 
                            <img src="{{asset($data->icon)}}" alt=""> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row columns_margin_top_0">
                <div class="col-xs-12 col-md-8 col-lg-9">
                    <article class="vertical-item content-padding big-padding with_shadow">
                        <div class="item-content">
                            <h1 class="entry-title">{{ $title }}</h1>
                            {!! $data->overview !!}
                        </div>
                    </article>
                </div>
                <aside class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 col-lg-3">
                    <div class="widget widget_nav_menu">
                        <h3 class="widget_title">Other Services</h3>
                        <div>
                            <ul class="menu greylinks">
                                @foreach($service as $row)
                                <li class=""> <a href="{{route('service.view', $row->id)}}">{{ $row->title }}</a> </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

@endsection