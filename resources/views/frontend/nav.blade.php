
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
                                Products
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @php
                                    $parrent_cat = \App\product_division::whereNull('parent_id')->get();
                                @endphp
                                @foreach($parrent_cat as $pcat)
                                    <li class="nav-item dropdown">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            {{ $pcat->category_name }}
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                            @php
                                                $category = \App\product_division::where('parent_id', $pcat->id)->get();
                                            @endphp

                                            @if(!$category->isEmpty())
                                                @foreach ($category as $cat)
                                                    <li class="nav-item dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
                                                           aria-haspopup="true" aria-expanded="false">
                                                            {{ $cat->category_name }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </li>

                                @endforeach

                            </ul>
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



