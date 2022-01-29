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
              <h3 class="card-title">Edit Restaurant Menu</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('restaurantmenu.update',$restaurantmenu->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-6">
                        <label for="restaurant_menu">Menu Name</label>
                        <input type="text" name="restaurant_menu" class="form-control" id="restaurant_menu" value="{{($restaurantmenu->Name)}}" placeholder="Enter Menu Name">
                      </div>
                      <div class="col-md-6">
                        <label for="restaurant_menu">Price</label>
                        <input type="integer" step="0.01" name="menu_price" class="form-control" value="{{($restaurantmenu->price)}}" id="menu_price" placeholder="Enter Menu Price" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                          <label for="restaurant_menu">Description</label>
                          <textarea name="description"  class="form-control" id="description" value="{{($restaurantmenu->description)}}" placeholder="Enter Description Here"></textarea>
                        </div>
                        <div class="col-md-6">
                          <label for="restaurant_menu">Status</label>
                          <select name="status" class="form-control" id="status" required>
                            <option value="A" @if ($restaurantmenu->status == 'A')
                                selected
                            @endif>Available</option>
                            <option value="U" @if ($restaurantmenu->status == 'U')
                              selected
                          @endif>Unavailable</option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-6">
                      <label for="category">Restaurant Category</label>
                      <select name="category" class="form-control" id="category" required>
                          <option value="" disabled selected>Select Category</option>
                          <option value="Main"@if ($restaurantmenu->category == 'Main')
                            selected
                        @endif>Main</option>
                          <option value="Starter" @if ($restaurantmenu->category == 'Starter')
                            selected
                        @endif>Starter</option>
                        <option value="Appetizers" @if ($restaurantmenu->category == 'Appetizers')
                          selected
                      @endif>Appetizers</option>
                      <option value="Drinks" @if ($restaurantmenu->category == 'Drinks')
                        selected
                    @endif>Drinks</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                        <label for="restaurant_menu">Menu Image</label>
                        <input type="file" name="images[]" class="form-control" id="room_capacity" placeholder="Enter Room's Capacity" multiple> <br>
                        <div id="img-preview">
                          @if (count($restaurantmenu->images) > 0)
                              <div class="row">
                                @foreach ($restaurantmenu->images as $key=>$image)
                                  <div class="col-md-3" id="image{{$image->id}}">
                                    <img src="{{$image->file_path}}" alt="img" style="height:100px; width:100px;"><br>
                                    <button class="text-white" type="button" onclick="removeImage('{{$image->id}}')" style="background:black;width: 100px;">Remove</button>
                                  </div>
                                @endforeach
                              </div>
                          @endif
                         
                        </div>
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
@push('scripts')
<script>
  function removeImage(params) {
    var conf = confirm('you want to delete this image ?')
    if (conf == true) {
      var token = $("meta[name='csrf-token']").attr("content");
            $.ajax({
                url: "{{ route('room.image.delete', '+params+') }}",
                type: 'GET',
                data: {
                  "id": params,
                    "_token": token,
                },
                success: function(success) {
                    console.log(success);
                    $('#image'+params).remove();
                }
            });
    }
  }
</script>