@extends('frontend.base')
@section('css')
    <link href="{{asset('frontend/css/product_page.css')}}" rel="stylesheet">
@endsection
@section('body')
    <div id="page">
        @include('frontend.nav')
        <div class="flex flex-column justify-between">
            <main class="text-black mb-40">
                <div class="container">
                    <div class="">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $division->division_name }}</li>

                            </ol>
                        </nav>
                        <h1>{{$division->division_name}}</h1>
                    </div>


                    <div class="row row-cols-lg-1">
                        @forelse($category as $cat)
                            <div class="col-md-4 col-lg-4 col-sm-4 mb-10">
                                <div class="box_view text-center">
                                    <a class="btn_2 full-width" href="{{ route('category', ['div_id' => $division->id, 'cat_id' => $cat->cat_id]) }}">{{ $cat->category_name }}</a>
                                </div>

                            </div>
                        @empty
                        @endforelse
                    </div>

                </div>

                <hr>


            </main>
            <div>
                @include('frontend.footer')
            </div>

        </div>

    </div>
@endsection
