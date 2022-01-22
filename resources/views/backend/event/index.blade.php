@extends('backend.layouts.master')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0"><u>Event Lists</u> </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Event</li>
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
                      <th>Event Name</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Description</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($events as $key=>$event)
                      <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$event->event_name}}</td>
                        <td>{{$event->start_date}}</td>
                        <td>{{$event->end_date}}</td>
                        <td>{{$event->description}}</td>
                        <td>
                          <?php if($event->status == 'C'){ ?> 
                            Completed
                          <?php }else if($event->status == 'U'){ ?>
                            Upcomming
                          <?php }else if($event->status == 'O'){ ?>
                            Ongoing
                          <?php } ?>
                        </td>
                        <td><a href="{{route('event.edit',$event->id)}}"><i class="fa fa-edit" title="delete"></i></a> &nbsp; &nbsp; <a href="{{route('event.delete',$event->id)}}"><i class="fa fa-trash text-danger" title="delete"></i></a></td>
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