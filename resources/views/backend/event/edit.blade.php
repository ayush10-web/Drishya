@extends('backend.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><u>Edit Event Data</u> </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('event.index')}}">Events</a></li>
            <li class="breadcrumb-item active">Edit Event</li>
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
              <h3 class="card-title">Edit Event</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('event.update',$event->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-6">
                        <label for="room_no">Event Name</label>
                        <input type="text" value="{{$event->event_name}}" name="event_name" class="form-control" id="event_name" placeholder="Enter Event Name" required>
                      </div>
                      <div class="col-md-6">
                        <label for="room_no">Start Date</label>
                        <input type="text" value="{{$event->start_date}}" name="start_date" class="form-control" id="start_date" placeholder="Start Date" required>
                      </div>
                  </div>
                </div>
                <div class="form-group">
                    <div class="row">
                      <div class="col-md-6">
                          <label for="room_no">End Date</label>
                          <input type="text" value="{{$event->end_date}}" name="end_date" class="form-control" id="end_date" placeholder="End Date" required>
                        </div>
                        <div class="col-md-6">
                          <label for="room_no">Status</label>
                          <select name="status" class="form-control" id="status" required>
                              <option value="U" @if ($event->status == 'U')
                                  selected
                              @endif>Upcomming</option>
                              <option value="O"@if ($event->status == 'O')
                                  selected
                              @endif>Ongoing</option>
                              <option value="C"@if ($event->status == 'C')
                                  selected
                              @endif>Completed</option>
                          </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                          <label for="room_no">Description</label>
                          <input type="text" value="{{$event->description}}" name="description" class="form-control" id="description" placeholder="Description">
                        </div>
                        <div class="col-md-6">
                          <label for="room_no">Event Image</label>
                          <input type="file" name="images[]" class="form-control" id="event_image" multiple> <br>
                          <div id="img-preview">
                            @if (count($event->images) > 0)
                                <div class="row">
                                  @foreach ($event->images as $key=>$image)
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
                url: "{{ route('event.image.delete', '+params+') }}",
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