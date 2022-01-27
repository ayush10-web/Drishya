@extends('frontend.layouts.master')
@section('content')
<section class="service_banner">
    <div class="banner_width">
        <img src="images/contact us banner.png" alt="#">

    </div><!-- banner_width -->
    <div class="service_overlay contact_overlay">
        <h1>CONTACT</h1>
    </div><!-- service_overlay -->
</section><!-- service_banner -->

<section class="career_blk contact_blk">
    <div class="row no-pad">
        <div class="col-md-3">
            <div class="left_career_img left_contact_img">
                <div class="career_img_overlay contact_img_overlay">


                </div><!-- career_img_overlay -->

            </div><!-- left_career_img -->
        </div><!-- col --> 
        <div class="col-md-6">
            <div class="contact_form">
                <h1>Start a new case. Just send us your questions or concerns by starting a new case and we will
                    give you the help you need. Start Here</h1>
                <form action="#" method="post"  enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="name" placeholder="Your Name" required>

                    <input type="text" name="email_id" placeholder="Your E-mail Address" required>


                    <input type="text" name="phone1" placeholder="Your Contact Number">
                    <textarea rows="8"  name="message" cols="50" placeholder="Your Message"></textarea>

                    <button>subbmit</button>

                </form>
            </div><!-- contact_form -->
        </div><!-- col -->
        <div class="col-md-3">
            <div class="right_career_img right_contact_img">
                <div class="right_career_img_overlay right_contact_img_overlay">

                </div><!-- career_img_overlay -->

            </div><!-- left_career_img -->
        </div><!-- col --> 
    </div>
</section>
@endsection