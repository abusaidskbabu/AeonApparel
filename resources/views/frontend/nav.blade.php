
<div class="container-fluid">

        <nav class="navbar navbar-expand-lg row" id="main_navbar">

            <div class="col-md-2 col-sm-2 col-xs-2">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('frontend/img/mmclothinglogo.png') }}" width="40%" class="img-fluid ml-20" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="col-md-8 col-sm-7 col-xs-7 text-uppercase text-black">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto w-full flex justify-evenly">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                About
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="nav-item">
                                    <a class="dropdown-item " href="/about-us" aria-expanded="false">
                                        About Us
                                    </a>

                                </li>

                                <li class="nav-item dropdown">
                                    <a class="dropdown-item " href="/our-partner" aria-expanded="false">
                                        Our Partners
                                    </a>

                                </li>

                                <li class="nav-item dropdown">
                                    <a class="dropdown-item " href="/our-values"  aria-expanded="false">
                                        Our Values
                                    </a>

                                </li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                @php

                                $service = \App\Service::all();

                                @endphp

                                @forelse($service as $ser)

                                    <li class="nav-item">
                                        <a class="dropdown-item " href="{{route('service.view', $ser->id)}}" aria-expanded="false">
                                            {{ $ser->title }}
                                        </a>

                                    </li>

                                @empty
                                @endforelse


                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Products
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                @php

                                    $division = \App\product_division::all();

                                @endphp


                                @foreach($division as $div)

                                    <li class="nav-item dropdown">

                                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            {{ $div->division_name }}
                                        </a>


                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">

                                            @php
                                                $category = DB::table('products')
                                                            ->join('product_categories','products.category', '=', 'product_categories.id')
                                                            ->select('product_categories.category_name', 'product_categories.id as cat_id')
                                                            ->where('products.division', $div->id)
                                                            ->distinct()
                                                            ->get();
                                            @endphp

                                            @if(!$category->isEmpty())

                                                @foreach ($category as $cat)


                                                    <li class="nav-item dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
                                                           aria-haspopup="true" aria-expanded="false">
                                                            {{ $cat->category_name }}
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">

                                                            @php
                                                                $gender = DB::table('products')
                                                                            ->join('product_genders','products.gender', '=', 'product_genders.id')
                                                                            ->select('product_genders.gender_name', 'products.gender as gen_id')
                                                                            ->where('products.category', $cat->cat_id)
                                                                            ->distinct()
                                                                            ->get();

                                                            @endphp

                                                            @if(!$gender->isEmpty())


                                                                @foreach($gender as $gen)

                                                                    <li class="nav-item dropdown">
                                                                        <a class="dropdown-item " href="{{ route('products_view', ['div_id'=>$div->id, 'cat_id'=>$cat->cat_id, 'gen_id'=>$gen->gen_id]) }}"
                                                                           aria-haspopup="true" aria-expanded="false">
                                                                            {{ $gen->gender_name }}
                                                                        </a>

{{--                                                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}

{{--                                                                            @php--}}
{{--                                                                                $product = DB::table('products')--}}
{{--                                                                                            ->join('product_divisions','products.division', '=', 'product_divisions.id')--}}
{{--                                                                                            ->join('product_categories','products.category', '=', 'product_categories.id')--}}
{{--                                                                                            ->join('product_genders','products.gender', '=', 'product_genders.id')--}}
{{--                                                                                            ->select('products.name', 'products.id as pro_id')--}}

{{--                                                                                            ->where('products.gender', $gen->gen_id)--}}
{{--                                                                                            ->orWhere('products.division', $div->div_id)--}}
{{--                                                                                            ->orWhere('products.category', $cat->cat_id)--}}
{{--                                                                                            ->distinct()--}}
{{--                                                                                            ->get();--}}

{{--                                                                            @endphp--}}

{{--                                                                            @if (!$product->isEmpty())--}}
{{--                                                                                @foreach ($product as $pro)--}}

{{--                                                                                    <li class="nav-item">--}}
{{--                                                                                        <a class="dropdown-item" href="{{ route('product.view', $pro->pro_id) }}" id="navbarDropdown1"--}}
{{--                                                                                           aria-expanded="false">--}}
{{--                                                                                            {{ $pro->name }}--}}
{{--                                                                                        </a>--}}

{{--                                                                                    </li>--}}

{{--                                                                                @endforeach--}}
{{--                                                                            @endif--}}
{{--                                                                        </ul>--}}

                                                                    </li>

                                                                @endforeach
                                                            @endif


                                                        </ul>
                                                    </li>

                                                @endforeach
                                            @endif
                                        </ul>
                                    </li>

                                @endforeach


                            </ul>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link" href="/ourteam">Our Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/career">Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact-us">Contact Us</a>
                        </li>


                    </ul>

                </div>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3 pr-0">
                <form class="form-inline my-2 my-lg-0">
                    <div class="searchbar">
                        <input class="search_input" type="text" name="">
                        <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                    </div>
                </form>
            </div>

        </nav>




</div>



