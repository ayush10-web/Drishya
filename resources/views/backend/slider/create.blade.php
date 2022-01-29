@extends('backend.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><u>Add Sliders</u> </h1>
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
              <h3 class="card-title">Add Sliders</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-6">
                        <label for="slider">Slider Name</label>
                        <input type="text" name="slider_name" class="form-control" id="slider" placeholder="Enter Slider Name" required>
                      </div>
                        <div class="col-md-6">
                          <label for="slider">Description</label>
                          <input type="text" name="description" class="form-control" id="floor_num" placeholder="Enter Description" required>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                  <div class = "row">
                    <div class="col-sm-6">
                      <label for="slider">Slider Code</label>
                      <select name="slidercode" class="form-control" id="status" required>
                          <option value="" disabled selected>Select Slider Code</option>
                          <option value="res">Restaurant</option>
                          <option value="home">Home</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="slider">Slider Image</label>
                      <input type="file" name="images[]" class="form-control" id="room_capacity" placeholder="Enter Slider Image" >
                  </div>
                  </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                          <label for="slider">Status</label>
                          <select name="status" class="form-control" id="status" required>
                              <option value="" disabled selected>Select Status</option>
                              <option value="1">Available</option>
                              <option value="0">Unavailable</option>
                          </select>
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