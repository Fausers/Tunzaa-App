<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="LuxtechTZ" />
    <title>Azam Pesa | Home</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/azam_ic.png" />
    <!-- Font Awesome icons (free version)-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet"
          type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
          type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css?v.1" rel="stylesheet" />
    <link rel="stylesheet" href="./new/styles.css?v.7" />
    <style>
        .carousel-caption {
            position: absolute;
            top: 200px;
        }
        .carousel-inner{
            border-radius: 30px;
        }
    </style>
</head>

<body id="page-top">


<section style="
        background-image: url('./new/img/Background Top.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        margin-top: 0px;
        overflow: hidden;
      ">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg" id="mainNav">

        <div class="container">
            <a class="navbar-brand js-scroll-trigger mr-5" href="#page-top">
                <img src="/logo.png" style="max-width: 150px;" alt="">
            </a>
            <button
                class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded"
                type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">

                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item nav-item-active mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{url('/')}}/about">About</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{url('/')}}/our_tariffs">Tariffs</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#payments">Payments</a>
                    </li>
                </ul>
                <a class="nav-link contact-item px-0 px-lg-3 rounded js-scroll-trigger" href="{{url('/')}}/contact" style="color: white;">Contact Us</a>
            </div>
        </div>
    </nav>
    <div class="container">

        <div class="card carousel-holder">
            <div class="card-body">
                <div class="row">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                            @foreach($sliders as $slider)
                            <div class="carousel-item  @if($loop->index == 0)active @endif" style="padding-left: 0px">

                                <img src="{{$slider->image_url}}" style="padding-left: 0px;" class="d-block w-100" alt="{{$slider->title}}" />

                                <div class="carousel-caption text-left d-none d-md-block">
                                    <span class="badge badge-lg" style="background-color: #00a6bc;padding: 10px 12px 7px 12px; font-size: 25pt; margin-bottom: 6px; height: 55px;">
                                        <p style="font-weight: 900; color: #00a6bc"><i>*150*08#</i></p>
                                    </span>
                                    <h2>
                                        @php $title = explode(',',$slider->title) @endphp
                                        {{$title[0]}}
                                        @if(isset($title[1]))
                                        <span class="blue">  {{$title[1]}}
                                        </span>
                                        @endif
                                    </h2>
                                    <h4 class="text-dark">
                                        {{$slider->small_title}}
                                    </h4>

                                    <p class="text-dark">
                                        {{$slider->desc}}
                                    </p>

                                    <div class="d-flex justify-content-start">
                                        <div class="mr-4 mt-1">
                                            <a target="" href="{{$slider->button_url}}" class="btn download-btn">{{$slider->button}}</a>
                                        </div>

                                        <div class="flex justify-content-around">
                                            <img src="./new/img/ggoleplay.png" style="max-width: 150px;" alt="">
                                            <img src="./new/img/apppstore.png" style="max-width: 120px;" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6" style="padding-top: 100px; padding-bottom: 100px">
                <h2 class="text-white">ONE FOR <span class="yellow">ALL</span></h2>
                <p class="text text-white">
                    {{$front->app_desc}}
                </p>
                <br />
                <a href="{{$front->app_button_url}}" class="btn tariff-btn">{{$front->app_button}}</a>
            </div>
            <div class="col-md-6">
                <img src="{{$front->app_image}}" style="width: 390px; position: absolute; top: 50px; right: 0;" />
            </div>
        </div>
    </div>
</section>

<!-- Services Section-->
<section class="text-white mb-0" id="services">
    <div class="container" style="padding-top: 100px; padding-bottom: 100px">
        <div class="text-center mb-4">
            <h2>
                <span class="blue mt-3">GET MORE,</span>
                <span class="yellow">PAY LESS</span>
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card services-card mb-4">
                    <div class="card-body">
                        <img src="./new/svg/like.svg" alt="icon" style="max-width: 80px" />
                        <br />
                        <br />
                        <h4 class="text-dark">{{$front->service1_title}}</h4>
                        <p class="text blue">
                            {{$front->service1_desc}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card services-card mb-4">
                    <div class="card-body">
                        <img src="./new/svg/smartphone.svg" alt="icon" style="max-width: 80px" />
                        <br />
                        <br />
                        <h4 class="text-dark">{{$front->service2_title}}</h4>
                        <p class="text blue">
                            {{$front->service2_desc}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card services-card mb-4">
                    <div class="card-body">
                        <img src="./new/svg/24-hours-support.svg" alt="icon" style="max-width: 80px" />
                        <br />
                        <br />
                        <h4 class="text-dark">{{$front->service3_title}}</h4>
                        <p class="text blue">
                            {{$front->service3_desc}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card services-card mb-4">
                    <div class="card-body">
                        <img src="./new/svg/smartphone.svg" alt="icon" style="max-width: 80px" />
                        <br />
                        <br />
                        <h4 class="text-dark">{{$front->service4_title}}</h4>
                        <p class="text blue">
                            {{$front->service4_desc}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="text-white mb-0" style="background-color: #ffcb08">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-6" style="background-image: url({{url('/')}}/{{$front->bills_image}}); background-size: cover;">
                <!-- <img src="./new/img/Mdada.png" style="width: 100%" alt="" /> -->
            </div>
            <div class="col-lg-4" style="padding: 50px 40px 120px 40px;">
                <div class="container">
                    <h2>
                        <span class="blue"> YOUR BILLS </span> <br />
                        IN ONE PLACE
                    </h2>
                    <p class="text">
                        {!! $front->bills_text !!}
                    </p>

                    <img src="./new/img/icons-black.png" class="azam-icons mb-4" style="max-width: 400px">
                        <br>
                    <button class="btn btn-md bills-btn">Learn More</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tariff Section-->
<section class="text-white mb-0" id="tariffs">
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="padding-top: 120px; padding-bottom: 120px">
                <h2><span class="yellow">OUR</span> TARIFFS</h2>
                <p>
                    {{$front->tariffs_text}}
                </p>
                <br />

                <a href="/our_tariffs" class="btn tariff-btn shadow-lg">View Tariffs</a>

            </div>
            <div class="col-md-6">
                <img src="{{url('/')}}/{{$front->tariffs_image}}" class="hand-image" />
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-3 mt-3">
                <div class="d-flex justify-content-around">
                    <p class="text blue">Azam Pesa &copy; 2021</p>
                    <p class="text blue">Terms & Conditions</p>
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
</footer>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
<div class="scroll-to-top d-lg-none position-fixed">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i
            class="fa fa-chevron-up"></i></a>
</div>

<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="assets/mail/jqBootstrapValidation.js"></script>
<script src="assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>

</html>
