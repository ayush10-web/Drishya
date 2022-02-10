@extends('frontend.layouts.master')
@section('content')
@include('backend.layouts.alerts')
@if (count($sliders) > 0)

<section class="slider_main">
    <div class="container container_custom">
        <div id="demo" class="carousel slide wow pulse"
             style=" visibility: visible; animation-delay: 0.5s; animation-name: pulse;" data-ride="carousel">
            <div class="carousel-inner">
                <ul class="carousel-indicators">
                    @foreach($sliders as $key => $slides)
                    <li data-target="#demo" data-slide-to="{{$key}}" class=" @if($key == 0) active @endif"></li>
                    @endforeach
                </ul>
                @foreach($sliders as $key => $slides)
                <div class="carousel-item @if($key == 0) active @endif slider-descripton">
                    <img src="{{$slides->images[0]->file_path}}" alt="Grow your Business online" height='500px'>
                    <div class="carousel-caption">
                        <p class="animated bounceInRight"
                            style=" visibility: visible; animation-delay: 0.4s; animation-name: bounceInRight; color: white;">
                            <h3 class="animated bounceInRight"
                            style=" visibility: visible; animation-delay: 0.4s; animation-name: bounceInRight;">Title</h3>
                            <span class="float-left animated bounceInRight"  style=" visibility: visible; animation-delay: 0.4s; animation-name: bounceInRight; color: white;">{{$slides->description}}</span>
                        </p>
                    </div>
                </div>
                @endforeach
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

@endif
<section class="image_with_box">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="border_box wow bounceInLeft"
                     style="visibility: visible; animation-delay: 1s; animation-name: bounceInLeft;">
                    <img src="images/customer-service.png" alt="#">
                    <h1>Feel<span>feel like home</span></h1>
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
                    <h1>Best<span>Hospitality Services</span></h1>
                </div><!-- border_box -->
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- conntainer -->
</section>
<section class="list_content">
    <div class="container">
        <div class="row wow slideInUp">
            <div class="col-md-4" style="padding-top: 15px;">
                <div class="services_list">
                    <h2>Our Line Of<span>SERVICES</span></h2>
                    <p>DRISHYA IS ONE OF THE REPUTATED HOTEL AND IS RENOWNED FOR OUR HOSPITALITY AND SERVICES</p>
                </div><!-- services_list -->
            </div><!-- col -->
            <div class="col-md-8">
                <div class="row">
                    {{-- @foreach($services as $service)
                    <div class="col-md-4">
                        <div class="services_block_all">
                            <div class="services_block">
                                <img src="{{$service->image->file_path}}" alt="#"/>
                                <a href="">
                                    <h2>{{$service->service_name}}</h2>
                                </a>
                            </div>
                            <div class="services_block_lead">
                                {{$service->description}}
                            </div>
                        </div>
                    </div>
                    @endforeach --}}
                   
                    </a>
                    <div class="col-md-6">
                        <a href="{{route('banquet')}}">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://cdn.pixabay.com/photo/2017/08/08/00/17/events-2609526_960_720.jpg" alt="Card image cap">
                           
                            <h5 class="card-title text-center">Banquet</h5>
                          </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('restaurant')}}">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://cdn.pixabay.com/photo/2017/08/08/00/17/events-2609526_960_720.jpg" alt="Card image cap">
                              <h5 class="card-title text-center">Restaurant</h5>
                          </div>
                        </a>
                    </div>
                </div>
                 
            </div>
           
        </div><!-- row -->
    </div><!-- container -->
