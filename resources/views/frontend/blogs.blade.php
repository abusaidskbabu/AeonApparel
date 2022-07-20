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
                    <li> <a href="#">Blogs</a> </li>
                </ol>            
            </div>
        </div>
    </section>

    <section class="ls pt-4 section_padding_bottom_150 columns_padding_30">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="isotope_container isotope row masonry-layout columns_margin_bottom_20">
                        @foreach($blogs as $row)
                        <div class="isotope-item col-xs-12 col-sm-6 col-md-4">
                            <article class="post vertical-item content-padding big-padding with_shadow text-center">
                                <div class="item-media entry-thumbnail"> 
                                    <a href="{{ route('blogs.read', $row->id) }}">
                                        <img src="{{asset($row->image)}}" alt="">
                                    </a>
                                    <div class="entry-meta-corner"> 
                                        <a href="{{ route('blogs.read', $row->id) }}">
                                            <time datetime="2017-10-03T08:50:40+00:00">
                                                @php $myDateTime = DateTime::createFromFormat('Y-m-d', $row->date); @endphp
                                                {{ $myDateTime->format('d') }} {{ $myDateTime->format('M') }}
                                            </time>
                                        </a> 
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h3 class="entry-title small"> <a href="{{ route('blogs.read', $row->id) }}">Differ one financial advisor from another</a> </h3>
                                </div>
                            </article>
                        </div>
                        @endforeach
                    </div> 
                </div>
            </div>
        </div>
    </section>
    
@endsection
