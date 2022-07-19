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
                    <li> <a href="#">Factory</a> </li>
                    <li> <a href="#">{{$data->title}}</a> </li>
                </ol>            
            </div>
        </div>
    </section>

    <section class="ls pt-4 section_padding_bottom_150">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12">
					<article class="single-post post vertical-item">
						<header class="entry-header">
							<h3 class="entry-title big"> 
								<a href="#">{{ $data->title }}</a> 
							</h3>
						</header>

						<div class="item-media-wrap mt-0">
							<div class="entry-thumbnail item-media"> 
								<img src="{{asset($data->banner)}}" alt="">
								<div class="entry-meta-corner"> 
									<span>
										<time datetime="2017-10-03T08:50:40+00:00">
											<i class="fas fa-map-marker-alt"></i>
										</time>
									</span> 
								</div>
							</div>
						</div>

						<div class="item-content">
							<div class="entry-content">
								{!! $data->content !!}
							</div>
						</div>

					</article>
				</div>
            </div>
        </div>
    </section>
@endsection