@extends('frontend.layout.master')
@php 
    $wss = DB::table('website_setting')->orderBy('id','DESC')->first();
@endphp
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
                    <li> <a href="#">Contact Us</a> </li>
                </ol>            
            </div>
        </div>
    </section>

    <section class="ls columns_padding_30 pt-4 ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Contact Form</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 to_animate" data-animation="scaleAppear">
                    <form class="contact-form columns_padding_10 bottommargin_40" method="post" action="{{ route('contact') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group bottommargin_0"> <label for="name">Full Name <span class="required">*</span></label> <i class="fa fa-user highlight" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">                                          </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group bottommargin_0"> <label for="phone">Phone Number<span class="required">*</span></label> <i class="fa fa-phone highlight" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number">                                         </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group bottommargin_0"> <label for="email">Email address<span class="required">*</span></label> <i class="fa fa-envelope highlight" aria-hidden="true"></i> <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">                                           </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group bottommargin_0"> <label for="subject">Subject<span class="required">*</span></label> <i class="fa fa-flag highlight" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">                                          </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="contact-form-message form-group bottommargin_0"> <label for="message">Message</label> <i class="fa fa-comment highlight" aria-hidden="true"></i> <textarea aria-required="true" rows="3" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea> </div>
                            </div>
                            <div class="col-sm-12 bottommargin_0">
                                <div class="contact-form-submit topmargin_10"> <button type="submit" class="theme_button min_width_button margin_0" style="color: #b17f31;">Send message</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 to_animate" data-animation="scaleAppear">
                    <ul class="list1 no-bullets no-top-border no-bottom-border">
                        <li>
                            <div class="media">
                                <div class="media-left"> <i class="rt-icon2-shop highlight fontsize_18"></i> </div>
                                <div class="media-body">
                                    <h6 class="media-heading grey">Postal Address:</h6> {{ $wss->address ?? ''}} </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <div class="media-left"> <i class="rt-icon2-phone5 highlight fontsize_18"></i> </div>
                                <div class="media-body">
                                    <h6 class="media-heading grey">Phone:</h6> 
                                    @php
                                        $all_phone = explode(",",$wss->phone)
                                    @endphp

                                    @foreach($all_phone as $key => $value) 
                                        <a href="tel:{{ $value }}"> {{ $value }}</a> 
                                    @endforeach 
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <div class="media-left"> <i class="rt-icon2-mail highlight fontsize_18"></i> </div>
                                <div class="media-body greylinks">
                                    <h6 class="media-heading grey">Email:</h6> 
                                    @php
                                        $all_email = explode(",",$wss->email)
                                    @endphp

                                    @foreach($all_email as $key => $value) 
                                        <a href="mailto:{{ $value }}"><span>{{ $value }}</span></a> 
                                    @endforeach
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="map" class="ls p-4" data-address="522 Chapel St, South Yarra VIC 3141, Australia">
        <div class="container">
            <!-- marker description and marker icon goes here -->
            <div class="map_marker_description">
                <h3>Map Title</h3>
                <img class="map_marker_icon" src="{{ asset('frontend/images/map_marker_icon.png') }}" alt="">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.5227559608857!2d90.36619841486234!3d23.83556399143471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c14822a366b3%3A0x9219d84aa68062a6!2sRd%20No%204%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1634204961021!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
            </div>
        </div>
    </section>
@endsection
