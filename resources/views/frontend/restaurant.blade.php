@extends('frontend.layouts.master')
@section('content')
<section class="about_top_banner">

    <div class="container">
        <div class="banner_abt">
            <h1>Drishya Restaurant</h1>
            {{-- <img src="images/test.jpeg"> --}}
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="images/test.jpeg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/test.jpeg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/test.jpeg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            <p>
          {{-- {!! $about->description !!} --}}
          Drishya

            </p>
        </div><!-- banner_abt -->
    </div><!-- container -->
</section><!-- about_top_banner -->

<section class="team_blk">

    <div class="container">
        <div class="team_detail">
            <h1>OUR TEAM</h1>
            <div class="row">
                <div class="col-md-5"></div><!-- col -->

                <div class="col-md-7 team_show">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="team_img">
                                <img src="" alt="#">
                                <p>Test<span>Test</span></p>
                            </div><!-- team_img -->
                        </div><!-- col -->
                        <div class="col-md-4">
                            <div class="team_img">
                                <img src="" alt="#">
                                <p><span>Test</span></p>
                            </div><!-- team_img -->
                        </div><!-- col -->
                        <div class="col-md-4">
                            <div class="team_img">
                                <img src="" alt="#">
                                <p>
                                    Test<span>Test</span></p>
                            </div><!-- team_img -->
                        </div><!-- col -->

                        <div class="col-md-4">
                            <div class="team_img">
                                <img src="" alt="#">
                                <p>Test<span>Test</span></p>
                            </div><!-- team_img -->
                        </div><!-- col -->
                       <!-- <div class="col-md-4">
                            <div class="team_img">
                                <img src="images/received_3467839840380570.png" alt="#">
                                <p>Pooja Khanal<span> UK Branch Head</span></p>
                            </div><!-- team_img -->
                        </div><!-- col -->
                        <!-- <div class="col-md-4">
                            <div class="team_img">
                                <img src="images/received_491793791551368.png " alt="#">
                                <p>Rajan Kafle<span> Marketing Head (UK Branch)</span></p>
                            </div><!-- team_img -->
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- team detail --> 

    </div><!-- container -->

    <div class="team">
</section><!-- team_blk -->
@endsection
