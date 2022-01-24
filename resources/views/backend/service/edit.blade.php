@extends('backend.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><u>Add Services</u> </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('service.index')}}">Services</a></li>
            <li class="breadcrumb-item active">New Service</li>
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
              <h3 class="card-title">Add Services</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('service.update',$service->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-6">
                        <label for="service_name">Service Name</label>
                        <input type="text" name="service_name" class="form-control" id="service_name" value = "{{$service->service_name}}" required>
                      </div>
                      <div class="col-md-6">
                        <label for="description">Description</label>
                        <input type="integer" name="description" class="form-control" id="description" placeholder="Description" value = "{{$service->description}}" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                          <label for="room_no">Status</label>
                          <select name="status" class="form-control" id="status" required>
                              <option value="" disabled selected>Select Status</option>
                              <option value="1" @if ($service->status=='1') selected @endif>Available</option>
                              <option value="0" @if ($service->status=='0') selected @endif>Unavailable</option>

                          </select>
                        </div>
                        <div class="col-md-6">
                            <label for="room_no">Image</label>
                            <input type="file" name="image" class="form-control"><br>
                            <div id="img-preview">
                              @if ($service->image != null)
                                  <div class="row">
                                      <div class="col-md-3">
                                        <img src="{{$service->image->file_path}}" alt="img" style="height:100px; width:100px;"><br>
                                      </div>
                                  </div>
                              @endif
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Edit</button>
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