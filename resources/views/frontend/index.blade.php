@extends('frontend.layouts.master')
@section('content')

<section class="slider_main">
    <div class="container container_custom">
        <div id="demo" class="carousel slide wow pulse"
             style=" visibility: visible; animation-delay: 0.5s; animation-name: pulse;" data-ride="carousel">
            <div class="carousel-inner">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-item active slider-descripton">
                    <img src="https://cdn.pixabay.com/photo/2015/06/07/19/42/animal-800760_960_720.jpg" alt="Grow your Business online">
                    <div class="carousel-caption">
                        <style>
                            .slider-descripton p{
                                color: white !important;
                            }
                        </style>
                        <p class="animated bounceInRight"
                            style=" visibility: visible; animation-delay: 0.4s; animation-name: bounceInRight; color: white;">
                            <h3 class="animated bounceInRight"
                            style=" visibility: visible; animation-delay: 0.4s; animation-name: bounceInRight;">Title</h3>
                            <span class="float-left animated bounceInRight"  style=" visibility: visible; animation-delay: 0.4s; animation-name: bounceInRight; color: white;">Description</span>
                        </p>
                        <div class="caption_a">
                            <a href="" class="caption_color1 animated bounceInLeft"
                               style=" visibility: visible; animation-delay: 0.8s; animation-name: bounceInLeft;">About
                                Us</a>
                            <a href="" class="caption_color2 animated bounceInRight"
                               style=" visibility: visible; animation-delay: 0.8s; animation-name: bounceInRight;">Contact
                                Us</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item slider-descripton">
                    <img src="https://media.istockphoto.com/photos/friends-red-cat-and-corgi-dog-walking-in-a-summer-meadow-under-the-picture-id1324218152?k=20&m=1324218152&s=612x612&w=0&h=6teWX6zTpBnTGLnJyGrZZTInlP3O6BP_-5cq9wCSAj8=" alt="One of Leading It company In Nepal">
                    <div class="carousel-caption">
                        <p class="animated bounceInRight"
                            style=" visibility: visible; animation-delay: 0.4s; animation-name: bounceInRight; color: white;">
                            <h3 class="animated bounceInRight"
                            style=" visibility: visible; animation-delay: 0.4s; animation-name: bounceInRight;">title</h3>
                            <span class="float-left animated bounceInRight"  style=" visibility: visible; animation-delay: 0.4s; animation-name: bounceInRight; color: white;">descriptio</span>
                        </p>
                        <div class="caption_a">
                            <a href="" class="caption_color1 animated bounceInLeft"
                               style=" visibility: visible; animation-delay: 0.8s; animation-name: bounceInLeft;">About
                                Us</a>
                            <a href="" class="caption_color2 animated bounceInRight"
                               style=" visibility: visible; animation-delay: 0.8s; animation-name: bounceInRight;">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

    </div><!-- container -->
</section><!-- slider_main -->

