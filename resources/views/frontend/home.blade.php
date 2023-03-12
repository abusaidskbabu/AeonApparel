@extends('frontend.layout.master')
@php 
	$wss = DB::table('website_setting')->orderBy('id','DESC')->first();
@endphp
@section('content')
	<section class="intro_section page_mainslider cs all-scr-cover">
		<div class="flexslider" data-dots="false" data-nav="true">
			<ul class="slides">
				@forelse($sliders as $slider)
				<li>
					<div class="slide-image-wrap"> 
						<img src="{{ asset($slider->image) }}" width="" height="" alt="" /> 
					</div>

					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="slide_description_wrapper">
									<div class="slide_description">
										<div class="intro-layer to_animate" data-animation="fadeInUp">
											<p> <span class="light_bg_color small-text">{{ $slider->heading }}</span> </p>
										</div>
										<div class="intro-layer to_animate" data-animation="fadeInUp">
											<p> <span class="hero-text">{{ $slider->year_1st }}<i>{{ $slider->year_2nd }}</i></span> </p>
										</div>
										<div class="intro-layer to_animate" data-animation="fadeInUp">
											<p> <span class="small-text big-spacing">{{ $slider->span_text }}</span> </p>
										</div>
										<div class="intro-layer to_animate" data-animation="fadeInUp">
											<div class="slide_buttons"> 
												<a href="#" class="theme_button small_button">Read More</a> 
											</div>
										</div>
									</div>
									<!-- eof .slide_description -->
								</div>
								<!-- eof .slide_description_wrapper -->
							</div>
							<!-- eof .col-* -->
						</div>
						<!-- eof .row -->
					</div>
					<!-- eof .container -->
				</li>
				@endforeach
			</ul>
		</div>
		<!-- eof flexslider -->
	</section>

	<section id="about" class="ls section_padding_bottom_150">
		<div class="container">
			<div class="row flex-wrap v-center">
				<div class="col-md-6"> <img src="{{ asset('frontend/images/about.png') }}" alt="" class="about-cover"> </div>
				<div class="col-md-6">
					<h2 class="section_header small">About Us</h2>
					<p class="small-text grey">Who we are</p>
					@php 
					$about_us = DB::Table('page_cms')->where('slug', 'about-us')->first();
					@endphp
					{!!  Str::limit($about_us->content, $limit = 694, $end = '..') !!}
					<div class="toppadding_40 visible-lg"></div>
					<div class="content-justify v-center v-spacing"> 
						<a href="/about-us" class="theme_button small_button">READ MORE</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="contact-form" class="pt-4 section_padding_bottom_150" style="background-color: black;">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12">
					<h2 class="section_header small" style="color: #fc0000;">Our Catalog</h2>
					<p class="small-text grey" >popular items</p>
					<div class="toppadding_5"></div>
					<p style="color: #fc0000;">Aeon Apparel supplies all kind of garment/apparels following the buyer’s requirement. Our products include:</p>
					<div class="col-md-12">
						<div class="owl-carousel owl-theme" id="popular-product">
							@foreach($item_sliders as $row)
							<div class="vertical-item item">
								<div class="item-media p-2"> 
									<img src="{{ asset($row->image) }}" alt=""> 
									<a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset($row->image) }}">
									</a> 
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	{{-- <section id="products" class="ls pt-4 fluid_padding_0">
		<div class="container ">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h2 class="section_header small">Featured Products</h2>
					<div class="filters carousel_filters"> 
						<a href="#" data-filter="*">All</a> 
						@foreach($division as $row)
						<a href="#" data-filter=".{{$row->division_name}}">{{$row->division_name}}</a> 
						@endforeach
					</div>
					<div class="owl-carousel products-carousel gallery-carousel" data-nav="true" data-dots="false"
					    data-responsive-xlg="5" data-responsive-sm="3" data-responsive-xs="2" data-responsive-xxs="1" data-filters=".carousel_filters" data-margin="30">
					    @foreach($division as $row)
					    	@foreach(App\Product::where('division',$row->id)->orderByDesc('id')->limit(20)->get() as $product)
								<article class="product vertical-item text-center with-corner-label {{$row->division_name}}">
									<div class="item-media-wrap bottommargin_25">
										<div class="item-media"> 
											<a href="{{ route('product.view', $product->id) }}">
			                            		<img src="{{ asset($product->image_front) }}" alt=""/>
			                            		<img src="{{ asset($product->image_back) }}" alt=""/>
		                        			</a>
										</div>
									</div>
									<div class="item-content">
										<h3 class="entry-title"> 
											<a href="{{ route('product.view', $product->id) }}">{{$product->name}}</a> 
										</h3>
									</div>
								</article>
							@endforeach
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
 --}}


	<section id="about" class="ls pt-5 pb-5" style="background-color: white;">
		<div class="container">
			<div class="center">
				<div class="row">
					<a href="{{ $wss->facebook ?? '#' }}" class="col-lg-3">
						<div class="container-box container--facebook">
							<div class="box box--left box--front">
								<i class="ion fa fa-facebook"></i>
								<span class="count">
									13 K				
								</span>
							</div>		
							<span class="follow follow--left">
								Like
							</span>
						</div>
					</a>

					<a href="{{ $wss->twiter ?? '#' }}" class="col-lg-3">
						<div class="container-box container--twitter">
							<div class="box box--middle">
								<i class="ion fa fa-twitter"></i>	
								<span class="count">
									10.5 K				
								</span>
							</div>
							<span class="follow follow--middle">
								Follow
							</span>
						</div>
					</a>


					<a href="{{ $wss->instagram ?? '#' }}" class="col-lg-3">
						<div class="container-box container--instagram">
							<div class="box box--right">
								<i class="ion fa fa-instagram"></i>
								<span class="count">
									11 K
								</span>
							</div>
							<span class="follow follow--right">
								Follow
							</span>
						</div>
					</a>

					<a href="{{ $wss->linkedin ?? '#' }}" class="col-lg-3">
						<div class="container-box container--linkedin">
							<div class="box box--right">
								<i class="ion fab fa-linkedin"></i>
								<span class="count">
									11 K
								</span>
							</div>
							<span class="follow follow--right">
								Follow
							</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>



	{{-- <section id="blog" class="ls p-5 section_padding_bottom_150" style="background-color: #EDECEA;">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section_header text-center small">Our Services</h2>
				<p class="small-text grey">What we do</p>
			</div>
			<div class="row">
				<div class="owl-carousel owl-theme" id="service-slider">
				@foreach($service as $row)
					<article class="item">
						<div class="text-center mb-4"> 
							<a href="{{route('service.view', $row->id)}}">
								<i class="{{ $row->icon_2 }} service-icone"></i>
							</a>
						</div>
						<div class="text-center">
							<h3 class="entry-title small" style="font-size: 15px;">{{ $row->title }}</h3>
						</div>
					</article>
				@endforeach
				</div>
			</div>
		</div>
	</section> --}}

	

	

	<section id="contact-form" class="ls  pt-4 " style="background-color: #EDECEA;">
		<div class="container">
			<div class="row flex-wrap v-center">
				<div class="col-xs-12 col-md-4 col-md-push-8"> 
					<div class="row">
						<div class="col-lg-12">
							<div class="contact-box p-3">
								<div class="media">
	                                <div class="media-left"> <i class="rt-icon2-shop highlight fontsize_18"></i> </div>
	                                <div class="media-body">
	                                    <h6 class="media-heading grey">Postal Address:</h6> {{ $wss->address ?? ''}} </div>
	                            </div>
							</div>
						</div>

						<div class="col-lg-12">
							<div class="contact-box p-3">
								<div class="media">
	                                <div class="media-left"> <i class="rt-icon2-phone5 highlight fontsize_18"></i> </div>
	                                <div class="media-body">
	                                    <h6 class="media-heading grey">Phone:</h6> 
	                                    @php
											$all_phone = explode(",",$wss->phone)
										@endphp

										@foreach($all_phone as $key => $value) 
											<a href="tel:{{ $value }}"> {{ $value }}</a> 
										@endforeach
	                                    
	                                </div>
	                            </div>
							</div>
						</div>

						<div class="col-lg-12">
							<div class="contact-box p-3">
								<div class="media">
	                                <div class="media-left"> <i class="rt-icon2-mail highlight fontsize_18"></i> </div>
	                                <div class="media-body greylinks">
	                                    <h6 class="media-heading grey">Email:</h6> 
	                                    @php
											$all_email = explode(",",$wss->email)
										@endphp

	                                    @foreach($all_email as $key => $value) 
											<a href="mailto:{{ $value }}"><span>{{ $value }}</span></a> 
										@endforeach
	                                </div>
	                            </div>
							</div>
						</div>
					</div>
					{{-- <img src="https://images.pexels.com/photos/1078958/pexels-photo-1078958.jpeg?cs=srgb&dl=pexels-artem-beliaikin-1078958.jpg&fm=jpg" alt="" class="contact-form-cover">  --}}
				</div>

				<div class="col-xs-12 col-md-8 col-md-pull-4">
					<h2 class="section_header small">Custom Tailoring</h2>
					<p class="small-text grey">Most competitive price</p>
					<div class="toppadding_5"></div>
					<form class="contact-form row columns_padding_10" method="post" action="{{ route('contact') }}">
						@csrf
						<div class="col-xs-12">
							<div class="form-group"> <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control with_icon" placeholder="Your Name"> <i class="qtyler-user grey"></i> </div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group"> <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control with_icon" placeholder="Email Address"> <i class="qtyler-envelope grey"></i> </div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group"> <input type="tel" size="30" value="" name="phone" id="phone" class="form-control with_icon" placeholder="Phone Number"> <i class="qtyler-phone grey"></i> </div>
						</div>
						<div class="col-xs-12">
							<div class="form-group"> <textarea aria-required="true" rows="3" cols="45" name="message" id="message" class="form-control with_icon" placeholder="Message"></textarea> <i class="qtyler-comment grey"></i> </div>
						</div>
						<div class="col-xs-12 bottommargin_0">
							<div class="contact-form-submit mt-0"> 
								<button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button small_button margin_0" style="color: #fc0000;">Order tailoring</button> 
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="container-fluid p-0">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1393.2746870929718!2d90.38611297130166!3d23.86604238489588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c41bafe1d75f%3A0x67b874a971f2015a!2s2nd%20floor%2C%20House%2C%2041%20Rd%20-13%2C%20Dhaka%201230!5e0!3m2!1sen!2sbd!4v1658042889379!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</section>

	{{-- <section id="testimonials" class="section_padding_top_150 section_padding_bottom_150" style="background-color: black;">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div class="owl-carousel" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-dots="true" data-nav="true">
						@foreach($reviews as $review)
							<blockquote>
								<div class="avatar">
									<i class="fas fa-quote-left"></i>
								</div>
								<p style="color: #fc0000;">{{ $review->review }}</p> 
								<cite style="color: #a3a3a3;">{{ $review->client }}</cite> 
							</blockquote>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="blog" class="ls section_padding_top_150 section_padding_bottom_150">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="section_header text-center small">News &amp; Events</h2>
					<p class="small-text grey ">our blogs</p>
					<div class="row columns_margin_bottom_20">
						@foreach($blogs as $blog)
							@if($loop->iteration == 1)
								<div class="isotope-item col-xs-12 col-md-6">
									<article class="vertical-item content-absolute content-caption">
										<div class="item-media"> 
											<a href="{{ route('blogs.read', $blog->id) }}">
		        								<img src="{{ asset($blog->image)}}" alt="">
		        							</a>
											<div class="entry-meta-corner"> 
												<a href="{{ route('blogs.read', $blog->id) }}">
													@php $myDateTime = DateTime::createFromFormat('Y-m-d', $blog->date); @endphp
													<time datetime="2017-10-03T08:50:40+00:00">{{ $myDateTime->format('d') }} {{ $myDateTime->format('M') }}</time>
												</a> 
											</div>
										</div>
										<div class="item-content ls">
											<h3 class="entry-title small">
												<a href="{{ route('blogs.read', $blog->id) }}">{{$blog->title}}</a>
											</h3>
										</div>
									</article>
								</div>
							@else
								<div class="col-xs-12 col-sm-6">
									<article class="side-item side-md">
										<div class="row v-center">
											<div class="col-xs-12 col-md-6">
												<div class="item-media"> 
													<a href="{{ route('blogs.read', $blog->id) }}">
					                					<img src="{{ asset($blog->image)}}" alt="">
					                				</a> 
					                			</div>
											</div>
											<div class="col-xs-12 col-md-6">
												<div class="item-content">
													<div class="entry-meta small-text greylinks"> 
														<span class="date">
															<a href="{{ route('blogs.read', $blog->id) }}">
																@php $myDateTime = DateTime::createFromFormat('Y-m-d', $blog->date); @endphp
																<time datetime="2017-10-03T08:50:40+00:00">{{ $myDateTime->format('d') }} {{ $myDateTime->format('M') }}</time>
															</a>
					        							</span> 
					        						</div>
													<h3 class="entry-title small">
														<a href="{{ route('blogs.read', $blog->id) }}">{{$blog->title}}</a>
													</h3> 
													<a href="{{ route('blogs.read', $blog->id) }}" class="more-link">more</a> 
												</div>
											</div>
										</div>
									</article>
								</div>
							@endif
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	{{-- <section id="section-social" class="ls with_top_border columns_margin_0">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div class="page_social"> 
						<a class="social-icon socicon-facebook dark-icon" href="#" title="Facebook"></a> 
						<a class="social-icon socicon-googleplus dark-icon" href="#" title="Google Plus"></a> 
						<a class="social-icon socicon-linkedin dark-icon" href="#" title="Linkedin"></a>							
						<a class="social-icon socicon-twitter dark-icon" href="#" title="Twitter"></a> 
						<a class="social-icon socicon-instagram dark-icon" href="#" title="Instagram"></a> 
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	{{-- <section class="ls  section_padding_bottom_150">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 text-center">
					<h2 class="section_header small">Our Newsletter</h2>
					<p class="small-text grey">subscribe</p>
					<div class="widget widget_mailchimp">
						<form class="signup" action="" method="get">
							<div class="form-group"> 
								<input class="mailchimp_email form-control" name="email" type="email" placeholder="Email Address"> 
								<button type="submit" class="theme_button">Sign Up!</button> 
							</div>
							<div class="response"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section> --}}

	<section id="products" class="ls pt-4 fluid_padding_0">
		<div class="container ">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section_header small">Featured Products</h2>
					<div class="filters carousel_filters"> 
						<a href="#" data-filter="*">All</a> 
						@foreach($division as $row)
						<a href="#" data-filter=".{{$row->division_name}}">{{$row->division_name}}</a> 
						@endforeach
					</div>
					<div class="owl-carousel products-carousel gallery-carousel " data-nav="false" data-dots="true"
					    data-responsive-xlg="5" data-responsive-sm="3" data-responsive-xs="2" data-responsive-xxs="1" data-filters=".carousel_filters" data-margin="30">
					    @foreach($division as $row)
					    	@foreach(App\Product::where('division',$row->id)->orderByDesc('id')->limit(20)->get() as $product)
								<article class="product vertical-item text-center with-corner-label mt-2 {{$row->division_name}}">
									<div class="item-media-wrap bottommargin_25">
										<div class="item-media"> 
											<a href="{{ route('product.view', $product->id) }}">
			                            		<img src="{{ asset($product->image_front) }}" alt=""/>
			                            		<img src="{{ asset($product->image_back) }}" alt=""/>
		                        			</a>
										</div>
									</div>
									<div class="item-content">
										<h3 class="entry-title"> 
											<a href="{{ route('product.view', $product->id) }}" class="text-uppercase">{{$product->name}}</a> 
										</h3>
									</div>
								</article>
							@endforeach
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>


	{{-- <section id="gallery" class="ls fluid_padding_0 columns_padding_0 pl-4 pr-4 mb-4">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<div class="owl-carousel gallery-carousel framed" data-responsive-xlg="6" data-responsive-lg="5" data-responsive-md="4" data-responsive-sm="3" data-responsive-xs="3" data-responsive-xxs="2" data-loop="true" data-margin="0" data-nav="true">
						@foreach($item_sliders as $row)
						<div class="vertical-item item">
							<div class="item-media"> 
								<img src="{{ asset($row->image) }}" alt=""> 
								<a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset($row->image) }}">
								</a> 
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section> --}}
@endsection