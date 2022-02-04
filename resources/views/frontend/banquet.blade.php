@extends('frontend.layouts.master')
@section('content')
<section class="about_top_banner">

    <div class="container">
        <div class="banner_abt">
            <h1>Banquet</h1>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" style="height:400px;">
                    <ul class="carousel-indicators">
                        @foreach ($sliders as $key => $slides)
                            <li data-target="#demo" data-slide-to="{{ $key }}"
                                class=" @if ($key == 0) active @endif"></li>
                        @endforeach
                    </ul>
                    @foreach ($sliders as $key => $slides)
                        <div class="carousel-item @if ($key == 0) active @endif">
                            <img class="d-block w-100" src="{{ $slides->images[0]->file_path }}" alt="First slide" style="height:399px;">
                        </div>
                    @endforeach

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
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

            </p>
        </div><!-- banner_abt -->
    </div><!-- container -->
</section><!-- about_top_banner -->

<section class="career_blk contact_blk" style =" max-width: 1000px;
margin: auto;">
<div class="row no-pad">
<div class="col-md-6">
    <div class="contact_form">
        <h1 style="color:#0e334a;">If you have any inquiries then please feel free to contact us.</h1>
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
</div>
</section>

@endsection
