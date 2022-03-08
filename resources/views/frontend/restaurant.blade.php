@extends('frontend.layouts.master')
@section('content')
<section class="service_banner">
    <div class="banner_width">
        <img src="images/restimage.png" alt="#">
    </div><!-- banner_width -->
    <div class="service_overlay contact_overlay">
        <h1 class="text-center" style="color: #043249;
        text-decoration-color: antiquewhite;
        font-style: italic; margin-top:30px">Welcome To Our<br> Restaurant </h1>
    </div><!-- service_overlay -->
</section><!-- service_banner -->
<section id="about-us" style="margin-top: 70px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 style="font-style: oblique; color: #043249;
                font-family: 'Herr Von Muellerhoff', Sans-serif;
                font-weight: 400;
                line-height: 58px;">Drishya Restaurant</h1>

                <span style="font-size : 25px;">
                    Drishya resturanrt serves one of the best food as it has experienced chef who will staisfy your hunger with the delicious food upon your request. We offer wide range of food variety. Our restaurant is located at the 5Th floor where you can enjoy your food with scenic view of Kathmandu valley. 
                </span> <br> <br>

            </div>
            <div class="col-md-6">
                <div class="row overflow-auto" style="height: 450px;">
                    <div class="col-md-6" style="padding-left:5px;padding-right:5px;">
                    @for($i = 0; $i < count($sliders); $i=$i+2)
                        <a data-toggle="modal" data-target="#sliderImagePreviewModal{{$sliders[$i]->images[0]->id}}">
                            <img class="d-block w-100" src="{{ $sliders[$i]->images[0]->file_path }}" alt="First slide" style="width:100%;margin-top:10px;">
                        </a>
                        @include('frontend.sliderImagePreviewModal',['images'=>$sliders[$i]])
                    @endfor
                    </div>
                    <div class="col-md-6" style="padding-left:5px;padding-right:5px;">
                    @for($i = 1; $i < count($sliders); $i=$i+2)
                        <a data-toggle="modal" data-target="#sliderImagePreviewModal{{$sliders[$i]->images[0]->id}}">
                            <img class="d-block w-100" src="{{ $sliders[$i]->images[0]->file_path }}" alt="First slide" style="width:100%;margin-top:10px;">
                        </a>
                        @include('frontend.sliderImagePreviewModal',['images'=>$sliders[$i]])
                    @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</section>
<br><br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto col-12 text-center mb-3">
                <h1 class="text-center" style="color: #043249">Our Menu</h1>
            </div>
            @foreach($categories as $category)
                <div class="col-12 mt-4">
                    <h3 class="text-center">{{$category->category_name}}</h3>
                    <hr class="accent my-5">
                </div>
                <div class="card-columns" style="width:100%;">
                    
                    @foreach($category->menus as $m)
                        <div class="card card-body">
                            <div class="card">
                                @if (count($m->images) > 0)
                                  <img src="{{$m->images[0]->file_path}}" alt="" srcset="">
                                @else
                                    <img src="images/download.png" alt="" srcset="">
                                @endif
                            </div>
                            <span class="float-right font-weight-bold">Rs {{$m->price}}</span>
                            <h6 class="text-truncate">{{$m->Name}}</h6>
                            <p class="small">{{$m->description}}
                            </p>
                        </div>
                    @endforeach
                </div>
            @endforeach
            <div class="col-12 mt-4">
                <hr class="accent my-5">
            </div>
<<<<<<< HEAD
        </div>
    </div>
</section>
<!-- about_top_banner -->
=======
        </div> --}}
    </section><!-- about_top_banner -->
>>>>>>> fc1c2aa9a3e10ab78578020f36c3fa36c054ba4d

@endsection
