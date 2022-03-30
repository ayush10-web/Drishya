@extends('frontend.layouts.master')
@section('content')
@include('backend.layouts.alerts')
<section class="service_banner" style="height:300px; overflow:hidden">
  <div class="banner_width" >
      <img src="/images/bedroom-416062_960_720.webp" alt="#" style="height:100%; margin-top: -23%">
  </div><!-- banner_width -->
  <div class="service_overlay contact_overlay">
      <h1 class="text-center" style="color: #043249; margin-top:7%"> {{$room->category}} </h1>
  </div><!-- service_overlay -->
</section><!-- service_banner -->
<section>
  <div id="checkinout" style="height:150px; background:azure">
      <div class="container" >
        <form action="{{route('book.room',$room->id)}}" method="post">
          @csrf
        <div class="row">
          
          <div class="col-md-2">
          <center>
              <strong style="top: 45px; position: relative;">Your Name</center>
              <input type="text" name="name" class="form-control" id="room_no" placeholder="Enter Name" required> </strong>
          </div>
          <div class="col-md-2">
            <center>
              <strong style="top: 45px; position: relative;">Phone Number
              <input type="integer" name="number" class="form-control" id="room_capacity" placeholder="Enter Number" required> </strong>
</center>          </div>
          <div class="col-md-2">
            <center>
              <strong style="top: 45px; position: relative;">Email Address
              <input type="email" name="email" class="form-control" id="room_no" placeholder="Enter Email Address" required> </strong>

              </center>          </div>
                <div class="col-md-2">
                  <center>
                    <strong style="top: 45px; position: relative;">Arrival Date
                      <input type="date" name="from" class="form-control" id="fromdate" placeholder="Enter From Date"  onchange="dsfgrthyju()" min="@php echo date('Y-m-d') @endphp" required> </strong>
                  </center>         
                 </div>
                 <div class="col-md-2">
                  <center>
                    <strong style="top: 45px; position: relative;">Departure Date

                      <input type="date" name="to" class="form-control" id="todate" placeholder="Enter To Date" onchange="efgrthyjumk()" min="" required></strong>
                  </center>         
                 </div>
                 <div class="col-md-2">
                  
                    <strong style="top: 75px; position: relative;">

                      <button type="submit" class="btn btn-primary">Book Now</button>
                      <input type="hidden" id="sendDays" value="" name="days">
                 </div>
        </div>
        </form>
      </div>
  </div>
