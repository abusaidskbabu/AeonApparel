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
                            <li><a href="{{ route('product.category.view', $category->id) }}">Category</a></li>
                            <li>{{$category->category_name}}</li>

                        </ul>
                    </div>
                    <h1>{{$category->category_name}}'s Collection</h1>
                </div>
            </div>
            <img src="{{ asset('frontend/img/slides/slider 4.jpg') }}" class="img-fluid" alt="">
        </div>

        <div class="container margin_60">

            <div class="row small-gutters">
                @foreach ($data as $dt)
                <div class="col-lg-3 col-md-6">
                    <div class="grid_item">
                        <figure>
                            <a href="{{route('product.view', $dt->pro_id)}}" data-toggle="tooltip" title="Details" data-placement="center">
                                @if ($dt->image == null)
                                <img src="frontend/img/bath-robe.svg" alt="{{$dt->name}}" width="300" height="300">
                                @else
                                <img class="owl-lazy" src="{{asset($dt->image)}}" alt="{{$dt->name}}" width="300" height="300">
                                @endif
                            </a>
                        </figure>
                        <a href="{{route('product.view', $dt->pro_id)}}">
                            <h3>{{$dt->name}}</h3>
                        </a>
                    </div>
                </div>
                <!-- /col -->
                @endforeach
            </div>
        </div>
    </main>
	@include('frontend.footer')
</div>
@endsection