<section class="image_with_box">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="border_box wow bounceInLeft"
                     style="visibility: visible; animation-delay: 1s; animation-name: bounceInLeft;">
                    <img src="images/customer-service.png" alt="#">
                    <h1>24 × 7<span>Customer Support</span></h1>
                </div><!-- border_box -->
            </div><!-- col -->
            <div class="col-md-4">
                <div class="border_box wow bounceInDown"
                     style="visibility: visible; animation-delay: 1s; animation-name: bounceInDown;">
                    <img src="images/customer_review.png" alt="24*7 support">
                    <h1>1st<span>priority customer</span></h1>
                </div><!-- border_box -->
            </div><!-- col -->
            <div class="col-md-4">
                <div class="border_box wow bounceInRight"
                     style="visibility: visible; animation-delay: 1s; animation-name: bounceInRight;">
                    <img src="images/portfolio.png" alt="customer first piority">
                    <h1>100%<span>Work Dedication</span></h1>
                </div><!-- border_box -->
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- conntainer -->
</section>
<section class="list_content">
    <div class="container">
        <div class="row wow slideInUp">
            <div class="col-md-3" style="padding-top: 15px;">
                <div class="services_list">
                    <h2>Our Line Of<span>SERVICES</span></h2>
                    <p>SOFTECHPARK PVT LTD IS REPUTED ON GIVING ONE OF THE BEST AND PROFFESSIONAL SERVICE</p>
                    <a href="https://softechpark.com/services">View All Services</a>

                </div><!-- services_list -->
            </div><!-- col -->
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4" style="padding-top: 15px;">
                        <div class="services_block_all">
                            <div class="services_block">
        
                                <img src="images/mobile_development.png" alt="#"/>
                                <a href="">
                                    <h2>title</h2>
                                </a>
                            </div><!-- services_block -->
                            <div class="services_block_lead">
                                Description DescriptionDescriptionDescriptionDescription <br>DescriptionDescriptionDescriptionbr
                                <br>DescriptionDescriptionDescription
                            </div><!-- services_block_lead -->
                            <!-- <div class="overlay">
                            <button type="button" class="btn btn-default appartments-btn">GET IN TOUCH</button>
                        </div> -->
                        </div><!-- services_block_all -->
                    </div><!-- col -->

                    <div class="col-md-4" style="padding-top: 15px;">
                        <div class="services_block_all">
                            <div class="services_block">
        
                                <img src="images/mobile_development.png" alt="#"/>
                                <a href="">
                                    <h2>title</h2>
                                </a>
                            </div><!-- services_block -->
                            <div class="services_block_lead">
                                Description DescriptionDescriptionDescriptionDescription <br>DescriptionDescriptionDescriptionbr
                                <br>DescriptionDescriptionDescription
                            </div><!-- services_block_lead -->
                            <!-- <div class="overlay">
                            <button type="button" class="btn btn-default appartments-btn">GET IN TOUCH</button>
                        </div> -->
                        </div><!-- services_block_all -->
                    </div><!-- col -->

                    <div class="col-md-4" style="padding-top: 15px;">
                        <div class="services_block_all">
                            <div class="services_block">
        
                                <img src="images/mobile_development.png" alt="#"/>
                                <a href="">
                                    <h2>title</h2>
                                </a>
                            </div><!-- services_block -->
                            <div class="services_block_lead">
                                Description DescriptionDescriptionDescriptionDescription <br>DescriptionDescriptionDescriptionbr
                                <br>DescriptionDescriptionDescription
                            </div><!-- services_block_lead -->
                            <!-- <div class="overlay">
                            <button type="button" class="btn btn-default appartments-btn">GET IN TOUCH</button>
                        </div> -->
                        </div><!-- services_block_all -->
                    </div><!-- col -->
                </div>
                 
            </div>
           
        </div><!-- row -->
    </div><!-- container -->
</section>
<section class="product_list">
    <div class="container">
        <div class="product_mark wow bounceInRight"
             style=" visibility: visible; animation-delay: 0.1s; animation-name: bounceInRight;">
            <h1>Our <span>Products</span></h1>
            <div class="arrow"></div><!-- arrow -->
        </div><!-- product_mark -->
    </div><!-- container -->
    <div class="product_carousel wow bounceInRight"
         style="visibility: visible; animation-delay: 1s; animation-name: bounceInRight;">
        <div class="container">
            <section class="center slider">
               
                <div class="carousel_margin">
                    <a href="https://media.istockphoto.com/photos/friends-red-cat-and-corgi-dog-walking-in-a-summer-meadow-under-the-picture-id1324218152?k=20&m=1324218152&s=612x612&w=0&h=6teWX6zTpBnTGLnJyGrZZTInlP3O6BP_-5cq9wCSAj8=">
                        <img src="" alt="#">
                        <span>title</span>
                    </a>
                </div>
                <div class="carousel_margin">
                    <a href="https://media.istockphoto.com/photos/friends-red-cat-and-corgi-dog-walking-in-a-summer-meadow-under-the-picture-id1324218152?k=20&m=1324218152&s=612x612&w=0&h=6teWX6zTpBnTGLnJyGrZZTInlP3O6BP_-5cq9wCSAj8=">
                        <img src="" alt="#">
                        <span>title</span>
                    </a>
                </div>
                <div class="carousel_margin">
                    <a href="https://media.istockphoto.com/photos/friends-red-cat-and-corgi-dog-walking-in-a-summer-meadow-under-the-picture-id1324218152?k=20&m=1324218152&s=612x612&w=0&h=6teWX6zTpBnTGLnJyGrZZTInlP3O6BP_-5cq9wCSAj8=">
                        <img src="" alt="#">
                        <span>title</span>
                    </a>
                </div>
                <div class="carousel_margin">
                    <a href="https://media.istockphoto.com/photos/friends-red-cat-and-corgi-dog-walking-in-a-summer-meadow-under-the-picture-id1324218152?k=20&m=1324218152&s=612x612&w=0&h=6teWX6zTpBnTGLnJyGrZZTInlP3O6BP_-5cq9wCSAj8=">
                        <img src="" alt="#">
                        <span>title</span>
                    </a>
                </div>
            </section>
        </div><!-- container -->
    </div><!--  -->

    <div class="mobile_product_list">
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-6">
                                <a href="products_mart.html">
                                    <img src="images/martbanner.png" alt="#">
                                    <span>Mart Management System</span>
                                </a>
                            </div><!-- col -->
                            <div class="col-6">
                                <a href="products_school.html">
                                    <img src="images/schoolbanner.png" alt="#">
                                    <span>School Management System</span>
                                </a>
                            </div><!-- col -->
                        </div><!-- row -->

                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-6">
                                <a href="products_resturant.html">
                                    <img src="images/Group 317.png" alt="#">
                                    <span>Resturant Management System</span>
                                </a>
                            </div><!-- col -->
                            <div class="col-6">
                                <a href="products_domain.html">
                                    <img src="images/Group 316.png" alt="#">
                                    <span>Domain And Hosting</span>
                                </a>
                            </div><!-- col -->
                        </div><!-- row -->
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-6">
                                <a href="#">
                                    <img src="images/khatabanner.png" alt="#">
                                </a>
                            </div><!-- col -->
                            <div class="col-6"></div><!-- col -->
                        </div><!-- row -->
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div><!-- container -->
    </div><!-- mobile_product_list -->
