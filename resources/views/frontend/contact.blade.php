@extends('frontend.layouts.master')
@section('content')
@include('backend.layouts.alerts')
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
                <h1 style="color:#787006;">If you have any inquiries then please feel free to contact us.</h1>
                <form action="{{route('contact.add')}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="name" placeholder="Your Name" required>

                    <input type="email" name="email" placeholder="Your E-mail Address" required>


                    <input type="text" name="contact_number" placeholder="Your Contact Number">
                    <textarea rows="8"  name="message" cols="50" placeholder="Your Message"></textarea>

                    <button class="btn btn-primary">Submit</button>

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