<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    name="viewport" />
  <meta content="ie=edge" http-equiv="X-UA-Compatible" />
  <title>Multicare</title>

  <!-- Font Awesome -->
  <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
    integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" rel="stylesheet" />

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
  <link href="{{asset('favicon.ico')}}" rel="icon" type="image/ico" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

</head>

<body>
<nav class="navbar navbar1 navbar-expand-md navbar-light bg-white py-0 ">
    <div class="w-100" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="linear" data-aos-delay="1500">
        <div class="w-100 md-block d-md-none d-flex justify-content-between align-items-center align-content-center">
            <div>
                <button aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler" data-target="#navbar" data-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div>
                <span class="social">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </span>
                <span class="social">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </span>
                <span class="social">
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </span>
                <span class="social linked">
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </span>
            </div>
            <div>
                <img src="./assets/images/logo.png" class=" logo logo-mobile mx-3" />
            </div>
        </div>

        <div class="w-100 collapse navbar-collapse justify-content-between" id="navbar">
            <div>
                <ul class="navbar-nav ml-auto px-0">

                    <li class="nav-item md-block d-md-none">
                        <a class="nav-link" href="#"> Home</a>
                    </li>
                    <li class="nav-item md-block d-md-none">
                        <a class="nav-link" href="#"> Media</a>
                    </li>

                    <li class="nav-item md-block d-md-none">
                        <a class="nav-link" href="#"> Career</a>
                    </li>
                    <li class="nav-item md-block d-md-none">
                        <a class="nav-link" href="#"> Health Topics</a>
                    </li>

                    <li class="nav-item x brown">
                        <a class="nav-link text-white" href="#">
                            Our bussiness
                        </a>
                    </li>

                    <li class="nav-item md-block d-md-none">
                        <a class="nav-link " href="#"> This is Multicare</a>
                    </li>
                    <li class="nav-item red x mx-0">
                        <a class="nav-link  text-white" href="#">
                            Contact us
                        </a>
                    </li>
                    <li class="nav-item blue x mx-0">
                        <a class="nav-link   text-white" href="#">
                            Locations
                        </a>
                    </li>

                    <span class="social d-none d-md-inline-block">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </span>
                    <span class="social d-none d-md-inline-block">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </span>
                    <span class="social d-none d-md-inline-block">
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </span>
                    <span class="social d-none d-md-inline-block">
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </span>





                </ul>
            </div>
            <div class="d-none d-md-block">

            </div>

        </div>
    </div>
</nav>
<div class="navbar2 d-none d-md-block por">

    <div class="" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="linear" data-aos-delay="1500">
        <div class="d-flex  justify-content-between">

            <div class=" mx-5">
                <a href="{{route('website.home')}}">

                    <img src="{{asset('assets/images/logo.png')}}" class="img-fluid logo m-log" />
                    <span class="store-name mx-2 font-weight-bold"></span>

                </a>
            </div>
            <div class=" mx-5">
                <ul class="d-flex px-0 mb-0 my-m">

                    <li class="nav-item">
                        <a class="nav-link font-weight-bold font-g active" href="{{route('website.home')}}">
                            Home
                        </a>
                    </li>

                    <li class="nav-item parent">
                        <a class="nav-link font-weight-bold font-g" href="#">
                            This is Multicare
                        </a>
                        <div class="pos child">
                            <div class="row py-0">
                                <div class="col-lg-4">
                                    <div class="img-head">
                                        <img src="./assets/images/s2.png" class="w-100 h-100" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-2 bg-b">
                                    <div>
                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon5.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Gastroenterology
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon3.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Nephrology
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon2.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Neuropsychiatry
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon4.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Neuropsychiatry
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon5.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Gastroenterology
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon3.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Nephrology
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon2.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Neuropsychiatry
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon4.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Neuropsychiatry
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-7 bg-b">


                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item parent">
                        <a class="nav-link font-weight-bold font-g" href="#">
                            Media

                        </a>
                        <div class="pos child">
                            <div class="row py-0">
                                <div class="col-lg-4">
                                    <div class="img-head">
                                        <img src="./assets/images/drop.png" class="w-100 h-100" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-2 bg-b">
                                    <div>
                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon5.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Gastroenterology
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon3.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Nephrology
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon2.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Neuropsychiatry
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon4.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Neuropsychiatry
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon5.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Gastroenterology
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon3.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Nephrology
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon2.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Neuropsychiatry
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon4.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Neuropsychiatry
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-7 bg-b">


                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item parent">
                        <a class="nav-link font-weight-bold font-g" href="#">
                            Health Topics
                        </a>
                        <div class="pos child">
                            <div class="row py-0">
                                <div class="col-lg-4">
                                    <div class="img-head">
                                        <img src="./assets/images/header1.png" class="w-100 h-100" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-2 bg-b">
                                    <div>
                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon5.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Gastroenterology
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon3.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Nephrology
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon2.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Neuropsychiatry
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon4.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Neuropsychiatry
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon5.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Gastroenterology
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon3.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Nephrology
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon2.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Neuropsychiatry
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                        <div class="child2 por  d-flex  align-items-center  align-content-center">
                                            <div class="m-icon">
                                                <img src="./assets/images/icon4.png" alt="icon">
                                            </div>
                                            <div class="text text-white">
                                                Neuropsychiatry
                                            </div>
                                            <i class="fas fa-caret-down d mx-1"></i>

                                            <i class="fas fa-caret-right r mx-1"></i>

                                            <div class="child3 pos">
                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>

                                                <div class="text-uppercase">
                                                    product name-1
                                                </div>
                                                <hr>


                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-7 bg-b">


                                </div>
                            </div>
                        </div>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold font-g" href="#">
                            Career
                        </a>
                    </li>

                </ul>
            </div>
            <div class="py-3">

            </div>
        </div>
    </div>
</div>
<div class="preloader">
        <div class="bar bar1"></div>
        <div class="bar bar2"></div>
        <div class="bar bar3"></div>
        <div class="bar bar4"></div>
        <div class="bar bar5"></div>
        <div class="bar bar6"></div>
        <div class="bar bar7"></div>
        <div class="bar bar8"></div>
</div>

@yield('content')


@include('includes.map')

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>

<!-- Popper + Bootstrap -->

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
    crossorigin="anonymous"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script>
new WOW().init();
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
</script>

</body>

</html>