</section>
    <div class="container" style="margin-top: -35px;">
                      <center>
                        <h3>{{$room->category}}</h3>
                      </center>
                      @if ($room->category == "Suit Deluxe Room")
                          <center><p>Spacious, Bright Suit Room comes with a king size bed with comfortable mattress, fully equipped bathroom finished with top quality bath tub</p>
                          <p>{{$room->description}}</p></center>
                      @elseif ($room->category == "Double Deluxe Room")
                         <center> <p>High quality parquet floored, spacious, bright deluxe room. The room comes with one king size bed, free WIFI, AC, 32 Led TV, and wall-in showers with rainfall showerheads and including minibar. </p>
                          <p>{{$room->description}}</p></center>
                      @else
                        <center><p>High quality parquet floored, spacious, bright rooms are available here at drishya. High quality parquet floored, spacious, bright rooms are available here at drishya.</p>
                        <p>{{$room->description}}</p></center>
                      @endif
                      {{-- <br>
                      <div class="row">
                        <div class="col-md-5">
                          <br>
                          <br>
                            <ul>
                              <h6>
                                
                              <li> <span> Room's Capacity : </span>{{$room->capacity}} Person</li><br>
                              <li> <span> Room's Price : </span>Rs.{{$room->room_price}} per day </li><br>
                              <li> <span> Bed : </span>{{$room->bed}}</li><br>
                              <li> <span> Wifi Availability : </span> @if ($room->wifi == "1")
                                  <i class="fa fa-check" style="color: green" aria-hidden="true"></i>
                              @else
                                  <i class="fa fa-times" style="color: red" aria-hidden="true"></i>
                              @endif</li><br>
                              <li> <span> Room Service : </span> @if ($room->wifi == "1")
                                <i class="fa fa-check" style="color: green" aria-hidden="true"></i>
                            @else
                                <i class="fa fa-times" style="color: red" aria-hidden="true"></i>
                            @endif</li><br>
                            </h6>
                              
                            </ul> --}}
                            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                              Book Room
                            </button> --}}
                        {{-- </div> --}}
                          <div class="div" style="height: 350px; margin-bottom:5px;">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  @if (count($room->images) > 0)
                                      @foreach ($room->images as $key=>$item)
                                      <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class=" @if($key == 0) active @endif "></li>
                                      @endforeach
                                  @endif
                                </ol>
                                <div class="carousel-inner" style="height: 350px">
                                  @if (count($room->images) > 0)
                                    @foreach ($room->images as $key=>$value)
                                    <div class="carousel-item @if($key == 0) active @endif">
                                      <img class="d-block w-100" src="{{$value->file_path}}" style="height: 350px;" alt="First slide">
                                    </div>
                                    @endforeach
                                  @endif
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                          </div>
                          <br>
                          <br>
                          <div class="amenities" style="margin-bottom: 55px;">
                            <center><h4>Amenities</h4></center>
                            <br>
                            <br><br>
                            <div class="container">
                              <div class="row">
                                <div class="col-md-4">
                                  <i class="fa fa-money-check" aria-hidden="true"></i> <span> Room's Price : </span>Rs.{{$room->room_price}} per day <br> <br>
                                  <i class="fa fa-bed" aria-hidden="true"></i> <span> Bed : </span>{{$room->bed}}
                                </div>
                                <div class="col-md-4">
                                  <i class="fa fa-wifi" aria-hidden="true"></i> <span> Wifi Availability : </span> @if ($room->wifi == "1")
                                  <i class="fa fa-check" style="color: green" aria-hidden="true"></i>
                              @else
                                  <i class="fa fa-times" style="color: red" aria-hidden="true"></i>
                              @endif <br> <br>
                              <i class="fa fa-wrench" aria-hidden="true"></i> <span> Room Service : </span> @if ($room->wifi == "1")
                                <i class="fa fa-check" style="color: green" aria-hidden="true"></i>
                            @else
                                <i class="fa fa-times" style="color: red" aria-hidden="true"></i>
                            @endif
                                </div>
                                <div class="colmd-4">
                                  <i class="fa fa-tv" aria-hidden="true"></i> <span> Television : </span> 
                                  <i class="fa fa-check" style="color: green" aria-hidden="true"></i> <br> <br>
                                </div>
                              </div>
                            </div>
                          </div>
                        <input type="hidden" id="roomId" value="{{$room->id}}">
    </div>
    
</section>


@push('scripts')
<script>
    function dsfgrthyju() {
       var from = $('#fromdate').val();
       var to = $('#todate').val();
       var roomid = $('#roomId').val();
       
       $('#todate').attr("min",from);
       var date1 = new Date(from);
        var date2 = new Date(to);
        var diffDays = parseInt((date2 - date1) / (1000 * 60 * 60 * 24), 10); 

        $('#days').val(diffDays);
        $('#sendDays').val(diffDays);
        // var token = '{!! csrf_token() !!}';
        //   $.ajax({
        //     url: "/room/check-availability",
        //     type: 'GET',
        //     data: {
        //       "id": roomid,
        //         "date": from,
        //     },
        //     success: function(success) {
        //       console.log(success);
        //       if (success == 'y') {
        //         alert('Sorry, room is not available for this date.')
        //         $('#fromdate').val('')
        //       }
        //      }
        //   });

    }
    function efgrthyjumk() {
      var from = $('#fromdate').val();
       var to = $('#todate').val();
       var roomid = $('#roomId').val();

       var date1 = new Date(from);
        var date2 = new Date(to);
        var diffDays = parseInt((date2 - date1) / (1000 * 60 * 60 * 24), 10); 
        $('#days').val(diffDays);

        $('#sendDays').val(diffDays);
        // var token = '{!! csrf_token() !!}';
        //   $.ajax({
        //     url: "/room/check-availability",
        //     type: 'GET',
        //     data: {
        //       "id": roomid,
        //         "date": to,
        //     },
        //     success: function(success) {
        //       console.log(success);
        //       if (success == 'y') {
        //         alert('Sorry, room is not available for this date.')
        //         $('#todate').val('')
        //       }
        //      }
        //   });

    }

            

</script>
@endpush
@endsection