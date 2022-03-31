{{-- <section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer_logo_lead">
                    @if ($setting['logo'] != null)
                    <a href=""><img src="{{$setting['logo']->file_path}}" alt="#" /></a>
                    @endif
                    <p style="color: white !important;" >Drishya is one of the lively place to be in kathmandu valley right now. As it offers good food and music at its restaurant, With the perfect homely feel hotel underneath of it </p>
                    <!-- <a href="#">About Us</a> -->
                </div><!-- footer_logo_lead -->
            </div><!-- col -->
            <div class="col-md-4 text-center">
                <div class="footer_links">
                    <h4 class="foot_h4_pad">Useful Links</h4>
                            <ul class="foot_pad">
                                <style>
                                    .footer_links ul li>a {
                                        font-size: 14px;
                                    }
                                </style>
                                <li>
                                    <a href="#">Ebilling and business</a>
                                </li>
                                <li>
                                    <a href="">Services</a>
                                </li>
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                                <li>
                                    <a href="">Contact</a>
                                </li>
                                <li>
                                    <a href="">Products</a>
                                </li>
                            </ul>
                </div><!-- footer_links -->

            </div><!-- col -->
            <div class="col-md-4">
                <div class="footer_links">
                    <h4>Contact Info </h4>
                    <ul>
                        <h4>Main Office</h4>
                        <li>
                            <i class="fas fa-map-marker-alt"> {{$setting['address']}}</i>
                        </li>
                        <li>
                            <i class="fas fa-phone-volume" aria-hidden="true"> {{$setting['phoneNumber']}} | {{$setting['mobileNumber']}} </i>
                        </li>
                        <li>
                            <i class="fas fa-envelope"> {{$setting['email']}}</i>
                        </li>
                        <ul>
                            <li>
                                <a href="{{$setting['facebook']}}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="{{$setting['twitter']}}"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="{{$setting['instagram']}}"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="{{$setting['youtube']}}"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="{{$setting['website']}}"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </ul>
                </div><!-- footer_links -->
            </div><!-- col -->
        </div><!-- row -->
        <div class="row">
            <div class="col-md-3">
                <div class="footer_social">
                   
                    
                </div><!-- footer_social -->
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section> --}}
<section style="margin-top: -25px; background: #043249;">
    <div class="container">
        <div class="row">
            <div class="col-md-3" style=" margin-top: 55px;">
                <div class="footer_logo_lead">
                    @if ($setting['logo'] != null)
                    <a href=""><img src="{{$setting['logo']->file_path}}" alt="#" style="width:62%" /></a>
                    @endif
                    <!-- <a href="#">About Us</a> -->
                </div><!-- footer_logo_lead -->
            </div>
            <div class="col-md-3" style=" margin-top: 45px;">
                <p style="color: white !important;margin-left: -90px;" >Drishya is one of the lively place to be in kathmandu valley right now. As it offers good food and music at its restaurant, With the perfect homely feel hotel underneath of it </p>
            </div>
            <div class="col-md-3" style ="margin-left:-10px;">
                <div class="linksdcs" style=" margin-top: 35px;
                color: white;">
                    <h4 class="text-center">Services</h4>
                    <ul style="color:white; margin-left:105px;">
                        <li>
                            <a href="{{route('index')}}" style="color:white">Home </a>
                        </li>
                        <li>
                            <a href="{{route('drishya.rooms')}}" style="color:white">Rooms</a>
                        </li>
                        <li>
                            <a href="{{('banquet')}}" style="color:white">Banquet</a>
                        </li>
                        <li>
                            <a href="{{('restaurant')}}" style="color:white">Restaurant</a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}" style="color:white">Contact Us</a>
                        </li>
                        <li>
                            <a href="{{('about')}}" style="color:white">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="linksdcs" style="margin-top: 35px;
                color: white;">
                    <h4 style="position: relative; left:70px;">Contact Us</h4>
                    <ul style="position: relative; left:70px;">
                        <li>
                           <span></span> <i class="fas fa-map-marker-alt text-white fa-sm"> &nbsp;  &nbsp;{{$setting['address']}}</i> &nbsp;
                        </li>
                        <li>
                            <i class="fas fa-phone-volume text-white fa-sm" aria-hidden="true"> &nbsp;  &nbsp; {{$setting['phoneNumber']}} </i>
                        </li><br>
                        <li>
                            <i class="fas fa-phone-volume text-white fa-sm" aria-hidden="true"> &nbsp;  &nbsp;{{$setting['mobileNumber']}} </i>
                        </li>
                    </ul>
                    <br><br>
                </div>
            </div>

        </div>
    </div>
    <div class="copyright"style="background: #043249; border-top: 1px solid white; margin-left:10%; margin-right:9%;">
        <div class="container">
            <div class="row" style = "padding-top:10px;">
                <div class="col-md-6"style="padding-top:5px;margin-left: -80px; padding-bottom: 10px;">
                    <div class="copyright_content d-flex flex-row align-items-center justify-content-center">
                        <div class="text-white">
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> ,Drishya Hotel. All rights reserve.
                        </div>
                    </div>
                </div>

                <div class = "col-md-6" style = "text-align:right;">
                    <ul style="position: relative; left:70px;">
                        <li style="display: inline">
                            <a href="{{$setting['facebook']}}" target='_blank'><i class="fab fa-facebook-f fa-1x text-white" aria-hidden="true"></i></a>
                        </li> &nbsp;&nbsp;
                        <li style="display: inline">
                            <a href="{{$setting['twitter']}}" target='_blank'><i class="fab fa-twitter fa-1x text-white" aria-hidden="true"></i></a>
                        </li>&nbsp;&nbsp;
                        <li style="display: inline">
                            <a href="{{$setting['instagram']}}" target='_blank'><i class="fab fa-instagram fa-1x text-white" aria-hidden="true"></i></a>
                        </li>&nbsp;&nbsp;
                        <li style="display: inline">
                            <a href="{{$setting['youtube']}}" target='_blank'><i class="fab fa-youtube fa-1x text-white" aria-hidden="true"></i></a>
                        </li>&nbsp;&nbsp;
                        <li style="display: inline">
                            <a href="{{$setting['website']}}" target='_blank'><i class="fab fa-google-plus-g fa-1x text-white" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
