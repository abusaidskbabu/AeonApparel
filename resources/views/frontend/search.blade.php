@extends('frontend.base')
@section('body')
    <div id="page">
        @include('frontend.nav')
        <main class="bg_gray">



            <div class="container margin_60">

                <h1>Search Results...</h1>
                <br>

                <div class="row small-gutters">
                    @forelse($products as $product)


                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="grid_item">
                                <figure>

                                    <span class="ribbon new">New</span>

                                    <a href="{{ route('product.view', $product->id) }}">
                                        <img style="height: 300px; width: 500px" class="img-fluid img-thumbnail lazy loaded" src="{{ asset($product->image) }}" data-src="{{ asset($product->image) }}" alt="" data-was-processed="true">
                                        <img style="height: 300px; width: 500px" class="img-fluid img-thumbnail lazy loaded" src="{{ asset($product->image) }}" data-src="{{ asset($product->image) }}" alt="" data-was-processed="true">
                                    </a>

                                </figure>

                                <a href="{{ route('product.view', $product->id) }}">
                                    <h3>{{ $product->name }}</h3>
                                </a>


                            </div>
                            <!-- /grid_item -->
                        </div>
                        <!-- /col -->

                    @empty
                    @endforelse

                </div>
            </div>
        </main>
        @include('frontend.footer')
    </div>
@endsection
