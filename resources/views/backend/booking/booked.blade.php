@extends('backend.layouts.master')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0"><u>Booked Room</u> </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Booked Room</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->
            
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>S.N.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Contact</th>
                      <th>Room Number</th>
                      <th>Room Price Per Day</th>
                      <th>From Date</th>
                      <th>To Date</th>
                      <th>Price</th>
                      <th>Days</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (count($bookings) > 0)
                        @foreach ($bookings as $key=>$booking)
                            <tr>
                              <td>{{$key+1}}</td>
                              <td>{{$booking->customer->name}}</td>
                              <td>{{$booking->customer->email}}</td>
                              <td>{{$booking->customer->contact}}</td>
                              <td>{{$booking->room->room_number}}</td>
                              <td>{{$booking->room->room_price}}</td>
                              <td>{{$booking->from}}</td>
                              <td>{{$booking->to}} </td>
                              <td>{{$booking->days * $booking->room->room_price}}</td>
                              <td>{{$booking->days}}</td>
                              
                            </tr>
                        @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  

@push('scripts')
    <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    });
  
  });
</script>
@endpush


@endsection