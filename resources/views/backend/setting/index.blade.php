@extends('backend.layouts.master')
@section('content')
@include('backend.layouts.alerts')
  <!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Setting</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card ">
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{route('setting.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="Name">Restaurant Name</label>
                <input type="text" class="form-control" name="name" value="{{$setting['name']}}" placeholder="Enter restaurant name" 
                >
              </div>
              <div class="form-group">
                <label for="Name">Restaurant Address</label>
                <input type="text" class="form-control" name="address" value="{{$setting['address']}}" placeholder="Enter address" 
                >
              </div> <div class="form-group">
                <label for="Name">Email Address</label>
                <input type="email" class="form-control" name="email" value="{{$setting['email']}}" placeholder="Enter address" 
                >
              </div> <div class="form-group">
                <label for="Name">Phone Number</label>
                <input type="text" class="form-control" name="phoneNumber" value="{{$setting['phoneNumber']}}" placeholder="Enter phone number" 
                >
              </div> 
              <div class="form-group">
                <label for="Name">Mobile Number</label>
                <input type="text" class="form-control" name="mobileNumber" value="{{$setting['mobileNumber']}}" placeholder="Enter phone number" 
                >
              </div>
              <div class="form-group">
                <label for="Name">Facebook</label>
                <input type="text" class="form-control" name="facebook" value="{{$setting['facebook']}}" placeholder="https://www.facebook.com/" 
                >
              </div>
              <div class="form-group">
                <label for="Name">Instagram</label>
                <input type="text" class="form-control" name="instagram" value="{{$setting['instagram']}}" placeholder="https://www.instagram.com/" 
                >
              </div>
              <div class="form-group">
                <label for="Name">Twitter</label>
                <input type="text" class="form-control" name="twitter" value="{{$setting['twitter']}}" placeholder="https://www.twitter.com/" 
                >
              </div>
              <div class="form-group">
                <label for="Name">Youtube</label>
                <input type="text" class="form-control" name="youtube" value="{{$setting['youtube']}}" placeholder="https://www.youtube.com/" 
                >
              </div>
              <div class="form-group">
                <label for="Name">Website</label>
                <input type="text" class="form-control" name="website" value="{{$setting['website']}}" placeholder="Enter Website's full Url" 
                >
              </div>
              <div class="form-group">
                <label for="logo">Logo</label>
               <input type="file"  class="form-control" name="logo" id="">
              </div>
              @if ($logo != null)
              <div class="img-preview">
                <img src="{{$logo->file_path}}" alt="" srcset="" style="height: 100px; width:100px;">
            </div>
              @endif
              
            </div>
            <!-- /.card-body -->
    
            <div class="card-footer">
              <button type="submit"  class="btn btn-primary float-right">Save</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
        </div>
    </div>


@endsection