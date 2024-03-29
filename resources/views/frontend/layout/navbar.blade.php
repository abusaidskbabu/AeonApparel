<header class="page_header header_black header_v1 toggler_xxs_right" style="background-color: #fffbfb;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 display-flex v-center">
				<div class="header_left_logo"> 
					<a href="{{ route('home')}}" class="logo">
            			<img src="{{asset($wss->logo ?? '')}}" style="height: 80px;" alt="">
       			 	</a> 
       			</div>
				<div class="header_mainmenu text-center">
					<!-- main nav start -->
					<nav class="mainmenu_wrapper">
						<ul class="mainmenu nav sf-menu">
							<li class="active"> <a href="{{ route('home')}}">Home</a></li>
							<li> 
								<a href="#">Products</a>
								<ul class="single-menu">
									<!-- gallery -->
									@foreach(\App\product_category::whereNull('parent_id')->get() as $row)
										<li> 
											<a href="">{{ $row->category_name}}</a>
											<ul class="multiple-menu">
												@php
                                    				$category =\App\product_category::where('parent_id', $row->id)->get();
                                				@endphp
                                				@if(!$category->isEmpty())
                                    				@foreach ($category as $cat)
													<li> 
														<a href="{{ route('products_view', ['parent_id'=>$row->id,'cat_id'=>$cat->id]) }}">{{ $cat->category_name }}</a>
													</li>
													@endforeach
												@endif
											</ul>
										</li>
									@endforeach
								</ul>
							</li>
							<li> <a href="#">About</a>
								<ul class="single-menu">
									<li> <a href="{{ url('/about-us')}}">Company Details</a> </li>
									<li> <a href="{{ url('/our-partner')}}">Our Concerns</a> </li>
									<li> <a href="{{ url('/our-clients')}}">Our Clients</a> </li>
									<li> <a href="{{ url('/our-factory') }}">Our Factory</a> </li>
									<li> <a href="{{ url('/our-showroom') }}">Our Showroom</a> </li>
								</ul>
							</li>

							<li> <a href="#">Lead Time</a>
								<ul class="single-menu">
									@foreach(\App\LeadTime::all() as $row)
										<li> <a href="{{ route('leadtime.details', $row->id)}}">{{$row->title}}</a> </li>
									@endforeach
								</ul>
							</li>

							<li> <a href="#">Services</a>
								<ul class="single-menu">
									@foreach(App\Service::where('status',1)->get() as $row)
									<li> <a href="{{route('service.view', $row->id)}}">{{ $row->title }}</a> </li>
									@endforeach
								</ul>
							</li>
							
							<!-- eof pages -->
							{{-- <li> 
								<a href="{{ url('/ourteam') }}">Team</a>
							</li> --}}

							<li> 
								<a href="{{ url('/career') }}">Career</a>
							</li>
							<!-- eof features -->
							
							<!-- blog -->
							{{-- <li> <a href="{{ url('blogs') }}">Blog</a> </li> --}}
							<!-- eof blog -->
							<!-- contacts -->
							<li> <a href="#">Contact</a> 
								<ul class="single-menu">
									<li> <a href="{{ url('/contact-us') }}">Contact Us</a> 
									<li> <a href="{{ url('/meeting/request') }}">Meeting Request</a> 
								</ul>
							</li>
							<!-- eof contacts -->
						</ul>
					</nav>
					<!-- eof main nav -->
					<!-- header toggler --><span class="toggle_menu"><span></span></span>
				</div>
				
			</div>
		</div>
	</div>
</header>