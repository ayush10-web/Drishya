<?php /* 
<section class="header_top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 col-md-2 no-pad">
                <ul class="head_location wow bounceInLeft"
                    style=" visibility: visible; animation-delay: 0.4s; animation-name: bounceInLeft;">
                    <li><a href="#">
                            <svg class="Icon_awesome_location_arrow" viewBox="0 0 15 15">
                                <path fill="#0e334a" id="Icon_awesome_location_arrow"
                                      d="M 13.02335739135742 0.1031819209456444 L 0.8422620296478271 5.725270748138428 C -0.5631139278411865 6.381229877471924 -0.09465529024600983 8.442564964294434 1.404470920562744 8.442564964294434 L 6.558101177215576 8.442564964294434 L 6.558101177215576 13.59619522094727 C 6.558101177215576 15.0953197479248 8.619436264038086 15.56407451629639 9.275395393371582 14.15840339660645 L 14.89748668670654 1.977308034896851 C 15.36594486236572 0.8525973558425903 14.14777755737305 -0.3655706346035004 13.02335929870605 0.1031809076666832 Z">
                                </path>
                            </svg>
                        </a>
                    </li>

                    <li>{{$setting['address']}}</li>
                </ul>
            </div><!-- col -->
            <div class="col-6 col-md-2 no-pad">
                <ul class="head_mail wow bounceInLeft"
                    style=" visibility: visible; animation-delay: 0.4s; animation-name: bounceInLeft;">
                    <li>
                        <a href="#"><svg class="Icon_ionic_ios_mail_open" viewBox="3.375 2.25 13.929 15">
                                <path fill="#0e334a" id="Icon_ionic_ios_mail_open"
                                      d="M 16.9520092010498 8.203125 C 16.81808090209961 8.069196701049805 11.65178680419922 2.799107074737549 11.65178680419922 2.799107074737549 C 11.3035717010498 2.444196462631226 10.83817005157471 2.25 10.3392858505249 2.25 C 9.840401649475098 2.25 9.375 2.444196462631226 9.026785850524902 2.802455425262451 C 9.026785850524902 2.802455425262451 3.883928298950195 8.042410850524902 3.7265625 8.206473350524902 C 3.572544574737549 8.3671875 3.375 8.702009201049805 3.375 9.080357551574707 C 3.375 9.358259201049805 3.375 16.1785717010498 3.375 16.1785717010498 C 3.375 16.76785659790039 3.857142925262451 17.25 4.446428775787354 17.25 L 16.23214340209961 17.25 C 16.8214282989502 17.25 17.3035717010498 16.76785659790039 17.3035717010498 16.1785717010498 C 17.3035717010498 16.1785717010498 17.3035717010498 9.28125 17.3035717010498 9.046875 C 17.3035717010498 8.655134201049805 17.08259010314941 8.340401649475098 16.9520092010498 8.203125 Z M 16.30245590209961 9.619420051574707 L 13.58705425262451 12.45870590209961 C 13.56026840209961 12.48549175262451 13.56026840209961 12.52567005157471 13.58705425262451 12.55245590209961 L 16.1082592010498 15.23772430419922 C 16.27901649475098 15.40848255157471 16.27901649475098 15.6830358505249 16.1082592010498 15.85379600524902 C 16.0245532989502 15.93750095367432 15.9107141494751 15.98102760314941 15.8002233505249 15.98102760314941 C 15.68973255157471 15.98102760314941 15.57589244842529 15.93750095367432 15.4921875 15.85379600524902 L 10.43638515472412 10.4564733505249 C 10.38281345367432 10.3995532989502 10.29241180419922 10.3995532989502 10.24218845367432 10.4564733505249 L 5.189732074737549 15.8504467010498 C 5.106026649475098 15.93415260314941 4.9921875 15.97767925262451 4.881696701049805 15.97767925262451 C 4.771205425262451 15.97767925262451 4.657366275787354 15.93415260314941 4.573660850524902 15.8504467010498 C 4.402901649475098 15.67968845367432 4.402901649475098 15.4051342010498 4.573660850524902 15.234375 L 7.094866275787354 12.54910755157471 C 7.118303775787354 12.5223217010498 7.118303775787354 12.48214244842529 7.094866275787354 12.45535755157471 L 4.369419574737549 9.616071701049805 C 4.044642925262451 9.284598350524902 4.2890625 8.417410850524902 4.908482074737549 8.417410850524902 C 5.527901649475098 8.417410850524902 15.2176342010498 8.417410850524902 15.77009010314941 8.417410850524902 C 16.32254409790039 8.4140625 16.62723159790039 9.291295051574707 16.30245590209961 9.619420051574707 Z">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li>{{$setting['email']}}</li>
                </ul>
            </div><!-- col -->
            <div class="col-12 col-md-8 no-pad media_respo">
                <div class="social_media wow bounceInRight"
                     style=" visibility: visible; animation-delay: 0.4s; animation-name: bounceInRight;">
                    
                        <ul>
                            <li class="icon_bg1"><a href="{{$setting['facebook']}}" rel="noopener"` target="_blank" accesskey="a"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="icon_bg2"><a href="{{$setting['twitter']}}" rel="noopener"` target="_blank" accesskey="b"><i class="fab fa-twitter"></i></a></li>
                            <li class="icon_bg1"><a href="{{$setting['instagram']}}" rel="noopener" target="_blank" accesskey="c"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li class="icon_bg2"><a href="{{$setting['youtube']}}" rel="noopener" target="_blank" accesskey="d"><i class="fab fa-youtube"></i></a> </li>
                            <li class="icon_bg1"><a href="{{$setting['website']}}" target="_blank" rel="noopener" ><i class="fab fa-google-plus-g" accesskey="f"></i></a></li>
                        </ul>
                </div><!-- social_media -->
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- header-top -->
*/ ?>


