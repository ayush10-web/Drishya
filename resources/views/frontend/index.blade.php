@extends('frontend.layouts.master')
@section('content')
@include('backend.layouts.alerts')
@if (count($sliders) > 0)

<section class="slider_main">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($sliders as $key => $slides)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class=" @if($key == 0) active @endif"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">

                @foreach($sliders as $key => $slides)
                <div class="carousel-item @if($key == 0) active @endif slider-descripton">
                    <img class="d-block w-100" src="{{$slides->images[0]->file_path}}" alt="Grow your Business online" height='500px'>
                    <div class="carousel-caption">
                        {{-- <p class="animated bounceInRight"
                            style=" visibility: visible; color: white;">
                            <h3 class="animated bounceInRight"
                            style=" visibility: visible;">{{$slides->slider_name}}</h3>
                            <span class="float-left animated bounceInRight"  style=" visibility: visible; animation-delay: 0.1s; animation-name: bounceInRight; color: white;">{{$slides->description}}</span>
                        </p> --}}
                    </div>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" style="color: black" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

</section><!-- slider_main -->

@endif
<br>
<section class="list_content">
        <h2 style = "text-align:center; font-size:1.75rem;"><u>Our Services</u></h2>
        <br>
    <div class="container">
        <div class="row">                   
            <div class="col-md-6">
                <a href="{{route('banquet')}}">
                    <div class="card service-card-1">
                        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2017/08/08/00/17/events-2609526_960_720.jpg" style="height: 350px;" alt="Card image cap">
                        <h5 class="card-title text-center">Banquet</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="{{route('restaurant')}}">
                    <div class="card service-card-1">
                        <img class="card-img-top" style="height: 350px;" src="{{asset('images/restaurant.jpg')}}" alt="Card image cap">
                            <h5 class="card-title text-center">Restaurant</h5>
                    </div>
                </a>
            </div>
                 
        </div>
    </div><!-- container -->
</section>
<br>
        <div class="container">
            <center>
                <h3 style = "text-align:center;"><u>OUR ROOMS</u></h3>
            <i>Pick a room that best suits your choice and budget</i>
            </center>
            <br>
            <div class="row">
                @foreach ($rooms as $room)
                    <div class="col-md-3 " >
                        <div class="card room-image-block">
                            <a href="{{route('room.details',$room->id)}}">
                                <img src="{{$room->images[0]->file_path}}" alt="#" style="height:300px;">
                                <div class="room-details-category">
                                    <center><h5> <i>{{$room->category}} </i> </h5></center>
                                </div>
                                <div class="room-image-overlay">
                                    <h5> <i> <u> View Details </u></i> </h5>
                                </div>
                                {{-- <span>Capacity:{{$room->capacity}} | Price: {{$room->room_price}}</span> --}}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <br>
              <center><a class="btn btn-success" href="{{route('drishya.rooms')}}">View All Rooms</a></center>  
              <br>
        </div>
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