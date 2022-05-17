@extends('backend.layouts.master')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0"><u>Hotel Rooms</u> </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Rooms</li>
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
                      <th>Category</th>
                      <th>Room Number</th>
                      {{-- <th>Floor Number</th> --}}
                      {{-- <th>Capacity</th> --}}
                      <th>Price</th>
                      <th>Status</th>
                      <th>Bed</th>
                      {{-- <th>View</th> --}}
                      {{-- <th>Image</th> --}}

                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($rooms as $key=>$room)
                      <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$room->category}}</td>
                        <td>{{$room->room_number}}</td>
                        {{-- <td>{{$room->floor_number}}</td> --}}
                        {{-- <td>{{$room->capacity}}</td> --}}
                        <td>{{$room->room_price}}</td>
                        <td>{{($room->status == 'U') ? 'Unavailable':'Available'}}</td>
                        <td>{{$room->bed}}</td>
                        {{-- <td>{{$room->view}}</td> --}}
                        {{-- <td>@if (count($room->images) > 0)
                            @foreach ($room->images as $image)
                                <img src="{{$image->file_path}}" alt="img" style="height:100px; width:100px;">
                            @endforeach
                        @endif</td> --}}
                        <td><a href="{{route('room.edit',$room->id)}}"><i class="fa fa-edit" title="delete"></i></a> &nbsp; &nbsp; <a onclick="return confirm('you sure want to delete ?')" href="{{route('room.delete',$room->id)}}"><i class="fa fa-trash text-danger" title="delete"></i></a></td>
                      </tr>
                    @endforeach
                   
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