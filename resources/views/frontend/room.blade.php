@extends('frontend.layouts.master')
@section('content')
<section style="margin: 20px">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="div" style="">
                <h1 style="color: #0e334a"><strong>R O O M S</strong></h1>
            </div>
            
            <p style="font-size:16px;">{{$setting['room']}}</p>
            {{-- <div class="time" style="margin-top: 35px;">
                <div class="row">
                    <div class="col-sm-2" >
                          <i class="far fa-clock fa-4x"></i>
                    </div>
                    <div class="col-sm-3" style="color: #0e334a; margin-right:-25px;">
                        <strong>CHECK IN <br> {{$setting['checkin']}}</strong>
                    </div>
                    <div class="col-sm-3" style=" border-left: 6px solid green; color: #0e334a" >
                        <strong>CHECK OUT <br> {{$setting['checkout']}}</strong>
                    </div>
                </div>
              
            </div> --}}
        </div>
        <div class="col-md-6">
            <div id="image" style="position: relative; top:55px; left:20px;">
                <img src="{{$roomimage->file_path}}" alt="" style="width: 100%; height:300px;" srcset="">
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="text-center"style="color: #0e334a; margin-top:50px;"><h1>AVAILABLE ROOMS</h1></div>
    <br>
        @foreach ($rooms as $room)
            <div class="row" style="margin-bottom: 35px">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('room.details',$room->id)}}"><strong><h4>{{$room->category}}</h4></strong></a>
                    </div>

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="row">

                            <div class="col-md-7">
                                <ol class="carousel-indicators">
                                    @foreach ($room->images as $key=>$image)
                                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" @if($key == 0) active @endif></li>
                                    @endforeach
                                </ol>
                                <div class="carousel-inner" style="height:400px; overflow:hidden">
                                        <div class="car-image">
                                            @foreach ($room->images as $key=>$image)
                                            <div class="carousel-item @if($key == 0) active @endif">
                                                <img class="d-block w-100" src="{{$room->images[0]->file_path}}" alt="First slide">
                                            </div>
                                            @endforeach
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-5" >
                                <h5 style="text-align: center; margin-top:15px;">Description</h5>
                                <p style="text-align: center; margin-top:15px;">{{$room->description}}</p> <br>
                                <h5 style="text-align: center; margin-top:15px;">Amenities</h5> <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <i class="fa fa-money-check " aria-hidden="true"></i> <span> Room's Price : </span>Rs.{{$room->room_price}}
                                    </div>
                                    <div class="col-md-6">
                                        <i class="fa fa-wifi " aria-hidden="true"></i> <span> Wifi Availability : </span> @if ($room->wifi == "1")
                                            <i class="fa fa-check" style="color: green" aria-hidden="true"></i>
                                        @else
                                            <i class="fa fa-times" style="color: red" aria-hidden="true"></i>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <i class="fa fa-bed " aria-hidden="true"></i> <span> Bed : </span>{{$room->bed}}
                                    </div>
                                    <div class="col-md-6">
                                        <i class="fa fa-tv " aria-hidden="true"></i> <span> Television : </span> 
                                    <i class="fa fa-check" style="color: green" aria-hidden="true"></i> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <i class="fa fa-wrench " aria-hidden="true"></i> <span> Room Service : </span> @if ($room->wifi == "1")
                                        <i class="fa fa-check" style="color: green" aria-hidden="true"></i>
                                        @else
                                            <i class="fa fa-times" style="color: red" aria-hidden="true"></i>
                                        @endif
                                        
                                    </div>
                                </div> 
                                <br> <br>
                                    <center> <a class="btn btn-success text-center" href="{{route('room.details',$room->id)}}">Book Room</a></center>
                            </div>
                        </div>
                    </div>

                        {{-- <div class="card-header">
                            {{$room->category}}
                        </div> --}}
                        
                            {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a> --}}
                </div>
                
            </div>
        @endforeach
    {{-- </div> --}}

</div>
</section>
<br>
<br>
@endsection
