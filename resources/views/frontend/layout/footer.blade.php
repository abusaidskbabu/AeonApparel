<footer class="page_footer ls  columns_margin_bottom_30 pt-4" style="background-color: #fffbfb;">
	<div class="container columns_padding_80">
		<div class="row">
			<div class="col-xs-12 col-md-4 text-center text-md-left">
				<div class="widget widget_text">
					<div class="logo"> <img src="{{asset($wss->logo ?? '')}}" style="height: 80px;" alt=""> </div>
					<p style="line-height: 1.4;" class="text-justify">Incorporated in 2015, AEON APPAREL is a well-established globally reputed garments apparel buying, sourcing, technology and management services company in Dhaka, Bangladesh. It’s experience and expertise providing comprehensive capabilities in the apparel industry, AEON APPAREL collaborates with clients and manufacturers to help them attain high-performance businesses.</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 text-center text-md-left pt-5">
				<div class="widget widget_text">
					<h3 class="widget-title">Services</h3>
					<ul class="list-unstyled greylinks">
						@foreach(App\Service::where('status',1)->get() as $row)
						<li>
						 	<div class="media small-media">
								<div class="media-left"> <i class="{{ $row->icon_2 }}"></i> </div>
								<a href="{{route('service.view', $row->id)}}" class=" small"> {{ $row->title }}</a>
							</div>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-2 text-center text-md-left pt-5">
				<div class="widget widget_text">
					<h3 class="widget-title">Quick Links</h3>
					<ul class="list-unstyled greylinks">
						
						<li>
						 	<div class="media small-media">
								<a href="{{ url('/about-us')}}" class=" small text-uppercase">Company Details</a>
							</div>
						</li>
						<li>
						 	<div class="media small-media">
								<a href="{{ url('/our-partner')}}" class=" small text-uppercase">Our Concerns</a>
							</div>
						</li>
						<li>
						 	<div class="media small-media">
								<a href="{{ url('/our-clients')}}" class=" small text-uppercase">Our Clients</a>
							</div>
						</li>
						<li>
						 	<div class="media small-media">
								<a href="{{ url('/our-factory') }}" class=" small text-uppercase">Our Factory</a>
							</div>
						</li>
						<li>
						 	<div class="media small-media">
								<a href="{{ url('/our-showroom') }}" class=" small text-uppercase">Our Showroom</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-6 col-md-3 text-center text-md-left pt-5">
				<div class="widget widget_text">
					<h3 class="widget-title">Contact</h3>
					<ul class="list-unstyled greylinks">
						<li>
							<div class="media small-media">
								<div class="media-left"> <i class="qtyler-phone"></i> </div>
								<div class="media-body"> {{ $wss->phone ?? '' }} </div>
							</div>
						</li>
						@php
							$all_email = explode(",",$wss->email)
						@endphp
						<li>
							<div class="media small-media">
								<div class="media-left"> <i class="qtyler-envelope"></i> </div>
								<div class="media-body">
									@foreach($all_email as $key => $value) 
									<a href="mailto:{{ $value }}"><span>{{ $value }}</span></a> 
									@endforeach
								</div>
							</div>
						</li>
						<li>
							<div class="media small-media">
								<div class="media-left"> <i class="qtyler-map-marker"></i> </div>
								<div class="media-body"> {{ $wss->address ?? '' }} </div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<section class="page_copyright section_padding_top_10 section_padding_bottom_10" style="background-color: black;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-6 text-left" style="color: #fc0000; font-size: 10px;"> &copy; <?php echo date('Y'); ?>  All Rights Reserved | Developed By <a href="">VMSL</a>  </div>
			<div class="col-xs-6 text-right">
				<div class="page_social" style="color: #fc0000;"> 
					<a class="social-icon socicon-facebook dark-icon" style="color: #fc0000;" target="_blank" href="{{ $wss->facebook ?? '#' }}" title="Facebook"></a> 
					<a class="social-icon socicon-linkedin dark-icon" style="color: #fc0000;" target="_blank" href="{{ $wss->linkedin ?? '#' }}" title="Linkedin"></a>							
					<a class="social-icon socicon-twitter dark-icon" style="color: #fc0000;" target="_blank" href="{{ $wss->twiter ?? '#' }}" title="Twitter"></a> 
					<a class="social-icon socicon-instagram dark-icon" style="color: #fc0000;" target="_blank" href="{{ $wss->instagram ?? '#' }}" title="Instagram"></a> 
				</div>
			</div>
		</div>
	</div>
</section>