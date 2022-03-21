@extends('frontend.layouts.master')
@section('content')
@include('backend.layouts.alerts')
<section style="margin: 20px">
    <div class="container">
        <div class="row">
            <div class="col-md-12 shadow p-3 mb-5 bg-white rounded">
                <div class="card">
                    <div class="card-body">
                      <h4 class="card-title"> <strong><u> Room Details</u></strong></h4>

                      @if ($room->category == "Suit Deluxe Room")
                          <p>Spacious, Bright Suit Room comes with a king size bed with comfortable mattress, fully equipped bathroom finished with top quality bath tub</p>
                          <br>
                          <p>{{$room->description}}</p>
                      @elseif ($room->category == "Double Deluxe Room")
                          <p>High quality parquet floored, spacious, bright deluxe room. The room comes with one king size bed, free WIFI, AC, 32 Led TV, and wall-in showers with rainfall showerheads and including minibar. </p>
                          <br>
                          <p>{{$room->description}}</p>
                      @endif
                      <br>
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
                              
                            </ul>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                              Book Room
                            </button>
                        </div>
                        <div class="col-md-7">
                          <div class="div" style="height: 370px;">
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
                                      <img class="d-block w-100" src="{{$value->file_path}}" alt="First slide">
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
                        </div>
                      </div>
                      
                      @if (count($dateArray) > 0)
                      <div class="note text-danger">Note: This room is not available for these days&nbsp;(@foreach ($dateArray as $item)
                        
                        @if($loop->last)
                        <span>{{$item}}.</span>
                        @else
                        <span>{{$item}}, &nbsp;</span>
                        @endif
                    @endforeach)</div>
                      @endif
                     
                      <div class="div text-center">
                         {{-- <strong>Room's Capacity: {{$room->capacity}}</strong> <br>
                          <strong>Floor Number:{{$room->floor_number}}</strong> <br>
                          <strong>Room Price:{{$room->room_price}}</strong> <br>

                          <i class="card-text">{{$room->description}}</i>
                        <br>
                        <br> --}}
                        <input type="hidden" id="roomId" value="{{$room->id}}">
                        <!-- Button trigger modal -->
                       
                      </div>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <form action="{{route('book.room',$room->id)}}" method="post">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Book A Room</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            
                            <div class="modal-body">
                              
                                @csrf
                                <div class="form-group">
                                  <div class="row">
                                      <div class="col-md-6">
                                        <input type="text" name="name" class="form-control" id="room_no" placeholder="Enter Your Name" required>
                                      </div>
                                      <div class="col-md-6">
                                        <input type="integer" name="number" class="form-control" id="room_capacity" placeholder="Enter Your Number" required>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                      <div class="col-md-6">
                                        <input type="email" name="email" class="form-control" id="room_no" placeholder="Enter Email Address" required>
                                      </div>
                                      <div class="col-md-6">
                                        <input type="integer" name="address" class="form-control" id="room_capacity" placeholder="Enter Address" required>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                      <div class="col-md-6">
                                        <input type="date" name="from" class="form-control" id="fromdate" placeholder="Enter From Date"  onchange="dsfgrthyju()" min="@php echo date('Y-m-d') @endphp" required>
                                      </div>
                                      <div class="col-md-6">
                                        <input type="date" name="to" class="form-control" id="todate" placeholder="Enter To Date" onchange="efgrthyjumk()" min="" required>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                      <div class="col-md-6">
                                        <input type="text" class="form-control" id="days" value="0 days" readonly>
                                      </div>
                                      <input type="hidden" id="sendDays" value="" name="days">
                                  </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Book</button>
                            </div>
                          </div>
                        </form>
                        </div>
                      </div>
                      
                    </div>
                  </div>
            </div>
            {{-- <div class="col-md-5"> 
              <div class="div text-center shadow p-3 mb-5 bg-white rounded">
                <h4><strong>Other Available Rooms</strong></h4>
                <div class="div">
                  @foreach ($rooms as $val)
                  @if ($val->id != $room->id)
                  <div class="col-md-9" style="position: relative; left:50px;">
                    <a href="{{route('room.details',$val->id)}}">
                    <div class="card">
                      <div class="card-body">
                        <img src="{{$val->images[0]->file_path}}" alt="" srcset="">
                        <br>
                        <br>
                        <strong>Capacity: {{$val->capacity}}</strong> <br>
                        <strong>Room Price: Rs.{{$val->room_price}}</strong>

                      </div>
                    </div>
                  </a>
                  </div> <br>
                  @endif
                  
                  @endforeach
                </div>
                
              </div>
            </div> --}}
        </div>
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
        var token = '{!! csrf_token() !!}';
          $.ajax({
            url: "/room/check-availability",
            type: 'GET',
            data: {
              "id": roomid,
                "date": from,
            },
            success: function(success) {
              console.log(success);
              if (success == 'y') {
                alert('Sorry, room is not available for this date.')
                $('#fromdate').val('')
              }
             }
          });

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
        var token = '{!! csrf_token() !!}';
          $.ajax({
            url: "/room/check-availability",
            type: 'GET',
            data: {
              "id": roomid,
                "date": to,
            },
            success: function(success) {
              console.log(success);
              if (success == 'y') {
                alert('Sorry, room is not available for this date.')
                $('#todate').val('')
              }
             }
          });

    }

            

</script>
@endpush
@endsection