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
                    <li><a href="{{ route('division', $products[0]->division) }}">{{ $products[0]->division_name }}</a></li>
                    <li><a href="{{ route('category', ['div_id' => $products[0]->division, 'cat_id' => $products[0]->category]) }}">{{ $products[0]->category_name }}</a></li>
                    <li>{{ $products[0]->gender_name }}</li>
                </ol>            
            </div>
        </div>
    </section>

    <section class="ls pt-4 section_padding_bottom_150 columns_padding_30">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-9 col-lg-9 col-md-push-3 col-lg-push-3">
                    <div class="columns-3">
                        <ul id="products" class="products list-unstyled">
                            @forelse($products as $product)
                                <li class="product type-product">
                                    <article class="vertical-item text-center with-corner-label men">
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
                                                <a href="{{ route('product.view', $product->id) }}">{{ $product->name }}</a> 
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                </div>
                <aside class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-md-pull-9 col-lg-pull-9 col-sm-offset-3 col-md-offset-0">
                    <div class="widget widget_categories">
                        <h3 class="widget-title">Categories</h3>
                        <ul class="greylinks">
                            <li> 
                                <a href="shop.html">Picanha turducken</a> <span>34</span>
                                <ul>
                                    <li> <a href="shop.html">Tail Meatball</a> <span>15</span> </li>
                                    <li> <a href="shop.html">Sausage Beef</a> <span>19</span> </li>
                                </ul>
                            </li>
                            <li> <a href="shop.html">Jowl Corned</a> <span>27</span>
                                <ul>
                                    <li> <a href="shop.html">Pork Chop</a> <span>15</span> </li>
                                    <li> <a href="shop.html">Beef Pork Loin</a> <span>12</span> </li>
                                </ul>
                            </li>
                            <li> <a href="#0">Ground Round</a> <span>38</span> </li>
                        </ul>
                    </div>
                </aside>
                <!-- eof aside sidebar -->
            </div>
        </div>
    </section>

@endsection
