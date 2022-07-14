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
                    <li> <a href="#">Blogs</a> </li>
                    <li> <a href="#">{{ $data->title }}</a> </li>
                </ol>            
            </div>
        </div>
    </section>

    <section class="ls pt-4 section_padding_bottom_150 columns_padding_30">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-lg-8">
					<article class="single-post post vertical-item">
						<header class="entry-header">
							<h3 class="entry-title big"> 
								<a href="#">{{ $data->title }}</a> 
							</h3>
							<div class="entry-meta small-text big-spacing">
								<div class="highlightlinks">
									<span>
										@php $myDateTime = DateTime::createFromFormat('Y-m-d', $data->date); @endphp
										<time datetime="2017-10-03T08:50:40+00:00">
											{{ $myDateTime->format('d') }} {{ $myDateTime->format('F') }} {{ $myDateTime->format('Y') }}
										</time>
									</span>,
									<span class="categories-links">
										{{ $data->author }}
									</span> 
								</div>
							</div>
						</header>
						<div class="item-media-wrap">
							<div class="entry-thumbnail item-media"> 
								<img src="{{asset($data->image)}}" alt="">
								<div class="entry-meta-corner"> 
									<span>
										<time datetime="2017-10-03T08:50:40+00:00">
											
                                            {{ $myDateTime->format('d') }} {{ $myDateTime->format('M') }}
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
						<!-- .item-content -->
					</article>
					
				</div>
				<!--eof .col-sm-8 (main content)-->
				<!-- sidebar -->
				<aside class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 col-lg-4">
					<div class="widget widget_recent_posts mt-5 pt-5">
						<h3 class="widget-title">Recent Posts</h3>
						<ul class="media_items_list">
							@foreach($alls as $row)
							<li class="media">
								<div class="media-left media-middle"> 
									<img src="{{ asset($row->image)}}" style="height:80px;" alt=""> 
								</div>
								<div class="media-body media-middle">
									<div class="entry-meta small-text highlightlinks"> 
										<span class="date">
											@php $myDateTime = DateTime::createFromFormat('Y-m-d', $row->date); @endphp
											<time datetime="2017-10-03T08:50:40+00:00">{{ $myDateTime->format('d') }} {{ $myDateTime->format('M') }}</time>
										</span> 
									</div>
									<p class="darklinks" > 
										<a href="{{ route('blogs.read', $row->id) }}" style="color: #b17f31;">{{ $row->title }}</a> 
									</p>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
				</aside>
				<!-- eof aside sidebar -->
			</div>
		</div>
	</section>
    
    
@endsection
