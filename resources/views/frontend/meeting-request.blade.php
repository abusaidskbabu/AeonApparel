@extends('frontend.layout.master')
@php 
    $wss = DB::table('website_setting')->orderBy('id','DESC')->first();
@endphp
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
                    <li> <a href="#">Send Meeting Request</a> </li>
                </ol>            
            </div>
        </div>
    </section>

    <section class="ls columns_padding_30 pt-4 ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Meeting Request Form</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 to_animate" data-animation="scaleAppear">
                    <form class="contact-form columns_padding_10 bottommargin_40" method="post" action="{{ route('contact') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group bottommargin_0"> 
                                    <label for="name">Full Name <span class="required">*</span></label> <i class="fa fa-user highlight" aria-hidden="true"></i> 
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group bottommargin_0"> <label for="phone">Phone Number<span class="required">*</span></label> <i class="fa fa-phone highlight" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number">                                         </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group bottommargin_0"> <label for="email">Email address<span class="required">*</span></label> <i class="fa fa-envelope highlight" aria-hidden="true"></i> <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">                                           </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group bottommargin_0">
                                    <select id="subject" aria-required="true" class="" name="subject">
                                        <option value="-1">- Subject -</option>
                                        @foreach($service as $row)
                                            <option value="{{$row->title}}">{{$row->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group bottommargin_0"> <label for="no_of_perticipate">No. of Participate<span class="required">*</span></label> <i class="fa fa-users highlight" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="no_of_perticipate" id="no_of_perticipate" class="form-control" placeholder="No. of Participate">                                          </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group bottommargin_0"> <label for="schedule_time">Schedule Time<span class="required">*</span></label> <i class="fa fa-clock highlight" aria-hidden="true"></i> <input type="time" aria-required="true"  name="schedule_time" id="schedule_time" class="form-control" placeholder="Schedule Time">                                          </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group bottommargin_0"> <label for="schedule_date">Schedule Date<span class="required">*</span></label> <i class="fa fa-calendar highlight" aria-hidden="true"></i> <input type="date" aria-required="true" size="30" value="" name="schedule_date" id="schedule_date" class="form-control" placeholder="Schedule Date">                                          </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group bottommargin_0">
                                    <select id="pa_color" aria-required="true" class="" name="meeting_planform">
                                        <option value="-1">-Meeting Platform-</option>
                                        <option value="google meet">Google Meet</option>
                                        <option value="Zoom">Zoom</option>
                                        <option value="Skype">Skype</option>
                                        <option value="Whatsapp">Whatsapp</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="contact-form-message form-group bottommargin_0"> <label for="message">Message</label> <i class="fa fa-comment highlight" aria-hidden="true"></i> <textarea aria-required="true" rows="3" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea> </div>
                            </div>
                            <div class="col-sm-12 bottommargin_0">
                                <div class="content-justify v-center v-spacing"> 
                                    <button href="/about-us" class="theme_button small_button">Send Request</button>
                                </div>
                                
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </section>
@endsection
