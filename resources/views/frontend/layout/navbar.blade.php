<header class="page_header header_black header_v1 toggler_xxs_right" style="background-color: #fffbfb;">
				<div class="container-fluid">
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
										<li> <a href="#">About</a>
											<ul>
												<li> <a href="{{ url('/about-us')}}">Company Details</a> </li>
												<li> <a href="{{ url('/our-partner')}}">Our Concerns</a> </li>
												<li> <a href="{{ url('/our-clients')}}">Our Clients</a> </li>
												<li> <a href="{{ url('/our-factory') }}">Our Factory</a> </li>
												<li> <a href="{{ url('/our-showroom') }}">Our Showroom</a> </li>
											</ul>
										</li>
										<li> <a href="#">Services</a>
											<ul>
												@foreach(App\Service::where('status',1)->get() as $row)
												<li> <a href="{{route('service.view', $row->id)}}">{{ $row->title }}</a> </li>
												@endforeach
											</ul>
										</li>
										<li> <a href="#">Products</a>
											<ul>
												<!-- gallery -->
												@foreach(App\product_division::all() as $row)
													<li> 
														<a href="">{{ $row->division_name}}</a>
														<ul>
															@php
                                                				$category = DB::table('products')
                                                        		->join('product_categories','products.category', '=', 'product_categories.id')
                                                        		->select('product_categories.category_name', 'product_categories.id as cat_id')
                                                        		->where('products.division', $row->id)
                                                        		->distinct()
                                                        		->get();
                                            				@endphp
                                            				@if(!$category->isEmpty())

                                                				@foreach ($category as $cat)
																<li> 
																	<a href="">{{ $cat->category_name }}</a>
																	<ul>
																		@php
			                                                                $gender = DB::table('products')
                                                                            ->join('product_genders','products.gender', '=', 'product_genders.id')
                                                                            ->select('product_genders.gender_name', 'products.gender as gen_id')
                                                                            ->where('products.category', $cat->cat_id)
                                                                            ->distinct()
                                                                            ->get();
			                                                            @endphp
			                                                            @if(!$gender->isEmpty())
			                                                            	@foreach($gender as $gen)
																				<li> 
																					<a href="{{ route('products_view', ['div_id'=>$row->id, 'cat_id'=>$cat->cat_id, 'gen_id'=>$gen->gen_id]) }}">{{ $gen->gender_name }}</a> 
																				</li>
																			@endforeach
																		@endif
																	</ul>
																</li>
																@endforeach
															@endif
														</ul>
													</li>
												@endforeach
											</ul>
										</li>
										<!-- eof pages -->
										<li> 
											<a href="{{ url('/ourteam') }}">Team</a>
										</li>

										<li> 
											<a href="{{ url('/career') }}">Career</a>
										</li>
										<!-- eof features -->
										
										<!-- blog -->
										<li> <a href="{{ url('blogs') }}">Blog</a> </li>
										<!-- eof blog -->
										<!-- contacts -->
										<li> <a href="{{ url('/contact-us') }}">Contact</a> </li>
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