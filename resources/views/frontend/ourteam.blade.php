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
                    <li> <a href="#">Our Team</a> </li>
                </ol>            
            </div>
        </div>
    </section>

    <section class="ls pt-4 section_padding_bottom_150">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="section_header topmargin_0">Our Team</h2>
                    <p class="small-text grey">who works here</p>
                </div>
                <div class="row">
                    @foreach($team as $row)
                    <div class="text-center text-sm-left with_shadow with_social col-md-4">
                        <div class="row">
                            <div class="col-sm-12 pt-3">
                                <div class="item-media"> 
                                    <img src="{{asset($row->image)}}" alt=""> 
                                </div>
                            </div>
                            <div class="col-sm-12 pt-2">
                                <div class="item-content text-center">
                                    <header class="entry-header">
                                        <h3 class="entry-title"><a href="#">{{$row->name}}</a> </h3>
                                        <p class="small-text highlight">{{$row->designation}}</p>
                                    </header>
                                </div>
                                <div class="item-social text-center"> 
                                    <a href="{{$row->facebook}}" target="_blank" class="social-icon dark-icon socicon-facebook"></a> 
                                    {{-- <a href="#" class="social-icon dark-icon socicon-twitter"></a>  --}}
                                    {{-- <a href="#" class="social-icon dark-icon socicon-googleplus"></a>  --}}
                                    <a href="{{$row->linkedin}}" target="_blank" class="social-icon dark-icon socicon-linkedin"></a>                             
                                    {{-- <a href="#" class="social-icon dark-icon socicon-instagram"></a>  --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection