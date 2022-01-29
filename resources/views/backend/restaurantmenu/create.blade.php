@extends('backend.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><u>Add Restaurant Menu</u> </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('restaurantmenu.index')}}">Restaurant</a></li>
            <li class="breadcrumb-item active">New Menu</li>
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
              <h3 class="card-title">Add New Restaurant Menu</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('restaurantmenu.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-6">
                        <label for="restaurant_menu">Menu Name</label>
                        <input type="text" name="restaurant_menu" class="form-control" id="restaurant_menu" placeholder="Enter Menu Name required">
                      </div>
                      <div class="col-md-6">
                        <label for="restaurant_menu">Price</label>
                        <input type="integer" step="0.01" name="menu_price" class="form-control" id="menu_price" placeholder="Enter Menu Price" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                          <label for="restaurant_menu">Description</label>
                          <textarea name="description"  class="form-control" placeholder="Enter Description Here"></textarea>
                        </div>
                        <div class="col-md-6">
                          <label for="room_no">Status</label>
                          <select name="status" class="form-control" id="status" required>
                              <option value="" disabled selected>Select Status</option>
                              <option value="A">Available</option>
                              <option value="U">Unavailable</option>
                          </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-6">
                      <label for="slider">Restaurant Category</label>
                      <select name="category" class="form-control" id="category" required>
                          <option value="" disabled selected>Select Restaurant Code</option>
                          <option value="Main">Main Course</option>
                          <option value="Starter">Starter</option>
                          <option value ="Appetizers">Appetizers</option>
                          <option value ="Drinks">Drinks</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="room_no">Menu Image</label>
                      <input type="file" name="images[]" class="form-control" id="restaurantmenu" placeholder="Restaurant Menu Picture" multiple>
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