<section class="header_logo2"
         style=" visibility: visible; position:absolute;">
    <div class="container">
        <div class="row">
            <div class="col-md-2">

            </div><!-- col -->
            <div class="col-md-8 heading_main">
                <div class="navdown navdownIndex nav_search clearfix sticky stricky-fixed slideInDown animated stickyFirst" id="main_navigation" style="background-color: rgba(255, 255, 255, 0); margin-top:10px;">
                    <div class="main_nav" style="background-color: rgba(255, 255, 255, 0);">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light wow fadeInDown leftPadding"
                             style=" visibility: visible; animation-delay: 0.4s; animation-name: fadeInDown;" style="background-color: rgba(255, 255, 255, 0);">
                            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color: rgba(255, 255, 255, 0);">
                                <span class="navbar-toggler-icon" style="background-color: rgba(255, 255, 255, 0);"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav" style="background-color: rgba(255, 255, 255, 0);">
                                <ul class="navbar-nav" style="background-color: rgba(255, 255, 255, 0);">
                                    
                                    <li class="nav-item {{($menu == 'index') ? 'active' : '' }} marginFix" >
                                        <a class="nav-link" href="{{route('index')}}">Home <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item {{($menu == 'rooms') ? 'active' : '' }}">   
                                        <div class="dropdown show">
                                        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Rooms
                                        </a>
                                      
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            @foreach ($navmenurooms as $item)
                                                <a class="dropdown-item" style="color: black" href="{{route('room.details',$item->id)}}">{{$item->category}}</a>
                                            @endforeach
                                          
                                          {{-- <a class="dropdown-item" style="color: black" href="#">Suit Deluxe Room</a>
                                          <a class="dropdown-item" style="color: black" href="#">Double Deluxe Room</a>
                                          <a class="dropdown-item"  style="color: black" href="#">Triple Deluxe Room</a> --}}

                                        </div>
                                        </div>
                                    </li>
                                    <li class="nav-item {{($menu == 'banquet') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{route('banquet')}}">Banquet</a>
                                    </li> 
                                    <li style="width: 50px; display:none; margin-left:6% !important; margin-top: -0.3%;
                                    margin-bottom: -1%;" class = "temp">
                                    <div class="logNav">
                                        <a href="/"><img src="/images/mini-logo.jpeg" alt="#" style="width: 70px; display:none; border-radius:50%;" class="wow rubberBand"/></a>
                                    </div>
                                    </li>
                                    <li class="nav-item {{($menu == 'restaurant') ? 'active' : '' }}">
                                        <div class="dropdown show">
                                            <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Restaurant
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                              <a class="dropdown-item" href="uploads/sample.pdf" target = "_blank" style="color: black">Menu</a>
                                            </div>
                                          </div>
                                    </li> 
                                    <li class="nav-item {{($menu == 'gallery') ? 'active' : '' }}">
                                        <a class="nav-link " href="{{route('gallery.view')}}">Gallery</a>
                                    </li>
                                   
                                    <li class="nav-item {{($menu == 'contact') ? 'active' : '' }}">
                                        <a class="nav-link " href="{{route('contact')}}">Contact Us</a>
                                    </li>
                                    {{-- <li>
                                        <div class="tn-right">
                                            <a href="{{route('drishya.rooms')}}" class="bk-btn" style="display: none;">Book Now</a>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </nav>
                    </div><!-- main_nav -->
                    {{-- <div class="main_search">
                        <ul>
                            <li class="search_width">
                                <a href="#search">
                                    <i class="fa fa-search"></i>
                                </a>
                                <!-- Search Form -->
                            </li>
                        </ul>
                    </div><!-- main_search --> --}}
                </div>
            </div>

        </div><!-- row -->
    </div><!-- container -->
</section><!-- header_logo -->

