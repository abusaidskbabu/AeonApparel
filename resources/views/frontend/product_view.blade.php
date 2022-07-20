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
                    <li><a href="{{ route('division', $data->division) }}">{{ $data->division_name }}</a></li>
                    <li><a href="{{ route('category', ['div_id' => $data->division, 'cat_id' => $data->category]) }}">{{ $data->category_name }}</a></li>
                    <li><a href="{{ route('products_view', ['div_id'=>$data->division, 'cat_id'=>$data->category, 'gen_id'=>$data->gender]) }}">{{ $data->gender_name }}</a></li>
                    <li>{{ $data->name }}</li>
                </ol>            
            </div>
        </div>
    </section>

    <section class="ls pt-4 section_padding_bottom_150 columns_padding_30">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12 col-md-push-1 col-lg-push-1">
                    <div itemscope="" itemtype="http://schema.org/Product" class="product type-product row columns_padding_30 columns_margin_bottom_30">
                        <div class="col-sm-6">
                            <div class="with-corner-label">
                                <div class="images text-center"> 
                                    <a href="{{ asset($data->image_front) }}" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
                                        <img src="{{ asset($data->image_front) }}" class="attachment-shop_single wp-post-image" alt="" title="">
                                    </a>
                                </div>
                                <!--eof .images -->
                            </div>
                            <div class="thumbnails-wrap">
                                <div id="product-thumbnails" class="owl-carousel thumbnails product-thumbnails" data-margin="10" data-nav="false" data-dots="true" data-responsive-lg="4" data-responsive-md="4" data-responsive-sm="3" data-responsive-xs="2" data-responsive-xxs="2">
                                    <a href="{{ asset($data->image_front) }}" class="zoom first" title="" data-gal="prettyPhoto[product-gallery]">
                                        <img src="{{ asset($data->image_front) }}" class="attachment-shop_thumbnail" alt="">
                                    </a> 
                                    <a href="{{ asset($data->image_back) }}" class="zoom first" title="" data-gal="prettyPhoto[product-gallery]">
                                        <img src="{{ asset($data->image_back) }}" class="attachment-shop_thumbnail" alt="">
                                    </a> 
                                </div>
                            </div>
                            <!-- eof .images -->
                        </div>
                        <div class="summary entry-summary col-sm-6">
                            <h1 itemprop="name" class="text-dark">{{ $data->name }}</h1>
                            
                            <div class="widget widget_tag_cloud widget_product_tag_cloud">
                                <strong class="">Size:</strong>
                                <div class="tagcloud"> 
                                    @php $size = explode(",", $data->size); @endphp
                                    @forelse($size as $s)
                                    <a href="#" title="">{{ $s }}</a> 
                                    @empty
                                    @endforelse
                                </div>
                            </div>

                            <div class="widget widget_tag_cloud widget_product_tag_cloud">
                                <strong class="">Colors:</strong>
                                <div class="tagcloud"> 
                                    @php $color = explode(",", $data->color); @endphp
                                    @forelse($color as $c)
                                    <a href="#" title="" style="background-color: {{$c}};">{{ $c }}</a> 
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <!-- .summary.col- -->
                    </div>
                    <!-- .product.row -->
                    <div class="woocommerce-tabs">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs wc-tabs" role="tablist">
                            <li class="active"><a href="#details_tab" role="tab" data-toggle="tab">Description</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content big-padding top-color-border">
                            <div class="tab-pane fade in active" id="details_tab">
                               {!! $data->description !!}
                            </div>
                        </div>
                        <!-- eof .tab-content -->
                    </div>
                    <!-- .woocommerce-tabs -->
                    <div class="related-products">
                        <h2>Related Products</h2>
                        <div class="owl-carousel with_shadow_items" data-dots="false" data-nav="true" data-loop="true" data-autoplay="true" data-responsive-lg="3" data-responsive-md="3" data-responsive-sm="3" data-responsive-xs="2">
                            @foreach(App\Product::where('category',$data->category)->get() as $row)
                                <article class="product vertical-item text-center men">
                                    <div class="item-media-wrap bottommargin_25">
                                        <div class="item-media"> 
                                            <a href="{{ route('product.view', $row->id) }}">
                                                <img src="{{ asset($row->image_front) }}" alt="" />
                                                <img src="{{ asset($row->image_back) }}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <h3 class="entry-title"> 
                                            <a href="{{ route('product.view', $row->id) }}">{{ $row->name }}</a> 
                                        </h3>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