</section><!-- product_list -->



<section class="portfolio-section">
    <div class="container">
        <div class="hr_head wow fadeInRight portfolio-heading">    
            <h4 align="center">OUR PORTFOLIO</h4>
        </div>
            <div id="portfolio-items">
               
                <div class="slide">
                        <img src="https://cdn.pixabay.com/photo/2022/01/16/13/25/cityscape-6942013_960_720.jpg" alt="#" class="img-responsive" style="height: 140px;" width="400%" >
                </div>
                <div class="slide">
                    <img src="https://cdn.pixabay.com/photo/2022/01/16/13/25/cityscape-6942013_960_720.jpg" alt="#" class="img-responsive" style="height: 140px;" width="400%" >
            </div>
            <div class="slide">
                <img src="https://cdn.pixabay.com/photo/2022/01/16/13/25/cityscape-6942013_960_720.jpg" alt="#" class="img-responsive" style="height: 140px;" width="400%" >
        </div>
            </div>
    </div>
</section>
<section class="choose_blk">
    <div class="container">
        <div class="choose_head wow fadeInDown">
            <h1>Why choose us ?</h1>
            <p>Our projects are always successful and we always have focused on delivering products on time.<br>We
                are one of the most favored software company in the market.</p>
        </div><!-- choose_head -->
        <div class="row wow flipInX">
            
                <div class="col-md-3">
                    <div class="choose_block_list" style="height: 250px;">
                        <i class="fa fa-add"></i>
                        <p>title<br>
                        <span>desc</span></p>
                    </div>
                </div>
            
            <div class="col-6 col-md-3">
                <div class="choose_block_list">
                    <i class="far fa-gem"></i>
                    <p>High quality Deliverables <br><span>We go beyond just<br> delivering research results in your projects</span></p>
                </div><!-- choose_block_list -->
            </div><!-- col -->
            <div class="col-6 col-md-3">
                <div class="choose_block_list">
                    <i class="fas fa-chart-bar"></i>
                    <p>Experienced Team<br><span>We take great pride<br> in our work and <br>strive for <br>consistent excellence.</span>
                    </p>
                </div><!-- choose_block_list -->
            </div><!-- col --> =
            <div class="col-6 col-md-3">
                <div class="choose_block_list">
                    <i class="fas fa-trophy"></i>
                    <p>Super Quality<br><span>We don't want to push our ideas<br> on to customers we simply<br> want to make
                        what <br>they want.</span></p>
                </div><!-- choose_block_list -->
            </div><!-- col -->
            <div class="col-6 col-md-3">
                <div class="choose_block_list">
                    <i class="fas fa-dumbbell"></i>
                    <p>Quick Response<br><span>Softechpark has always striven to <br>deliver timely technical support, a goal that most of our customers<br> agree we deliver on.</span>
                    </p>
                </div><!-- choose_block_list -->
            </div><!-- col --> 
        </div><!-- row -->


    </div><!-- container -->
