@extends('backend.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><u>Edit Slider Data</u> </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('slider.index')}}">Slider</a></li>
            <li class="breadcrumb-item active">Edit Slider</li>
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
              <h3 class="card-title">Edit Slider</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('slider.update',$slider->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                      <div class="row">
                          <div class="col-md-6">
                            <label for="slider">Slider Name</label>
                            <input type="text" name="slider_name" class="form-control" id="slider_name" value="{{$slider->slider_name}}" placeholder="Enter Slider Name" required>
                          </div>
                            <div class="col-md-6">
                              <label for="slider">Description</label>
                              <input type="text" name="description" class="form-control" id="description" value="{{$slider->description}}" placeholder="Enter Description" required>
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class = "row">
                        <div class="col-sm-6">
                          <label for="slider">Slider Code</label>
                          <select name="slider_code" class="form-control" id="status" required>
                              <option value="" disabled selected>Select Slider Code</option>
                              <option value="1">Restaurant</option>
                              <option value="0">Home</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                              <label for="slider">Status</label>
                              <select name="status" class="form-control" id="status" required>
                                <option value="1" @if ($slider->status == '1')
                                    selected
                                @endif>Available</option>
                                <option value="0" @if ($slider->status == '0')
                                  selected
                              @endif>Unavailable</option>
                            </select>
                            </div>
                            <div class="col-md-6">
                                <label for="slider">Slider Image</label>
                                <input type="file" name="images[]" class="form-control" id="room_capacity" placeholder="Enter Slider Image" multiple>
                            </div>
                            <div id="img-preview">
                                @if (count($slider->images) > 0)
                                    <div class="row">
                                      @foreach ($slider->images as $key=>$image)
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
                url: "{{ route('slider.image.delete', '+params+') }}",
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
@endpush