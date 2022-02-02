<section class="footer">
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
                    </ul>
                </div><!-- footer_links -->
            </div><!-- col -->
        </div><!-- row -->
        <div class="row">
            <div class="col-md-3">
                <div class="footer_social">
                   
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
                </div><!-- footer_social -->
            </div><!-- col -->
            <div class="col-md-3">
                <div class="copy_right">
                    <i class="fas fa-copyright"></i> <span>Drishya</span>
                </div><!-- copy_right -->
            </div><!-- col -->
            <div class="col-md-3">
                <hr>
            </div><!-- col -->
            <div class="col-md-3">
                <div class="powered">
                    <span>All Right Reserved</span>
                </div><!-- powered -->
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section>