</section><!-- choose_blk -->

<section class="accordin_form wow fadeInDown" id="quote">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="accordin_head">
                    <h2>Who is behind the best Software company in town & FAQ </h2>
                    <p>Softechpark is Nepal's one of the finest information technology company or inother words
                        software company. It was established in 2019 and is almost and year old. This company have
                        already completed more than 30 projects for the clients andhave got running in house billing
                        and school related projects.</p>
                </div><!-- accordin_head -->
                <div class="bs-example">
                    <div class="accordion" id="accordionExample">
                       
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link" data-toggle="collapse"
                                            data-target="#collapseOne"><i class="fa fa-plus"></i>dfescthij
                                        </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Lorem IpsmLorem Ipsm Lorem Ipsm Lorem IpsmLorem Ipsm</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div><!-- col -->
            <div class="col-md-6">
                <div class="form_border">
                    <div class="req_form_head">
                        <h2>Request A Quick Quote</h2>
                        Please tell us about your requirement. <br>
                        A Softechpark representative will walk you through our service options.
                    </div><!-- req_form_head -->
                    <form action="" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="col-md-6">
                            <div class="input_form">
                                <input type="text" name="name" placeholder="First Name" required>
                                <input type="text" name="email" placeholder="Email" required>
                                <input type="text" name="contact" placeholder="Contact Number">
                                <select name="purpose" id="purpose">
                                    <option value="" disabled>Select Purpose</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="App Development">App Development</option>
                                    <option value="Graphic Designing">Graphic Designing</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="SEO Optimization">SEO Optimization</option>
                                    <option value="Content Writing">Content Writing</option>
                                    <option value="E-billing Management System">E-billing Management System</option>
                                    <option value="Mart Management System">Mart Management System</option>
                                    <option value="Restaurant Management System">Restaurant Management System</option>
                                    <option value="School Management System">School Management System</option>
                                </select>
                            </div><!-- input_form -->
                        </div><!-- col -->
                        <div class="col-md-6">
                            <div class="input_form">
                                <input type="text" name="subject" placeholder="Subject">
                                <textarea rows="3" name="message" cols="50" placeholder="Describe yourself here..."></textarea>
{{--                                <button type="button" class="send_form" onclick="alert('Your message send successfully!')">Send--}}
{{--                                    Message</button>--}}
                                <button class="send_form">Send Message</button>
                            </div><!-- input_form -->
                        </div><!-- col -->
                    </div><!-- row -->
                    </form>
                </div><!-- form_border -->
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section>
<section class="testimonials">
    <div class="container">
        <div class="test_head">
            <h1>TESTIMONIALS</h1>
        </div><!-- test_head -->
        <div class="card col-md-12 mt-2">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="w-100 carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="carousel-caption">
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-center" >
                                        <img src="https://cdn.pixabay.com/photo/2021/01/27/15/16/girl-5955207_960_720.jpg" alt="#" style="height: 80px; width:80px; border-radius: 50%">
                                    </div>
                                </div>
                                <div class="col-md-12 d-flex justify-content-center">
                                    <h5>dumbass</h5>
                                </div>
                                <div class="col-md-12 d-flex justify-content-center " >
                                    dumb
                                </div>
                                <div class="col-md-12 d-flex justify-content-center">
                                    <small class="description-testi">dumb</small>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-caption">
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-center" >
                                        <img src="https://cdn.pixabay.com/photo/2021/01/27/15/16/girl-5955207_960_720.jpg" alt="#" style="height: 80px; width:80px; border-radius: 50%">
                                    </div>
                                </div>
                                <div class="col-md-12 d-flex justify-content-center">
                                    <h5>dsgxtgykuijo</h5>
                                </div>
                                <div class="col-md-12 d-flex justify-content-center " >
                                    erstg]ijo
                                </div>
                                <div class="col-md-12 d-flex justify-content-center">
                                    <small class="description-testi">earstgy7ui</small>
                                </div>
                            
                            </div>
                        </div>
            </div>
        </div>
    </div><!-- container -->
