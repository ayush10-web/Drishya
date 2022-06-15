@extends('frontend.layouts.master')
@section('content')
@include('backend.layouts.alerts')

<section class="about_top_banner" style="padding-top:0px !important;">

    <div class="container">
        <div class="">
            <h1 style = "font-family: University Roman LET;">Banquet</h1>   
        </div><!-- banner_abt -->
        <p>
            {{-- {!! $about->description !!} --}}
            Our banquet is best for the events, as the food and the venue we offer is of top notch in the town. Our banquet has the capacity of. We offer events like wedding, bartabandha, birthday and so on. Drishya makes the event very much convenient as it offers such as catering, interior decoration, entertainment and many more other facilities upon request.
  
            {{-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. --}}
            At Drishya Hotel, we have two halls to suit your needs for conferences, seminars, parties, meetings, weddings, anniversaries, and other events.
              </p>
    </div><!-- container -->
</section><!-- about_top_banner -->

<section style="margin-bottom: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="row overflow-auto" style="height: 680px;">
                    <div class="col-sm-4" style="padding-left:5px;padding-right:5px;">
                        @for ($i = 0; $i < count($sliders); $i=$i+3)
                            <a data-toggle="modal" data-target="#sliderImagePreviewModal{{$sliders[$i]->images[0]->id}}">
                                <img class="d-block w-100" src="{{ $sliders[$i]->images[0]->file_path }}" alt="First slide" style="width:100%;margin-top:10px;">
                            </a>
                            @include('frontend.sliderImagePreviewModal',['images'=>$sliders[$i]])

                        @endfor
                    </div>
                    <div class="col-sm-4" style="padding-left:5px;padding-right:5px;">
                       @for ($i = 1; $i < count($sliders); $i=$i+3)
                            <a data-toggle="modal" data-target="#sliderImagePreviewModal{{$sliders[$i]->images[0]->id}}">
                                <img class="d-block w-100" src="{{ $sliders[$i]->images[0]->file_path }}" alt="First slide" style="width:100%;margin-top:10px;">
                            </a>
                            @include('frontend.sliderImagePreviewModal',['images'=>$sliders[$i]])

                        @endfor
                    </div>
                    <div class="col-sm-4" style="padding-left:5px;padding-right:5px;">
                        @for ($i = 2; $i < count($sliders); $i=$i+3)
                            <a data-toggle="modal" data-target="#sliderImagePreviewModal{{$sliders[$i]->images[0]->id}}">
                                <img class="d-block w-100" src="{{ $sliders[$i]->images[0]->file_path }}" alt="First slide" style="width:100%;margin-top:10px;">
                            </a>
                            @include('frontend.sliderImagePreviewModal',['images'=>$sliders[$i]])

                        @endfor
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact_form" style="background-color: #0e334a; padding:20px;">
                    <h1 style="color:white;">If you have any inquiries then please feel free to contact us.</h1>
                    <form action="{{route('contact.add')}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="name" placeholder="Your Name" required>
            
                        <input type="email" name="email" placeholder="Your E-mail Address" required>
                        <input type="hidden" name="message_from" value="b">
            
            
                        <input type="text" name="contact_number" placeholder="Your Contact Number">
                        <textarea rows="8"  name="message" cols="50" placeholder="Your Message"></textarea>
                        
                        <div class="captcha">
                            <span>{!! captcha_img() !!}</span>
                            <button type="button" class="btn btn-danger" class="reload" id="reload">
                            ↻
                            </button>
                        </div>
                        <button class="btn btn-primary">Submit</button>
            
                    </form>
                </div><!-- contact_form -->
            </div>
        </div>
        
    </div>
</section>
@endsection
