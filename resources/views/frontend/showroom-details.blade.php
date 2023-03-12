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
                    <li> <a href="#">Showroom</a> </li>
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
							</div>
						</div>

						<div class="item-content mt-2">
							<div class="entry-content">
								<div class="row">

									<div class="col-lg-12">
										<a href="{{$data->location}}" target="_blank" class="text-success"><i class="fas fa-map-marker-alt"></i> Location</a>
									</div>

									<div class="col-lg-12">
										<h5>Picture</h5>
										<div class="owl-carousel products-carousel gallery-carousel " data-nav="false" data-dots="true"
										    data-responsive-xlg="5" data-responsive-sm="3" data-responsive-xs="2" data-responsive-xxs="1" data-filters=".carousel_filters" data-margin="30">
									    	@foreach(explode(",",$data->workers) as $key => $value)
									    		@if($value != '')
													<article class="product vertical-item text-center with-corner-label mt-4 mb-4">
														<div class="item-media-wrap">
															<div class="item-media" style="height: auto;"> 
																<a href="{{asset('backend/showrooms/'.$value)}}">
								                            		<img src="{{asset('backend/showrooms/'.$value)}}" height="200px" width="200px" class="mb-1">
							                        			</a>
															</div>
														</div>
													</article>
												@endif
											@endforeach
										</div>
									</div>


									<div class="col-lg-12">
										<h5>Gallery</h5>
										<div class="owl-carousel products-carousel gallery-carousel " data-nav="false" data-dots="true"
										    data-responsive-xlg="4" data-responsive-sm="3" data-responsive-xs="2" data-responsive-xxs="1" data-filters=".carousel_filters" data-margin="30">
									    	@foreach(explode(",",$data->gallery) as $key => $value)
									    		@if($value != '')
													<article class="product vertical-item text-center with-corner-label mt-4 mb-4">
														<div class="item-media-wrap">
															<div class="item-media" style="height: auto;"> 
																<a href="{{asset('backend/showrooms/'.$value)}}">
								                            		<img src="{{asset('backend/showrooms/'.$value)}}" height="100%" width="100%" class="mb-1">
							                        			</a>
															</div>
														</div>
													</article>
												@endif
											@endforeach
										</div>
									</div>

								</div>
							</div>
						</div>

					</article>
				</div>
            </div>
        </div>
    </section>
@endsection