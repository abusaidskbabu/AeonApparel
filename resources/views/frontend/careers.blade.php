@extends('frontend.layout.master')

@section('content')
    <section class="page_breadcrumbs cs main_color2 gradient lighten_gradient section_padding_top_40 section_padding_bottom_40 table_section table_section_md" style="background-image: linear-gradient(29deg,#1b1b1b 35%,#ff0000 106%)!important;">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb greylinks">
                    <li> 
                        <a href="{{ route('home') }}">
                        Home
                    </a> 
                    </li>
                    <li> <a href="#">Career</a> </li>
                </ol>            
            </div>
        </div>
    </section>

    <section id="contact-form" class="ls pt-4 section_padding_bottom_150" >
        <div class="container">
            <div class="row flex-wrap ">
                <div class="col-xs-12 col-md-5 col-md-push-6 pt-4"> 
                    @php
                    $career = DB::Table('jobs')->orderBy('id','DESC')->first();
                    @endphp
                    @if($career)
                        <h4 class="">{{ $career->title ?? '' }}</h4>
                        <p class="small-text grey">Application Deadline: {{ $career->last_date ?? '' }}</p>
                        {!! $career->content !!}
                    @else
                        <p class="small-text grey">No Jobs Available. </p>
                    @endif
                    
                </div>
                <div class="col-xs-12 col-md-7 col-md-pull-6">
                    <h2 class="section_header">Join Our Team</h2>
                    <p class="small-text grey">JOIN elegrand FAMILY</p>
                    <div class="toppadding_5"></div>
                    <form class="contact-form row columns_padding_10" method="post" action="">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group"> <input type="text" aria-required="true" size="30" value="" name="fristname" id="fristname" class="form-control with_icon" placeholder="Jhone"> <i class="qtyler-user grey"></i> </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group"> <input type="text" aria-required="true" size="30" value="" name="lastname" id="lastname" class="form-control with_icon" placeholder="Doe"> <i class="qtyler-user grey"></i> </div>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group"> <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control with_icon" placeholder="Email Address"> <i class="qtyler-envelope grey"></i> </div>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group"> <input type="tel" size="30" value="" aria-required="true" name="phone" id="phone" class="form-control with_icon" placeholder="Phone Number"> <i class="qtyler-phone grey"></i> </div>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group"> <input type="text" aria-required="true" size="30" value="" name="address" id="address" class="form-control with_icon" placeholder="Present Address"> <i class="fas fa-map-marker-alt grey"></i> </div>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group"> <input type="text" aria-required="true" size="30" value="" name="qualificaton" id="qualificaton" class="form-control with_icon" placeholder="Qualificatons"> <i class="fas fa-user-graduate grey"></i> </div>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group"> <input type="text" aria-required="true" size="30" value="" name="position" id="position" class="form-control with_icon" placeholder="Position Applying For"> <i class="fas fa-user-tie grey"></i> </div>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group"> 
                                <input type="file" aria-required="true" size="30" value="" name="file" id="file" class="form-control with_icon" placeholder="Position Applying For"> <i class="fa fa-question grey" data-toggle="tooltip" data-placement="bottom" title="Upload CV (file must be in word or pdf)"></i> 
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group"> <textarea aria-required="true" rows="3" cols="45" name="message" id="message" class="form-control with_icon" placeholder="Message"></textarea> <i class="qtyler-comment grey"></i> </div>
                        </div>
                        <div class="col-xs-12 bottommargin_0">
                            <div class="contact-form-submit"> <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button min_width_button margin_0" style="color: #b17f31;">APPLY</button> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
