@extends('backend.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><u>Add Category</u> </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('room.index')}}">Rooms</a></li>
            <li class="breadcrumb-item active">New Room</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Category</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('room.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <div class="row">
                    {{--  --}}
                    <div class="col-md-6">
                      <label for="room_no">Category Name</label>
                      <select name="category" class="form-control" id="category" required>
                          <option value="" disabled selected>Select Category</option>
                          <option value="Twin Deluxe Room">Twin Deluxe Room</option>
                          <option value="Suit Deluxe Room">Suit Deluxe Room</option>
                          <option value="Double Deluxe Room">Double Deluxe Room</option>
                          <option value="Triple Deluxe Room">Triple Deluxe Room</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="room_no">Room Number</label>
                      <input type="text" name="room_no" class="form-control" id="room_no" placeholder="Enter Room Number" required>
                    </div>
                  </div>
              </div>
                <div class="form-group">
                  <div class="row">
                      {{-- <div class="col-md-6">
                        <label for="room_no">Room Number</label>
                        <input type="text" name="room_no" class="form-control" id="room_no" placeholder="Enter Room Number" required>
                      </div> --}}
                      {{-- <div class="col-md-6">
                        <label for="room_no">Room Capacity</label>
                        <input type="integer" name="room_capacity" class="form-control" id="room_capacity" placeholder="Enter Room's Capacity" required>
                    </div> --}}
                    <div class="col-md-6">
                      <label for="room_no">Room Price</label>
                      <input type="integer" step="0.01" name="room_price" class="form-control" id="room_price" placeholder="Enter Room Price" required>
                    </div>
                    <div class="col-md-6">
                      <label for="bed">No. Of  Bed</label>
                      <input type="text" name="bed" class="form-control" id="room_capacity" placeholder="Enter number of bed" required>
                    </div>
                  </div>
                </div>
                {{-- <div class="form-group">
                    <div class="row">
                       
                        <div class="col-md-6">
                          <label for="room_no">Floor Number</label>
                          <input type="number" name="floor_num" class="form-control" id="floor_num" placeholder="Enter Floor's Number" required>
                      </div>
                    </div>
                </div> --}}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                          <label for="room_no">Status</label>
                          <select name="status" class="form-control" id="status" required>
                              <option value="" disabled selected>Select Status</option>
                              <option value="A">Available</option>
                              <option value="U">Unavailable</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                      <label for="room_no">Description</label>
                          <textarea name="description"  class="form-control" placeholder="Enter Description Here"></textarea>
                        </div>
                    </div>
                </div>
                
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <label for="room_no">Room Service</label>
                    <select name="room_service" class="form-control" id="Room Service" required>
                        <option value="" disabled selected>Select Room Service</option>
                        <option value="1">Available</option>
                        <option value="0">Unavailable</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="wifi">WIFI</label>
                    <select name="wifi" class="form-control" id="Room Service" required>
                      <option value="" disabled selected>Select Wifi Availability</option>
                      <option value="1">Available</option>
                      <option value="0">Unavailable</option>
                  </select>
                  </div>
                </div>
            </div>
            <div class="form-group">
              <div class="row">
                {{--<div class="col-md-6">
                  <label for="bed">No. Of  Bed</label>
                  <input type="text" name="bed" class="form-control" id="room_capacity" placeholder="Enter number of bed" required>
                </div> --}}
                {{-- <div class="col-md-6">
                  <label for="room_no">View From Room</label>
                  <input type="text" class="form-control" placeholder="View From Room" name="view">
                </div> --}}
                <div class="col-md-6">
                  <label for="room_no">Room Image</label>
                  <input type="file" name="images[]" class="form-control" id="room_capacity" multiple>
                </div>
              </div>
          </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection