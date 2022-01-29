@extends('frontend.layouts.master')
@section('content')
<section style="margin: 20px">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="div" style="">
                <h1 style="color: #cb9f72"><strong>R O O M S</strong></h1>
            </div>
            
            <p>{{$setting['room']}}</p>
            <div class="time" style="margin-top: 35px;">
                <div class="row">
                    <div class="col-sm-2" >
                          <i class="far fa-clock fa-4x"></i>
                    </div>
                    <div class="col-sm-3" style="color: #cb9f72; margin-right:-25px;">
                        <strong>CHECK IN <br> {{$setting['checkin']}}</strong>
                    </div>
                    <div class="col-sm-3" style=" border-left: 6px solid green; color: #cb9f72" >
                        <strong>CHECK OUT <br> {{$setting['checkout']}}</strong>
                    </div>
                </div>
              
            </div>
        </div>
        <div class="col-md-6">
            <div id="image" style="position: relative; top:55px; left:20px;">
                <img src="{{$roomimage->file_path}}" alt="" style="width: 100%; height:300px;" srcset="">
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="text-center"style="color: #cb9f72"><h1><u><u>AVAILABLE ROOMS</u></u></h1></div>
    <br>
    <div class="row" >
        @foreach ($rooms as $room)
            <div class="col-md-4" style="margin-bottom:10px;">
                <a href="{{route('room.details',$room->id)}}">
                    <div class="card">
                      <div class="card-body">
                        <img src="{{$room->images[0]->file_path}}" alt="" srcset="">
                        <br>
                        <br>
                        <strong>Capacity: {{$room->capacity}}</strong> <br>
                        <strong>Room Price: Rs.{{$room->room_price}}</strong>
                      </div>
                    </div>
                  </a>
            </div>
        @endforeach
    </div>

</div>
</section>
@endsection