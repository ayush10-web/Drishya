@extends('frontend.layouts.master')
@section('content')
<section class="service_banner">
    <div class="banner_width">
        <div class="div">
            <img src="images/pictures/DSC071834.jpg" alt="#">
        </div>
    </div>
    <br>
    <div class="text-center" >
      {{-- <h6>  <a href="http://">HOME</a> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;| &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<a href="http://">CONTACT US</a> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;| &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<a href="">ROOMS</a>&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;| &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<a href="">BANQUETS</a> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;| &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<a href="">RESTAURANT</a></h1> --}}
   </div>
   <h1 class="text-center" style="color: #043249;
   text-decoration-color: antiquewhite;
    margin-top:30px">PHOTOS</h1>
   <br>
   <center><i class="text-center">Consider this your new travel guide. Here’s a look at how our guests experience life.</i></center>
   <h1 class="text-center" style="color: #043249;
   text-decoration-color: antiquewhite;
    margin-top:30px">ROOMS</h1>
   <br>
   <div class="container">
    <div class="row">
        @foreach ($rooms as $room)
        <div class="col-md-4" style="height: 225px; overflow:hidden; margin-bottom: 20px;">
            <img src="{{$room->roomImage->file_path}}"  alt="" srcset="">
        </div>
        @endforeach
    </div>
    <br>
    <h1 class="text-center" style="color: #043249;
   text-decoration-color: antiquewhite;margin-top:30px">RESTAURANT</h1>
   <div class="row">
    @foreach ($restaurants as $restaurant)
        <div class="col-md-4" style="height: 225px; overflow:hidden; margin-bottom: 20px;">
            <img src="{{$restaurant->images[0]->file_path}}"  alt="" srcset="">
        </div>
        @endforeach
   </div>
   <br>
    <h1 class="text-center" style="color: #043249;
   text-decoration-color: antiquewhite;margin-top:30px">Banquet</h1>
   <div class="row">
    @foreach ($banquets as $banquet)
        <div class="col-md-4" style="height: 225px; overflow:hidden; margin-bottom: 20px;">
            <img src="{{$banquet->images[0]->file_path}}"  alt="" srcset="">
        </div>
        @endforeach
   </div>
</div>
<br>
<br>
   </div>
   
</section><!-- service_banner -->
<section>
   
</section>
<!-- about_top_banner -->
@endsection
