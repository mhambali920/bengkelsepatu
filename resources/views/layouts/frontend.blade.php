<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8" />
  <title>IKKE Konveksi - Produsen Sepatu Bayi dan Balita</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />

  {{--
  <link rel="manifest" href="site.webmanifest" /> --}}
  <link rel="apple-touch-icon" href="{{ url('/frontend/images/content/favicon.png') }}" />

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="icon" href="{{ url('/frontend/images/content/favicon.png') }}" />

  <link rel="stylesheet" href="{{ url('/frontend/owlcarousel/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ url('/frontend/owlcarousel/owl.theme.default.min.css') }}">

  <meta name="theme-color" content="#000" />
  <link rel="icon" href="favicon.ico" />
  <script src="{{ url('/frontend/js/jquery-3.6.3.min.js') }}"></script>
  <script src="{{ url('/frontend/js/owl.carousel.min.js') }}"></script>
  <style>
    #carousel1 .owl-item {
      width: 300px;
      height: 386px;
    }

    .owl-carousel .owl-nav button {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 50%;
      color: #999;
      font-size: 18px;
      height: 50px;
      margin: 0 10px;
      outline: none;
      width: 50px;
    }

    .owl-carousel .owl-nav button:hover {
      background-color: #ddd;
      border-color: #999;
      color: #333;
    }

    .owl-carousel .owl-nav button span {
      font-size: 18px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .owl-carousel .owl-nav button.owl-prev {
      position: absolute;
      top: 50%;
      left: 0;
      transform: translate(0, -50%);
    }

    .owl-carousel .owl-nav button.owl-next {
      position: absolute;
      top: 50%;
      right: 0;
      transform: translate(0, -50%);
    }
  </style>
</head>

<body>
  <!-- Add your site or application content here -->

  @include('components.frontend.navbar')

  @yield('content')

  @include('components.frontend.footer')

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () {
        ga.q.push(arguments);
      };
      ga.q = [];
      ga.l = +new Date();
      ga("create", "UA-XXXXX-Y", "auto");
      ga("set", "anonymizeIp", true);
      ga("set", "transport", "beacon");
      ga("send", "pageview");
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>

  <script src="{{ url('/frontend/js/app.js') }}"></script>


  <script>
    $(document).ready(function(){
      $('.owl-carousel').owlCarousel({
    loop:true,
    autoplay: true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})
    });
  </script>
</body>

</html>