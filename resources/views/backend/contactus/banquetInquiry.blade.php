@extends('backend.layouts.master')
@section('content')
@include('backend.layouts.alerts')
 <!-- Content Header (Page header) -->
 <div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0"><u>Banquet Inquiry</u> </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Banquet Inquiry</li>
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
                      <th>Name</th>
                      <th>Number</th>
                      <th>Email Address</th>
                      <th>Message</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($contactus as $key=>$contact)
                      <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->contact_number}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->message}}</td>
                        <td>
                          <?php if($contact->status == '1'){ ?> 
                            Unseen
                          <?php }else if($contact->status == '0'){ ?>
                            Seen
                          <?php } ?>
                        </td>
                        <td> <a class="fa fa-eye btn btn-primary btn btn-sm" data-toggle="modal" data-target="#exampleModal{{$contact->id}}">
                          </a> || <a class=" btn btn-danger btn btn-sm" href="{{route('message.delete',$contact->id)}}"><i class="fa fa-trash" aria-hidden="true"></i>
                          </a>  </td>
                      </tr>
                      @include('backend.contactus.modal',['contact'=>$contact])
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