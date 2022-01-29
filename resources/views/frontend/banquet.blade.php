@extends('frontend.layouts.master')
@section('content')
<section class="about_top_banner">

    <div class="container">
        <div class="banner_abt">
            <h1>ABOUT US</h1>
            <img src="images/test.jpeg">
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
