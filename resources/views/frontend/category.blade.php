@extends('frontend.base')
@section('css')
    <link href="{{asset('frontend/css/product_page.css')}}" rel="stylesheet">
@endsection
@section('body')
    <div id="page">
        @include('frontend.nav')
        <main class="text-black mb-40">
            <div class="container">
                <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('division', $division->id) }}">{{ $division->division_name }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $category->category_name }}</li>

                    </ol>
                </nav>
                <h1>{{$category->category_name}}</h1>
                </div>


                <div class="row row-cols-lg-1">
                    @forelse($gender as $gen)
                        <div class="col-md-4 col-lg-4 col-sm-4 mb-10">
                            <div class="box_view">
                                <a class="btn_2 full-width" href="{{ route('products_view', ['div_id'=>$division->id, 'cat_id'=>$category->id, 'gen_id'=>$gen->gen_id]) }}">
                                    {{ $gen->gender_name }}</a>
                            </div>

                        </div>
                    @empty
                    @endforelse
                </div>

            </div>

            <hr>


        </main>
        @include('frontend.footer')
    </div>
@endsection
