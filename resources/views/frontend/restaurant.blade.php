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

                <span style="font-style: italic;">
                    Lorem Ipsum is simply dummy text of the printing and type jh setting industry.
                        Lorem Ipsum has been the in standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to .
                </span> <br> <br>
                <span style="font-style: italic;">
                    Lorem Ipsum is simply dummy text of the printing and type jh setting industry.
                        Lorem Ipsum has been the in standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to .
                </span> <br> <br>
                <span style="font-style: italic;">
                    Lorem Ipsum is simply dummy text of the printing and type jh setting industry.
                        Lorem Ipsum has been the in standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to .
                </span>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-7">
                        @if (count($sliders) > 0)
                         <img class="d-block w-100" src="{{ $sliders[0]->images[0]->file_path }}" alt="First slide" style="height:225px;">
                        @else
                        <img src="images/kitchen_adventurer_donut.jpg" alt="" style="height:225px;">
                        @endif
                    </div>
                    <div class="col-md-5">
                        @if (count($sliders) > 1)
                        <img class="d-block w-100" src="{{ $sliders[1]->images[0]->file_path }}" alt="First slide" style="height:225px; margin-left: -20px;">
                       @else
                       <img src="images/kitchen_adventurer_cheesecake_brownie.jpg" alt="" style="height:225px; margin-left: -20px;">
                       @endif
                    </div>
                </div>
                <div class="row" style="margin-top: 15px;">
                    <div class="col-md-5">
                        @if (count($sliders) > 2)
                            <img class="d-block w-100" src="{{ $sliders[2]->images[0]->file_path }}" alt="First slide" style="height:225px;">
                        @else
                            <img src="images/kitchen_adventurer_cheesecake_brownie.jpg" alt="" style="height:225px;">
                        @endif
                    </div>
                    <div class="col-md-7">
                        @if (count($sliders) > 3)
                            <img class="d-block w-100" src="{{ $sliders[3]->images[0]->file_path }}" alt="First slide" style="height:225px;  margin-left: -20px;">
                        @else
                            <img src="images/kitchen_adventurer_cheesecake_brownie.jpg" alt="" style="height:225px; margin-left: -20px;">
                        @endif
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
        </div>
    </div>
</section>
<!-- about_top_banner -->
@endsection
