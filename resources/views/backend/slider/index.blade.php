@extends('backend.layouts.master')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0"><u>Sliders</u> </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Sliders</li>
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
                      <th>Slider Name</th>
                      <th>Description</th>
                      <th>Slider code</th>
                      <th>Status</th>
                      <th>Image</th>
                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($sliders as $key=>$slider)
                      <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$slider->slider_name}}</td>
                        <td>{{$slider->description}}</td>
                        <td>@if($slider->slider_code == '1')
                          Restaurant
                          @else
                          Home
                          @endif
                         </td>
                        <td>@if($slider->status == '1')
                            Available
                            @else
                            Unavailable
                            @endif
                           </td>
                           <td>@if (count($slider->images) > 0)
                            @foreach ($slider->images as $image)
                                <img src="{{$image->file_path}}" alt="img" style="height:100px; width:100px;">
                            @endforeach
                        @endif</td>
                        <td><a href="{{route('slider.edit',$slider->id)}}"><i class="fa fa-edit" title="delete"></i></a> &nbsp; &nbsp; <a onclick="return confirm('you sure want to delete ?')" href="{{route('slider.delete',$slider->id)}}"><i class="fa fa-trash text-danger" title="delete"></i></a></td>
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