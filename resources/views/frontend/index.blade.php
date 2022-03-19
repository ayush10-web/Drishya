@extends('frontend.layouts.master')
@section('content')
@include('backend.layouts.alerts')
@if (count($sliders) > 0)

<section class="slider_main">
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
                            style=" visibility: visible; color: white;">
                            <h3 class="animated bounceInRight"
                            style=" visibility: visible;">{{$slides->slider_name}}</h3>
                            <span class="float-left animated bounceInRight"  style=" visibility: visible; animation-delay: 0.1s; animation-name: bounceInRight; color: white;">{{$slides->description}}</span>
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

</section><!-- slider_main -->

@endif
<br>
<section class="list_content">
        <h2 style = "text-align:center; font-size:1.75rem;"><u>Our Services</u></h2>
        <br>
    <div class="container">
        <div class="row wow slideInUp">

            <div class="col-md-8">
                <div class="row">                   
                    </a>
                    <div class="col-md-6">
                        <a href="{{route('banquet')}}">
                        <div class="card" style="width: 35rem;">
                            <img class="card-img-top" src="https://cdn.pixabay.com/photo/2017/08/08/00/17/events-2609526_960_720.jpg" alt="Card image cap">
                           
                            <h5 class="card-title text-center">Banquet</h5>
                          </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('restaurant')}}">
                        <div class="card" style="width: 35rem; margin-left: 250px;">
                            <img class="card-img-top" src="{{asset('images/restaurant.jpg')}}" alt="Card image cap">
                              <h5 class="card-title text-center">Restaurant</h5>
                          </div>
                        </a>
                    </div>
                </div>
                 
            </div>
           
        </div><!-- row -->
    </div><!-- container -->
</section>

            
            <h3 style = "text-align:center;"><u>Our Rooms</u></h3>

 
    
    <div class="product_carousel wow bounceInRight"
         style="visibility: visible;">


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
        <div class="col-md-12" style="padding-top: 0;">
            <div class="services_list" >
                <a href="{{route('drishya.rooms')}}" style="margin-top:-10px; margin-left: 550px;">View All Rooms</a>
            </div>
        </div>
    </div><!--  -->
@if(count($events)>0)
<section class="product_list">
    <div class="container">
        <div class="product_mark wow bounceInRight"
             style=" visibility: visible; margin-top: -20px;">
            <h1>Events <span>In Drishya</span></h1>
            <div class="arrow"></div><!-- arrow -->
        </div><!-- product_mark -->
    </div><!-- container -->
    
    <div class="product_carousel wow bounceInRight"
         style="visibility: visible;">
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
                    <p>Best Service <br><span>" Drishya service is one of the renowned as it have the best chef and staff to serve. "</span></p>
                </div><!-- choose_block_list -->
            </div><!-- col -->
            <div class="col-6 col-md-3">
                <div class="choose_block_list">
                    <i class="fas fa-chart-bar"></i>
                    <p>Home Like Experience<br><span>"Our hotel has the best room service which allows our guest to have home like atmosphere."</span>
                    </p>
                </div><!-- choose_block_list -->
            </div><!-- col --> 
            <div class="col-6 col-md-3">
                <div class="choose_block_list">
                    <i class="fas fa-trophy"></i>
                    <p>Super Quality<br><span>We Have the best rooms and restaurant quality.</span></p>
                </div><!-- choose_block_list -->
            </div><!-- col -->
            <div class="col-6 col-md-3">
                <div class="choose_block_list">
                    <i class="fas fa-dumbbell"></i>
                    <p>Quick Response<br><span> Our staff would be ready to support in any sort of inconvenience</span>
                    </p>
                </div><!-- choose_block_list -->
            </div><!-- col --> 
        </div><!-- row -->


    </div><!-- container -->
</section><!-- choose_blk -->

<section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.743903426665!2d85.28259231506178!3d27.694309082797293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19dffb5c3e1f%3A0xb1b59d70fb2b8c55!2sDrishya%20Hotel%20and%20Restaurant!5e0!3m2!1sen!2smy!4v1644655525665!5m2!1sen!2smy" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>
<br>
@endsection