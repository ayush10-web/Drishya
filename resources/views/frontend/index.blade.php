@extends('frontend.layouts.masterIndex')
@section('content')
@include('backend.layouts.alerts')
@if (count($sliders) > 0)

<section class="slider_main">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="border:0;">
            <ol class="carousel-indicators">
                @foreach($sliders as $key => $slides)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class=" @if($key == 0) active @endif"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">

                @foreach($sliders as $key => $slides)
                <div class="carousel-item @if($key == 0) active @endif slider-descripton" style="height: 100vh;">
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
<section class="list_content" style = "margin-top:-30px;">
    <h2 style = "text-align:center; font-size:1.75rem;">About Us</h2>
    <br>
    <div class="container">
        <p>
            Drishya is a sight of complete parcel of Hospitality, which welcomes everyone with  all of our exceptional services and quality that promises to make your time more delightful. 
This whole Hotel has sparkle of classical and elegant designing which binds us away in its beauty and soothes you even more with it’s multi-cuisine restaurant and significant banquet halls.

Drishya Hotel and Restaurant is located in south-west prosperous part in Capital of Nepal, Near to Kalanki chowk. 
You can get more easy access to it with early bookings and reservations.
        </p>
    </div>
</section>
<section class="list_content" style = "margin-top:-30px;">
        <h2 style = "text-align:center; font-size:1.75rem;">Our Services</h2>
        <br>
    <div class="container">
        <div class="row">                   
            <div class="col-md-6">
                <a href="{{route('banquet')}}">
                    <div class="card service-card-1">
                        <img class="card-img-top" src="{{asset('images/banquet.jpg')}}" style="height: 350px;" alt="Card image cap">
                        <h5 class="card-title text-center">Banquet</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="uploads/sample.pdf" target = "_blank">
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
                <h3 style = "text-align:center;">OUR ROOMS</h3>
            Pick a room that best suits your choice and budget
            </center>
            <br>
            <div class="row">
                @foreach ($rooms as $room)
                    <div class="col-md-3 marginFix" >
                        <div class="card room-image-block" style="overflow: hidden;">
                            <a href="{{route('room.details',$room->id)}}">
                                <img src="{{$room->images[0]->file_path}}" alt="#" style="height:300px;transform: translateX(-22%); width:auto !important">
                                <div class="room-details-category">
                                    <center><h5> {{$room->category}} </h5></center>
                                </div>
                                <div class="room-image-overlay">
                                    <h5>  <u> View Details </u></h5>
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
<section class="choose_blk" style = "border-bottom:0px;">
    <div class="container">
        <div class="choose_head wow fadeInDown">
            <h1>Amenities</h1>
        </div><!-- choose_head -->
        <div class="row wow flipInX">
            
            <div class="col-6 col-md-3">
                <div class="choose_block_list">
                    <i class="fas fa-coffee"></i>
                    <p>Restaurant<br><span>" Drishya service is one of the renowned as it have the best chef and staff to serve. "</span></p>
                </div><!-- choose_block_list -->
            </div><!-- col -->
            <div class="col-6 col-md-3">
                <div class="choose_block_list">
                    <i class="fas fa-wifi"></i>
                    <p>Free Wifi<br><span>"Our hotel has the free, high speed wifi to keep you connected."</span>
                    </p>
                </div><!-- choose_block_list -->
            </div><!-- col --> 
            <div class="col-6 col-md-3">
                <div class="choose_block_list">
                    <i class="fas fa-cocktail"></i>
                    <p>Bar<br><span>We have the best bar where you can enjoy taste of your cocktail.</span></p>
                </div><!-- choose_block_list -->
            </div><!-- col -->
            <div class="col-6 col-md-3">
                <div class="choose_block_list">
                    <i class="fas fa-bed"></i>
                    <p>Hotel Rooms<br><span> Drishya offers you rooms that are very spacious with perfect view.</span>
                    </p>
                </div><!-- choose_block_list -->
            </div><!-- col --> 
        </div><!-- row -->


    </div><!-- container -->
</section><!-- choose_blk -->



{{-- <section>
<a href="https://www.google.com/"><img src="uploads/tripadvisor/tripadvisor.png" 
    style="width:100px;height:100px; margin-left:500px; padding-button:10px;"></a>
</section>     --}}

<br>
@endsection