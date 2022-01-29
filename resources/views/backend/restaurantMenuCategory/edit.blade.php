@extends('backend.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><u>Edit Restaurant Menu Category</u> </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('restaurantmenucategory.index')}}">Restaurant Category</a></li>
            <li class="breadcrumb-item active">Edit Menu Category</li>
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
              <h3 class="card-title">Edit Restaurant Menu Category</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('restaurantmenucategory.update',$restaurantMenuCategories->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-6">
                        <label for="category_name">Category Name</label>
                        <input type="text" name="category_name" class="form-control" id="category_name" value="{{($restaurantMenuCategories->category_name)}}" placeholder="Enter Category Name">
                      </div>
                      <div class="col-md-6">
                        <label for="status">Status</label>
                        <select name="status" class="form-control" id="status" required>
                          <option value="E" @if ($restaurantMenuCategories->status == 'E')
                              selected
                          @endif>Enabled</option>
                          <option value="D" @if ($restaurantMenuCategories->status == 'D')
                            selected
                        @endif>Disabled</option>
                        </select>
                      </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
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