<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>Welcome | Azam Pesa</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="author" content="Felix Mgeni">

  <!-- Favicon -->
{{--  <link rel="shortcut icon" href="{{url('/')}}/favicon.ico">--}}
    <link rel="icon" type="image/x-icon" href="/azam_ic.png" />
  <!-- Google Fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="{{url('/')}}/assets/vendor/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/vendor/bootstrap/offcanvas.css">
  <!-- CSS Global Icons -->
  <link rel="stylesheet" href="{{url('/')}}/assets/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/vendor/icon-line/css/simple-line-icons.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/vendor/icon-etlinefont/style.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/vendor/icon-hs/style.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/vendor/dzsparallaxer/dzsparallaxer.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/vendor/animate.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/vendor/hamburgers/hamburgers.min.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/vendor/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/vendor/fancybox/jquery.fancybox.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="{{url('/')}}/assets/css/unify-core.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/css/unify-components.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/css/unify-globals.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="{{url('/')}}/assets/css/custom.css">

    <!-- Font Awesome icons (free version)-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet"
          type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
          type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="./new/styles.css?v.7" />

</head>

<body>

    <main>
    <!-- Header -->
        @include('includes.header')
    <!-- End Header -->

    @yield('content')

    <!-- Footer -->
    <div id="contacts-section" class=" g-color-white-opacity-0_8">
        <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-3 mt-3">
                <div class="d-flex justify-content-around">
                    <p class="text blue">Azam Pesa &copy; 2021</p>
                    <a href="/terms" class="text blue">Terms & Conditions</a>
                </div>
            </div>

            <div class="col-lg-4 text-center mb-3 mt-3">
                <div class="d-flex justify-content-center">
                    <p class="text blue">Powered by &nbsp;| &nbsp; </p> <img src="./new/img/azampaylogo.png" style="max-height: 40px; margin-top: -8px">
                </div>
            </div>

            <div class="col-lg-4">
                <div class="d-flex justify-content-around">
                    <img src="./new/img/ggoleplay.png" style="max-height: 60px;" alt="">
                    <img src="./new/img/apppstore.png" style="max-height: 43px;margin-top: 10px;" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End Footer -->

    <a class="js-go-to u-go-to-v1" href="#!" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
      <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
  </main>

  <!-- JS Global Compulsory -->
  <script src="{{url('/')}}/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{url('/')}}/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
  <script src="{{url('/')}}/assets/vendor/popper.min.js"></script>
  <script src="{{url('/')}}/assets/vendor/bootstrap/bootstrap.min.js"></script>

  <script src="{{url('/')}}/assets/vendor/bootstrap/offcanvas.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{url('/')}}/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="{{url('/')}}/assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
  <script src="{{url('/')}}/assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
  <script src="{{url('/')}}/assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
  <script src="{{url('/')}}/assets/vendor/masonry/dist/masonry.pkgd.min.js"></script>
  <script src="{{url('/')}}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="{{url('/')}}/assets/vendor/slick-carousel/slick/slick.js"></script>
  <script src="{{url('/')}}/assets/vendor/fancybox/jquery.fancybox.min.js"></script>

  <!-- JS Unify -->
  <script src="{{url('/')}}/assets/js/hs.core.js"></script>

  <script src="{{url('/')}}/assets/js/components/hs.header.js"></script>
  <script src="{{url('/')}}/assets/js/helpers/hs.hamburgers.js"></script>

  <script src="{{url('/')}}/assets/js/components/hs.popup.js"></script>
  <script src="{{url('/')}}/assets/js/components/hs.carousel.js"></script>

  <script src="{{url('/')}}/assets/js/components/hs.go-to.js"></script>

  <!-- JS Custom -->
  <script src="{{url('/')}}/assets/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');

      // initialization of carousel
      $.HSCore.components.HSCarousel.init('.js-carousel');

      // initialization of masonry
      $('.masonry-grid').imagesLoaded().then(function () {
        $('.masonry-grid').masonry({
          columnWidth: '.masonry-grid-sizer',
          itemSelector: '.masonry-grid-item',
          percentPosition: true
        });
      });

      // initialization of popups
      $.HSCore.components.HSPopup.init('.js-fancybox');
    });

    $(window).on('load', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#js-header'));
      $.HSCore.helpers.HSHamburgers.init('.hamburger');

      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991
      });
    });
  </script>
</body>


</html>