</section>
<section class="product_list">
    <div class="container">
        <div class="product_mark wow bounceInRight"
             style=" visibility: visible; animation-delay: 0.1s; animation-name: bounceInRight;">
            <h1>Book <span>Rooms</span></h1>
            <div class="arrow"></div><!-- arrow -->
        </div><!-- product_mark -->
    </div><!-- container -->
    
    <div class="product_carousel wow bounceInRight"
         style="visibility: visible; animation-delay: 1s; animation-name: bounceInRight;">

         <div class="col-md-3" style="padding-top: 0;">
            <div class="services_list" >
                <a href="{{route('drishya.rooms')}}" style="margin-top:-10px; margin-left: 80px;">View All Rooms</a>
            </div>
        </div>
        <div class="container">
            <section class="center slider">
                @if (count($rooms) > 0)
                @foreach ($rooms as $room)
                <div class="carousel_margin">
                    <a href="{{route('room.details',$room->id)}}">
                        <img src="{{$room->images[0]->file_path}}" alt="#">
                        <span>Capacity:{{$room->capacity}} | Price: {{$room->room_price}}</span>
                    </a>
                </div>
                @endforeach
                @endif
                
            </section>
        </div><!-- container -->
    </div><!--  -->
</section><!-- product_list -->
@if(count($events)>0)
<section class="product_list">
    <div class="container">
        <div class="product_mark wow bounceInRight"
             style=" visibility: visible; animation-delay: 0.1s; animation-name: bounceInRight; margin-top: -20px;">
            <h1>Events <span>In Drishya</span></h1>
            <div class="arrow"></div><!-- arrow -->
        </div><!-- product_mark -->
    </div><!-- container -->
    
    <div class="product_carousel wow bounceInRight"
         style="visibility: visible; animation-delay: 1s; animation-name: bounceInRight;">
        <div class="container">
            <section class="slider_main">
                <div class="container container_custom">
                    <div id="eventSlide" class="carousel slide wow pulse"
                         style=" visibility: visible; animation-delay: 0.5s; animation-name: pulse;" data-ride="carousel">
                        <div class="carousel-inner">
                            <ul class="carousel-indicators">
                                @foreach($events as $key => $event)
                                <li data-target="#eventSlide" data-slide-to="{{$key}}" class=" @if($key == 0) active @endif"></li>
                                @endforeach
                            </ul>
                            @foreach($events as $key => $event)
                            <div class="carousel-item @if($key == 0) active @endif slider-descripton">
                                <img src="{{$event->images[0]->file_path}}" alt="Grow your Business online" height='500px'>
                                <div class="carousel-caption">
                                    <p class="animated bounceInRight"
                                        style=" visibility: visible; animation-delay: 0.4s; animation-name: bounceInRight; color: white;">
                                        <h3 class="animated bounceInRight"
                                        style=" visibility: visible; animation-delay: 0.4s; animation-name: bounceInRight;">{{$event->event_name}}</h3>
                                        <span class="float-left animated bounceInRight"  style=" visibility: visible; animation-delay: 0.4s; animation-name: bounceInRight; color: white;">Start Date: {{$event->start_date}} | End Date: {{$event->end_date}}</span><br>
                                        <span class="float-left animated bounceInRight"  style=" visibility: visible; animation-delay: 0.4s; animation-name: bounceInRight; color: white;">{{$event->description}}</span>
                                        <div class="services_list" style="background-color: rgba(255, 100, 100, 0);">
                                            <a href="{{route('event.details',$event->id)}}" style="margin-top:40px;">View Event Details</a>
                                        </div>
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#eventSlide" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#eventSlide" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
            
                </div><!-- container -->
            </section>
        </div><!-- container -->
    </div><!--  -->
</section>
@endif
<section class="choose_blk">
    <div class="container">
        <div class="choose_head wow fadeInDown">
            <h1>Why choose us ?</h1>
            <p>We Are Very The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.</p>
        </div><!-- choose_head -->
        <div class="row wow flipInX">
            
            <div class="col-6 col-md-3">
                <div class="choose_block_list">
                    <i class="fas fa-award"></i>
                    <p>Best Service <br>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "</p>
                </div><!-- choose_block_list -->
            </div><!-- col -->
            
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
                    <p>Quick Response<br><span> <br>deliver timely technical support, a goal that most of our customers<br> agree we deliver on.</span>
                    </p>
                </div><!-- choose_block_list -->
            </div><!-- col --> 
        </div><!-- row -->


    </div><!-- container -->
</section><!-- choose_blk -->

<br>

@endsection