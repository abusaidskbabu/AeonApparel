<!DOCTYPE html>
<html class="no-js">
@php 
	$wss = DB::table('website_setting')->orderBy('id','DESC')->first();
@endphp
<head>
	<title>{{ $wss->name ?? '' }}</title>
	<meta charset="utf-8">
	
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/animations.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/fonts.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}" class="color-switcher-link">
	<link rel="stylesheet" href="{{ asset('frontend/css/shop.css') }}" class="color-switcher-link">
	<link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}" class="color-switcher-link">
	<script src="{{ asset('frontend/js/vendor/modernizr-2.6.2.min.js') }}"></script>
	<script src="https://kit.fontawesome.com/9575f77c5e.js" crossorigin="anonymous"></script>
	<link rel="icon" href="{{asset($wss->logo ?? '')}}" type="image/gif" sizes="100x100">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-JLN8RCHP0L"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-JLN8RCHP0L');
	</script>
	

</head>

<body>
	
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">
			<i class="rt-icon2-cross2"></i>
		</span>
	</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="https://html.modernwebtemplates.com/qtyler/">
				<div class="form-group bottommargin_0"> <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input"> </div> <button type="submit" class="theme_button color1 no_bg_button">Search</button> </form>
		</div>
	</div>
	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			
		</div>
	</div>
	<!-- eof .modal -->
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			
			<!-- navbar start  -->
			@include('frontend.layout.navbar')

			@yield('content')
			
	 		<!-- footer start --> 
			@include('frontend.layout.footer')	
				
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	{{-- <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
	<script src="{{ asset('frontend/js/compressed.js') }}"></script>
	<script src="{{ asset('frontend/js/selectize.min.js') }}"></script>
	<script src="{{ asset('frontend/js/main.js') }}"></script>
	{{-- <script src="{{ asset('frontend/js/switcher.js') }}"></script> --}}
	<script type="text/javascript">
		$('#popular-product').owlCarousel({
		    loop:true,
			autoplay: true,
		    autoplayTimeout:7000,
		    smartSpeed: 800,
		    nav:true,
		    dots: false,
			slideBy: 1,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:4
		        }
		    }
		})

		$('#service-slider').owlCarousel({
		    loop:true,
			autoplay: true,
		    autoplayTimeout:7000,
		    smartSpeed: 800,
		    nav:false,
		    dots: true,
			slideBy: 2,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:4
		        }
		    }
		})
	</script>
</body>

</html>