<!DOCTYPE html>
<html lang="en">

<head>
    <title>Drishya Hotel & Restaurant</title>
<meta
  name="description"           
  content="Drishya is one of the lively place to be in kathmandu valley right now.
   As it offers good food and music at its restaurant, With the perfect homely feel hotel underneath of it. ">
    <meta charset="utf-8">
    <meta tag="Drishya is one of the lively place to be in kathmandu valley right now.
    As it offers good food and music at its restaurant, With the perfect homely feel hotel underneath of it."
   <meta name="keywords" content="Drishya is one of the lively place to be in kathmandu valley right now.
   As it offers good food and music at its restaurant, With the perfect homely feel hotel underneath of it."
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="KwlJzJeCLJBUSXYnTahL18KQjA8UFE8nNg6iGv6rkZo" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-147460903-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
gtag('config', 'UA-147460903-1');
</script>
    <title>Drishya Hotel & Restaurant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://www.dafontfree.net/embed/dW5pdmVyc2l0eS1yb21hbi1sZXQtcGxhaW4mZGF0YS8xMy91LzY0MzE1LzUwNDE2X19fLlRURg" rel="stylesheet" type="text/css"/>
    <link href="https://www.dafontfree.net/embed/dW5pdmVyc2l0eS1yb21hbi1sZXQtcGxhaW4mZGF0YS8xMy91LzY0MzE1LzUwNDE2X19fLlRURg" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Karla|Playfair+Display|Roboto&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">
    <link rel='stylesheet' href={{asset('css/hover.css')}} type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('css/mobile.css')}}"type='text/css' media='all' />
   <!--  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"> -->
   <link rel="shortcut icon" href="{{ asset('images/logo.jpeg')}}">


</head>

<body>
@include('frontend.layouts.headerIndex')
@yield('content')  

@include('frontend.layouts.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
{{-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> --}}
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/slick.js')}}" type="text/javascript" charset="utf-8"></script>

<script src="{{asset('js/script.js')}}"></script>
@stack('scripts')
<!-- <script type="text/javascript"> -->
    <script type="text/javascript">
        window.onload=function(){
            $('#portfolio-items').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                infinite: true,
                dots:true,
                arrows: true,
                prevArrow: "<img class='a-left control-c prev slick-prev' src='images/angle-left.png'>",    //you need to add image to your folder and give a reference here for respective image.
                nextArrow: "<img class='a-right control-c next slick-next' src='images/right.png'>"
            });
            $('#testimonial-items').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            });
        };
    </script>
</body>

</html>
