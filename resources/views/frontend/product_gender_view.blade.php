@extends('frontend.base')
@section('body')
<div id="page">
    @include('frontend.nav')


    <main class="bg_gray">

        <div class="top_banner">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)" style="background-color: rgba(0, 0, 0, 0.3);">
                <div class="container">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="#">Category</a></li>
                            <li>{{$category->division_name}}</li>

                        </ul>
                    </div>
                    <h1>{{$category->division_name}}'s Collection</h1>
                </div>
            </div>
            <img src="{{ asset('frontend/img/slides/'. strtolower($category->division_name) . 'collection.jpg') }}" class="img-fluid" alt="">
        </div>

        <div class="container margin_60">

            @php
                $product = DB::table('products')
                //->join('product_categories', 'products.category', '=', 'product_categories.id')
                ->where('gender', $category->id)
                ->where('status', 1)
                ->get()
                ->groupBy('category');
                //$product;


            @endphp
            <div class="row small-gutters">
                @foreach ($product as $pro)
                   @foreach ($pro as $p)
                   <div class="col-lg-3 col-md-6">
                   <div class="grid_item">
                    <figure>
                        <a href="{{route('product.view', $p->id)}}" data-toggle="tooltip" title="Details" data-placement="center">
                            @if ($p->image == null)
                            <img src="frontend/img/bath-robe.svg" alt="{{$p->name}}" width="300" height="300">
                            @else
                            <img class="owl-lazy" src="{{asset($p->image)}}" alt="{{$p->name}}" width="300" height="300">
                            @endif
                        </a>
                    </figure>
                    <a href="{{route('product.view', $p->id)}}">
                        <h3>{{$p->name}}</h3>
                    </a>
                </div>
            </div>
                   @endforeach
                <!-- /col -->

                @endforeach
            </div>
        </div>
    </main>
	@include('frontend.footer')
</div>
@endsection
