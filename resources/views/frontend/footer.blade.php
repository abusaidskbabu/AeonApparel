<footer class="py-2" style="background: rgb(240,227,204);
background: linear-gradient(90deg, rgba(240,227,204,1) 0%, rgba(194,166,115,1) 100%);">
    <div class="container">
        <div class="row row-cols-lg-1">
            <div class="col-lg-8 col-md-8 col-sm-8">
{{--                <h3 data-target="#collapse_4">About<br> MM Clothing</h3>--}}

                <img width="80px" class="img-fluid" src="{{ asset('frontend/img/mmclothinglogo.png') }}" alt="">


                <p class="pt-3 text-black" style="text-align: justify !important;">MM Clothing company established by some energetic, enthusiasm group of people who has Textile education background and more than 15 years working experience in factories as well as buying and liaison office.
                    <br>
                    <br>
                    We are always ready to take the challenge of meeting buyers demand for all sort of high quality garments as per buyer’s requirement. We welcome customers from all over the world, and in return allow us to prove to you that MM Clothing can be your best source of buying. We always keep our promises to keep a good and long-term business relationship to our customers all over the world.


            </div>


                    <div style="margin-top: 46px" class="col-md-2 col-lg-2 col-sm-2">
                        <p style="text-align: left; font-size: 1.5em">Services</p>


                            @php
                                $services = App\Service::all();
                            @endphp
                            <ul>
                                @foreach ($services as $service)
                                    <li><a class="links" style="text-transform: capitalize" href="{{route('service.view', $service->id)}}">{{ strtolower($service->title) }}</a></li>
                                @endforeach
                            </ul>

                    </div>

                    <div style="margin-top: 46px" class="col-md-2 col-lg-2 col-sm-2">
                        <p style="text-align: left; font-size: 1.5em">Quick Links</p>


                            <ul>
                                <li><a class="links" href="/">Home</a></li>
                                <li><a class="links" href="/about-us">About Us</a></li>
                                <li><a class="links" href="/ourteam">Our Team</a></li>
                                <li><a class="links" href="/contact-us">Contact Us</a></li>
                                <li><a class="links" href="#0">Terms & conditions</a></li>
                            </ul>

                    </div>








{{--            <div class="col-lg-3 col-md-3">--}}
{{--                    <h3 data-target="#collapse_3">Contacts</h3>--}}
{{--                <div class="collapse dont-collapse-sm contacts" id="collapse_3">--}}
{{--                    <ul>--}}
{{--                        <li><i class="ti-home"></i>Flat # 8B, Level-8, North Tower, Plot-107, Sector-7,<br>Uttara, Dhaka-1230,Bangladesh</li>--}}
{{--                        <li><i class="ti-headphone-alt"></i>Tel: +88-02-48950058,<br>+88-02-48950059 </li>--}}
{{--                        <li><i class="ti-email"></i><a href="#0">info@mmclothingbd.com</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
        <!-- /row-->
        <hr style="background-color: #000">

        <div class="row">
            <div class="col-md-9">
                <div class="row" style="font-size: 10px; padding-left: 15px">
                    <p id="copyright">&copy; 2020 MM Clothing BD, All Rights Reserved &nbsp;</p>
                    <a id="vmsl" href="http://vmsl.com.bd">Developed by VMSL</a>
                </div>

            </div>

            <div class="col-md-3">

                    <div class="" style="text-align: right">
                        <ul class="flex mt-1 justify-evenly socialIcons">
                            <li><a href="#0"><i class="fi-cnsuxx-facebook-circle"></i></a></li>
                            <li><a href="#0"><i class="fi-cnsuxx-youtube"></i></a></li>
                            <li><a href="#0"><i class="fi-cnsuxx-twitter"></i></a></li>
                            <li><a href="#0"><i class="fi-cnsuxx-linkedin"></i></a></li>


                        </ul>
                    </div>
                </div>
        </div>

    </div>
</footer>
<script>
    document.getElementById("year").innerHTML = new Date().getFullYear();
</script>
<!--/footer-->