</section>
<section class="mobile_testimonials">
    <div class="card col-md-6 mt-2">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
            <div class="w-100 carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="bg"></div>
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="https://cdn.pixabay.com/photo/2021/01/27/15/16/girl-5955207_960_720.jpg" alt="#">
                            </div>
                            <div class="col-sm-9">
                                <h3>qersdtu</h3>
                                <small>rsedtgy7i</small>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="bg"></div>
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="https://cdn.pixabay.com/photo/2021/01/27/15/16/girl-5955207_960_720.jpg" alt="#">
                            </div>
                            <div class="col-sm-9">
                                <h3>qertyui</h3>
                                <small>qeartg]8h</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                   <div class="bg"></div>
                   <div class="carousel-caption">
                     <div class="row">
                       <div class="col-sm-3">
                         <img src="https://gravatar.com/avatar/b35505a8799ee6ec3cba72ac4c5185be?s=80&d=https://codepen.io/assets/avatars/user-avatar-80x80-bdcd44a3bfb9a5fd01eb8b86f9e033fa1a9897c3a15b33adfc2649a002dab1b6.png" alt="" class="rounded-circle">
                       </div>
                       <div class="col-sm-9">
                         <h3>Bhagwan Das Agrahari</h3>
                         <small>Just as describe, different weights gives you several ways to exercise. I especially like the velvet pouch so I can place in my drawer.</small>
                         <small class="smallest mute">- Amazon Customer</small>
                       </div>
                     </div>
                   </div>
                 </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section><!-- mobile_testimonials -->
<section class="jssor_carousel">
    <div id="carousel_contionus">
        <div class="container">
            <div class="hr_head wow fadeInRight">
                <h4>OUR HAPPY CLIENTS</h4>
            </div>
            <!-- #region Jssor Slider Begin -->
            <!-- Generator: Jssor Slider Composer -->
            <!-- Source: https://www.jssor.com/demos/scrolling-logo-thumbnail-slider.slider/=edit -->
            <script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
            <script type="text/javascript">
                window.jssor_1_slider_init = function () {
                    var jssor_1_options = {
                        $AutoPlay: 1,
                        $Idle: 0,
                        $SlideDuration: 5000,
                        $SlideEasing: $Jease$.$Linear,
                        $PauseOnHover: 4,
                        $SlideWidth: 200 ,
                        $Align: 0
                    };
                    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
                    /*#region responsive code begin*/
                    var MAX_WIDTH = 1080;

                    function ScaleSlider() {
                        var containerElement = jssor_1_slider.$Elmt.parentNode;
                        var containerWidth = containerElement.clientWidth;

                        if (containerWidth) {

                            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                            jssor_1_slider.$ScaleWidth(expectedWidth);
                        } else {
                            window.setTimeout(ScaleSlider, 30);
                        }
                    }
                    ScaleSlider();
                    $Jssor$.$AddEvent(window, "load", ScaleSlider);
                    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                    /*#endregion responsive code end*/
                };
            </script>
            <style>
                /*jssor slider loading skin spin css*/
                /*       .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-009-spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
        }*/
            </style>

            <div id="jssor_1"
                 style="position:relative;margin:0 auto;top:0px;left:0px;overflow:hidden;visibility:hidden;">
                <!-- Loading Screen -->
                <hr>
                <div data-u="loading" class="jssorl-009-spin"
                     style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:200px; margin-left: 200px;"
                         src="imags/spin.svg" />
                </div>

                <div data-u="slides" class=" u_slide "
                     style="cursor:default;position:relative;top:0px;left:0px;width:980px;/*height:100px;*/overflow:hidden;">
                  
                   
                   <div class="jssor_wdth">
                       <img data-u="image" src="images/002.png" />
                   </div>
                   <div class="jssor_wdth">
                       <img data-u="image" src="images/003.png" />
                   </div>
                   <div class="jssor_wdth">
                       <img data-u="image" src="images/004.png" />
                   </div>
                   <div class="jssor_wdth">
                       <img data-u="image" src="images/005.png" />
                   </div>
                   <div class="jssor_wdth">
                       <img data-u="image" src="images/006.png" />
                   </div>
                   <div class="jssor_wdth">
                       <img data-u="image" src="images/007.png" />
                   </div>
                   <div class="jssor_wdth">
                       <img data-u="image" src="images/008.png" />
                   </div>
                </div>
            </div>
            <script type="text/javascript">
                jssor_1_slider_init();
            </script>
            <!-- #endregion Jssor Slider End -->
            <script type="text/javascript">
                jssor_1_slider_init();
            </script>
        </div>
    </div>
</section>
@endsection