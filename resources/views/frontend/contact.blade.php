@extends('frontend.layouts.master')
@section('content')
@include('backend.layouts.alerts')
<section class="service_banner">
    <div class="banner_width">
        <img src="images/contactUsBanner.jpg" alt="#">

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
                <h1 style="color:#0e334a;">If you have any inquiries then please feel free to contact us.</h1>
                <form action="{{route('contact.add')}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="name" placeholder="Your Name" required>

                    <input type="email" name="email" placeholder="Your E-mail Address" required>

                    <input type="hidden" name="message_from" value="m">
                    <input type="text" name="contact_number" placeholder="Your Contact Number">
                    <textarea rows="8"  name="message" cols="50" placeholder="Your Message"></textarea>

                    <button class="btn btn-primary">Submit</button>

                </form>
            </div><!-- contact_form -->
        </div><!-- col -->
        <div class="col-md-3" style='overflow-x: hidden;'>
            <div class="right_career_img right_contact_img">
                <div class="right_career_img_overlay right_contact_img_overlay">

                </div><!-- career_img_overlay -->

            </div><!-- left_career_img -->
        </div><!-- col --> 
    </div>
</section>

<section>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3534.9036089914966!2d85.52285901440283!3d27.627501835604555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb08d22bb2376d%3A0x5f4077732a14fdf4!2sEverfresh%20Bakery!5e0!3m2!1sen!2snp!4v1643294722225!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>
@endsection