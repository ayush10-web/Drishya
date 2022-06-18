@extends('frontend.layouts.master')
@section('content')
@include('backend.layouts.alerts')
<section class="service_banner">
    <div class="banner_width">
        <img src="images/restaurant.png" alt="#">
{{-- <img src="images/contact-us.png" alt="#"> --}}
    </div><!-- banner_width -->
    <div class="service_overlay contact_overlay">
        <h1 style="color:#0e334a;">CONTACT US</h1>
    </div><!-- service_overlay -->
</section><!-- service_banner -->
<section class="career_blk contact_blk">
    
        <div class="container">
            <div class="row ">
            
            <div class="col-md-6">
                <div class="contact_form">
                    <h1 style="color:#0e334a;">If you have any inquiries then please feel free to contact us.</h1>
                    <form action="{{route('contact.add')}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="name" placeholder="Your Name" required>
    
                        <input type="email" name="email" placeholder="Your E-mail Address" required>
    
                        <input type="hidden" name="message_from" value="m">
                        <input type="text" name="contact_number" placeholder="Your Contact Number">
                        <textarea rows="6"  name="message" cols="30" placeholder="Your Message"></textarea>
                        <input id="captcha" type="text"  placeholder="Enter Captcha" name="captcha" >
                        
                        <div class="captcha">
                            <span>{!! captcha_img() !!}</span>
                            <button type="button" class="btn btn-danger" class="reload" id="reload">
                            ↻
                            </button>
                        </div>
                        <button class="btn btn-primary">Submit</button>
    
                    </form>
                </div><!-- contact_form -->
            </div><!-- col -->
            <div class="col-md-6" style="position: relative; top:105px;">
                <div class="card" style="vertical-align: center">
                    <div class="card-body" style="padding-top: 47px; padding-bottom:47px;">
                        <div class="contacts text-center" >
                            <h3 style="margin-bottom: 30px;">OR CONTACT US ON:</h3>
                            <h5 style="font-weight: 600;">Address </h5>
                            <p><i class="fa fa-map-marker" style="margin-right: 10px;" aria-hidden="true"></i>{{$setting['address']}}</p> <br>
                            <h5 style="font-weight: 600;">Phone Number</h5>
                            <p><a href="tel:+{{$setting['phoneNumber']}}"><i class="fa fa-phone-alt" style="margin-right: 10px;" aria-hidden="true"></i>{{$setting['phoneNumber']}}</a>&nbsp;&nbsp;|&nbsp;&nbsp; <a href="tel:+{{$setting['mobileNumber']}}"><i class="fa fa-mobile-alt" style="margin-right: 10px;" aria-hidden="true"></i>{{$setting['mobileNumber']}}</a></p><br>
                            <h5 style="font-weight: 600;">Email Address</h5>
                            <p><a href="mailto:{{$setting['email']}}"><i class="fa fa-envelope" style="margin-right: 10px;"></i> {{$setting['email']}}</a></p><br>
                            <h5 style="font-weight: 600;">Socials</h5>
                            <p><ul style="">
                                <li style="display: inline">
                                    <a href="{{$setting['facebook']}}" target='_blank'><i class="fab fa-facebook-f fa-1x" aria-hidden="true"></i></a>
                                </li> &nbsp;&nbsp;
                                <li style="display: inline">
                                    <a href="{{$setting['twitter']}}" target='_blank'><i class="fab fa-twitter fa-1x" aria-hidden="true"></i></a>
                                </li>&nbsp;&nbsp;
                                <li style="display: inline">
                                    <a href="{{$setting['instagram']}}" target='_blank'><i class="fab fa-instagram fa-1x" aria-hidden="true"></i></a>
                                </li>&nbsp;&nbsp;
                                <li style="display: inline">
                                    <a href="{{$setting['youtube']}}" target='_blank'><i class="fab fa-youtube fa-1x" aria-hidden="true"></i></a>
                                </li>&nbsp;&nbsp;
                                <li style="display: inline">
                                    <a href="{{$setting['website']}}" target='_blank'><i class="fab fa-google-plus-g fa-1x" aria-hidden="true"></i></a>
                                </li>
                            </ul></p>
                            
                        </div>
                    </div>
                </div>
               
            </div><!-- col --> 
        </div>
       
    </div>
</section>
<section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.743903426665!2d85.28259231506178!3d27.694309082797293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19dffb5c3e1f%3A0xb1b59d70fb2b8c55!2sDrishya%20Hotel%20and%20Restaurant!5e0!3m2!1sen!2smy!4v1644655525665!5m2!1sen!2smy" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>
@endsection