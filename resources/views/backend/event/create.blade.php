@extends('backend.layouts.master')
@section('content')
<!-- Content Header (Page header) -->

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><u>Add New Events</u> </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('event.index')}}">Events</a></li>
            <li class="breadcrumb-item active">New Events</li>
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
              <h3 class="card-title">Add New Events</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('event.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-6">
                        <label for="room_no">Event Name</label>
                        <input type="text" name="event_name" class="form-control" id="event_name" placeholder="Enter Event Name" required>
                      </div>
                      <div class="col-md-6">
                        <label for="room_no">Start Date</label>
                        <input type="text" name="start_date" class="form-control" id="start_date" placeholder="Start Date" required>
                      </div>
                  </div>
                </div>
                <div class="form-group">
                    <div class="row">
                      <div class="col-md-6">
                          <label for="room_no">End Date</label>
                          <input type="text" name="end_date" class="form-control" id="end_date" placeholder="End Date" required>
                        </div>
                        <div class="col-md-6">
                          <label for="room_no">Status</label>
                          <select name="status" class="form-control" id="status" required>
                              <option value="" disabled selected>Select Status</option>
                              <option value="U">Upcomming</option>
                              <option value="O">Ongoing</option>
                              <option value="C">Completed</option>
                          </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                          <label for="room_no">Description</label>
                          <input type="text" name="description" class="form-control" id="description" placeholder="Description">
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