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
                    <li> <a href="#">Lead Time</a> </li>
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
							<h3 class="entry-title big text-center"> 
								<a href="#">{{ $data->title }}</a> 
							</h3>
						</header>
						<div class="item-content mt-2">
							<div class="entry-content">
								<div class="row">
									<div class="col-lg-12">
										{{$data->details}}
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