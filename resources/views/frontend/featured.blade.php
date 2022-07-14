<div class="container margin_60_35">
    <div class="main_title">
        <h2>Featured Products</h2>
        <span>Products</span>
        <p>Some of our best quality products</p>
    </div>
    <div class="row small-gutters">

@forelse($featuredProducts as $featured)

            <div class="col-6 col-md-4 col-xl-3">
                <div class="grid_item">
                    <figure>

                        <span class="ribbon new">New</span>

                        <a href="{{ route('product.view', $featured->id) }}">
                            <img style="height: 300px; width: 500px" class="img-fluid img-thumbnail lazy loaded" src="{{ asset($featured->image) }}" data-src="{{ asset($featured->image) }}" alt="" data-was-processed="true">
                            <img style="height: 300px; width: 500px" class="img-fluid img-thumbnail lazy loaded" src="{{ asset($featured->image) }}" data-src="{{ asset($featured->image) }}" alt="" data-was-processed="true">
                        </a>

                    </figure>

                    <a href="{{ route('product.view', $featured->id) }}">
                        <h3>{{ $featured->name }}</h3>
                    </a>


                </div>
                <!-- /grid_item -->
            </div>
            <!-- /col -->

@empty
        @endforelse

    </div>
    <!-- /row -->
</div>

<div class="featured lazy" data-bg="{{ asset('frontend/img/slides/slider 4.jpg') }}" data-was-processed="true" style='background-image: url("{{ asset('frontend/img/slides/slider 4.jpg') }}")'>
    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)" style="background-color: rgba(0, 0, 0, 0.5);">
        <div class="container margin_60">
            <div class="row justify-content-center justify-content-md-start">
                <div class="col-lg-6 wow animated" data-wow-offset="150" style="visibility: visible;">
                    <h3>T-Shirts<br>Colors Available</h3>
{{--                    <p>Lightweight cushioning and durable support with a Phylon midsole</p>--}}
                    <div class="feat_text_block">

{{--                        <a class="btn_1" href="{{ route('products.') }}" role="button">View</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


