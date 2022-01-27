<section class="header_top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 col-md-2 no-pad">
                <ul class="head_location wow bounceInLeft"
                    style=" visibility: visible; animation-delay: 0.4s; animation-name: bounceInLeft;">
                    <li><a href="#">
                            <svg class="Icon_awesome_location_arrow" viewBox="0 0 15 15">
                                <path fill="#a18257" id="Icon_awesome_location_arrow"
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
                                <path fill="#a18257" id="Icon_ionic_ios_mail_open"
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
<section class="header_logo  wow rubberBand"
         style=" visibility: visible; animation-delay: 0.9s; animation-name: rubberBand;">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="header_logo">
                    @if ($setting['logo'] != null)
                    <a href=""><img src="{{$setting['logo']->file_path}}" alt="#" /></a>
                    @endif
                    
                </div><!-- header_logo -->
            </div><!-- col -->
            <div class="col-6 col-md-2 border_right">
                <div class="header_opening_closing">
                    <i class="fas fa-phone-volume"></i>
                    <p>Phone Number <span> {{$setting['phoneNumber']}} | {{$setting['mobileNumber']}}</span></p>
                </div>
            </div><!-- col -->
            <div class="col-6 col-md-2 border_right">
                <div class="header_opening_closing">
                 <i class="far fa-clock"></i>
                    <p>Opening Time <span>mon - Fri : 9.00 - 6.00</span></p>
                </div><!-- header_closing -->
            </div><!-- col -->
            <div class="col-md-3">
                <div class="header_quote">
                    <a href="#quote" data-toggle="modal" data-target="#exampleModalCenter" >Inquiry</a>
                    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal_request_header" role="document">
    <div class="modal-content">
   <!--    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        
      </div> -->
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div class="col-md-12">
                <div class="form_border">
                    <div class="req_form_head">
                        <h2>Inquiry about our Hotel</h2>
                        Please feel free to inquiry about anything. <br>
                        We are always happy to answer all your quetions anytime without any hesitation.
                    </div><!-- req_form_head -->
                    <form action="{{route('contact.add')}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="col-md-6">
                            <div class="input_form">
                                <input type="text" name="name" placeholder="Your Name" required>
                                <input type="email" name="email" placeholder="Email" required>
                                <input type="text" name="contact_number" placeholder="Contact Number">
                            </div><!-- input_form -->
                        </div><!-- col -->
                        <div class="col-md-6">
                            <div class="input_form">
                                <textarea rows="3" name="message" cols="50" placeholder="Your Message..."></textarea>
{{--                                <button type="button" class="send_form" onclick="alert('Your message send successfully!')">Send--}}
{{--                                    Message</button>--}}
                                <button class="send_form">Send Inquiry</button>
                            </div><!-- input_form -->
                        </div><!-- col -->
                    </div><!-- row -->
                    </form>
                </div><!-- form_border -->
            </div>
      </div>
   <!--    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
                </div><!-- header_quote -->
            </div><!-- col -->

        </div><!-- row -->
    </div><!-- container -->
</section><!-- header_logo -->
<section id="main_navigation" class="top_nav">
    <div class="container">
        <div class="nav_search clearfix">
            <div class="main_nav">
                <nav class="navbar navbar-expand-lg navbar-light bg-light wow fadeInDown"
                     style=" visibility: visible; animation-delay: 0.4s; animation-name: fadeInDown;">
                    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                           
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('index')}}">Home <span
                                        class="sr-only">(current)</span></a>
                            </li>
                          
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbarDropdown">Services</a>
                                <div class="dropdown-menu mt-0" style="background:  rgb(64, 64, 128)" aria-labelledby="navbarDropdown">
                                @foreach($servicesnav as $service)
                                    <div class="row">
                                        <div class="col-md-9">
                                            <a class="dropdown-item"  href="" style="background:#a18257; margin-top : 15px; ">{{$service->service_name}}</a>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="">Rooms</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="{{('about')}}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                            </li>
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
        </div><!-- nav_search -->
    </div><!-- container -->
</section><!-- top_nav -->