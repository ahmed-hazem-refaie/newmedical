<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport" />
    <meta content="ie=edge" http-equiv="X-UA-Compatible" />
    <title>Multicare</title>

    <!-- Font Awesome -->
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" rel="stylesheet" />

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
    <link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet">



    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    @stack('header')
</head>

<body>
    <div id="menu-container">
        <div id="menu-wrapper">
            <div id="hamburger-menu"><span></span><span></span><span></span></div>
            <!-- hamburger-menu -->
        </div>
        <!-- menu-wrapper -->
        <ul class="menu-list accordion" style="border-radius: 0 !important;">
            <li class="toggle accordion-toggle2">
                <a class="menu-link" href="{{route('website.home')}}"> Home</a>
            </li>
            <li id="nav1" class="toggle accordion-toggle">
                <span class="icon-plus"></span>
                <a class="menu-link" >Products</a>

            </li>
            <!-- accordion-toggle -->
            <ul class="menu-submenu accordion-content">
                



   
                
         

              
                
                @foreach (menu_header_category() as $category)

                
                
                <li class="my-sub"><a class="head " href="#"> {{$category->name}}   <span class="icon-plus text-primary"></span></a>   </li>
                    <ul class="sub2">


                        @foreach ($category->product as $product)

                  
                        <li>
                            <a href="{{route('website.single_product', [$product->id, str_replace(" ", "-", $category->name ) ])}}">
                                {{$product->name}}
                            </a>
     
                         </li>

                        
                        @endforeach

                    </ul>




                        
                @endforeach
             
                
            </ul>
            <!-- menu-submenu accordon-content-->
            <li id="nav2" class="toggle accordion-toggle">
                <span class="icon-plus"></span>
                <a class="menu-link" href="#">Media</a>
            </li>
            <!-- accordion-toggle -->
            <ul class="menu-submenu accordion-content">
                <li><a class="head" href="#">Submenu1</a></li>
                <li><a class="head" href="#">Submenu2</a></li>
            </ul>
            <!-- menu-submenu accordon-content-->
            <li id="nav3" class="toggle accordion-toggle">
                <span class="icon-plus"></span>
                <a class="menu-link" href="#">Health topics</a>
            </li>
            <!-- accordion-toggle -->
            <ul class="menu-submenu accordion-content">
                <li><a class="head" href="#">Submenu1</a></li>
                <li><a class="head" href="#">Submenu2</a></li>
                <li><a class="head" href="#">Submenu3</a></li>
                <li><a class="head" href="#">Submenu4</a></li>
            </ul>
            <!-- menu-submenu accordon-content-->
            <li class="toggle accordion-toggle2">
                <a class="menu-link" href="#">Career</a>
            </li>


        </ul>
        <!-- menu-list accordion-->
    </div>

    <nav class="navbar navbar1 navbar-expand-md navbar-light bg-white py-0 ">
        <div class="w-100" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="linear" data-aos-delay="1500">
            <div class="w-100 md-block d-md-none d-flex justify-content-between align-items-center align-content-center">
                <div>
                    <button aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbar" data-toggle="collapse" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div>
                    <span class="social">
                        <a href="{{field_content($settings,'footer section', 'contact-facebook')}}">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </span>
                    <!-- <span class="social">
                        <a href="{{field_content($settings,'footer section', 'contact-twitter')}}">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </span> -->
                    <span class="social">
                        <a href="{{field_content($settings,'footer section', 'contact-instgram')}}">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </span>
                    <span class="social linked">
                        <a href="{{field_content($settings,'footer section', 'contact-linkedin-in')}}">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </span>
                </div>
                <div>
                    <img src="{{asset('assets/images/logo.png')}}" class=" logo logo-mobile mx-3" />
                </div>
            </div>

            <div class="w-100 collapse navbar-collapse justify-content-between" id="navbar">
                <div>
                    <ul class="navbar-nav ml-auto px-0">

                        <li class="nav-item md-block d-md-none">
                            <a class="nav-link" href="{{route('website.home')}}"> Home</a>
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
                            <a class="nav-link  text-white" href="{{route('website.contact')}}">
                                Contact us
                            </a>
                        </li>
                        <li class="nav-item blue x mx-0">
                            <a class="nav-link   text-white" href="{{route('website.contact')}}">
                                Locations
                            </a>
                        </li>

                        <span class="social d-none d-md-inline-block">
                            <a href="{{field_content($settings,'footer section', 'contact-facebook')}}">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </span>
                        <!-- <span class="social d-none d-md-inline-block">
                            <a href="{{field_content($settings,'footer section', 'contact-twitter')}}">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </span> -->


                        <span class="social d-none d-md-inline-block">
                            <a href="{{field_content($settings,'footer section', 'contact-instgram')}}">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </span>

                        <span class="social d-none d-md-inline-block">
                            <a href="{{field_content($settings,'footer section', 'contact-linkedin-in')}}">
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
                            <a class="nav-link font-weight-bold font-g home_2" href="{{route('website.home')}}">
                                Home
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link font-weight-bold font-g about-us" href="{{route('website.about')}}">
                                About Multicare
                            </a>
                        </li>



                        <li class="nav-item parent">
                            <a class="nav-link font-weight-bold font-g" href="{{route('website.category')}}">
                                {{field_content($settings, 'Home Page' ,'menue-category-name') ?? 'MainCategory'}}
                            </a>
                            <div class="pos child">
                                <div class="row py-0">
                                    <div class="col-lg-3 d-md-none d-lg-block  col-md-4">
                                        <div class="img-head">
                                            <img src="{{field_content($settings, 'Home Page' ,'menue-category-image') ?? asset('assets/images/s2.png')}}" class="w-100 h-100" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 bg-b col-md-4">
                                        <div style="margin: 54px 0 0 0; overflow-y:auto;  overflow-x:hidden; height:60vh ">


                                            @foreach (menu_header_category() as $category)

                                            <div class="child2 por  d-flex  align-items-center  align-content-center ">
                                                <div class="m-icon">
                                                    <img src="{{getImg($category->logo)}}" alt="icon">
                                                </div>
                                                <div class="text text-white">
                                                    {{$category->name}}
                                                </div>
                                                <i class="fas fa-caret-down d mx-1"></i>

                                                <i class="fas fa-caret-right r mx-1"></i>

                                                <div class="child3 pos">


                                                    @foreach ($category->product as $product)

                                                    <a href="{{route('website.single_product', [$product->id, str_replace(" ", "-", $category->name ) ])}}">
                                                        <div class="text-uppercase text-white">

                                                            {{$product->name}}

                                                        </div>
                                                    </a>
                                                    <hr>
                                                    @endforeach





                                                </div>

                                            </div>
                                            @endforeach

                 
                                            

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8 bg-b target-link">


                            </div>
                </div>
            </div>
            </li>

     
            
            <li class="nav-item">
                <a class="nav-link font-weight-bold font-g" href="{{route('website.carrers')}}">
                    Career
                </a>
            </li>
            
            <li class="nav-item ">
                <a class="nav-link font-weight-bold font-g contact-us" href="{{route('website.contact')}}">
                    Contact US
                </a>
            </li>
    </ul>
    </div>
    <div class="py-3">

    </div>
    </div>
    </div>
    </div>
    <section class="loader">
        <div id="container" class="d-flex align-content-center align-items-center">
            <span id="text1"></span>
            <span id="text2"></span>
        </div>

        <!-- The SVG filter used to create the merging effect -->
        <svg id="filters">
            <defs>
                <filter id="threshold">
                    <!-- Basically just a threshold effect - pixels with a high enough opacity are set to full opacity, and all other pixels are set to completely transparent. -->
                    <feColorMatrix in="SourceGraphic" type="matrix" values="1 0 0 0 0
                                            0 1 0 0 0
                                            0 0 1 0 0
                                            0 0 0 255 -140" />
                </filter>
            </defs>
        </svg>
    </section>

    @yield('content')


    @include('includes.map')

    <!-- Jquery -->
    <script src="{{asset('assets/js/jquery-3.1.0.min.js')}}"></script>

    <!-- Popper + Bootstrap -->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>

    <script>
        new WOW().init();
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <script>
        $('document').ready(function() {

            // Popup Video JS
            $('.popup-youtube, .popup-vimeo').magnificPopup({
                disableOn: 300,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false,
            });

            

        })
    </script>


    @stack('footer')

</body>

</html>