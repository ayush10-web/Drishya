@extends('frontend.layouts.master')
@section('content')
<section class="about_top_banner">

    <div class="container">
        <div class="banner_abt">
            <h1>ABOUT US</h1>
            <p style = "width:100%; font-size:30px;">This is Drishya, kathmandu kalanki, situated in the heart of bustling Capital, hotel location will appeal to quest looking to unwind, explore and experience the true essence of Nepal. We have 360° breathe taking panoramical view of the entire city and Himalayan ranges.</p>
            <img src="images/test.jpeg">
            <p style = "width:100%; font-size:30px;">
          {{-- {!! $about->description !!} --}}
          Our heritage of warm hospitality inspires us to always provide an inviting and effortless experience. This is what we have always done and what we will continue to do. Consequently, our ultimate aim is to create a milestone in Hospitality industry by delivering quality food and rooms.

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
