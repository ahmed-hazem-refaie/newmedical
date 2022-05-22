<div id="preloader"></div>
<header class="header-one">
    <!-- Start top bar -->
    <div class="topbar-area fix hidden-xs">
        <div class="container">
            <div class="row">
                <div class=" col-md-9 col-sm-9">
                    <div class="topbar-left">
                        <ul>
                            <li><a href="#">
                                    <i class="fa fa-envelope"></i>


                                    {{field_content($settings,'Home Page', 'header-email') ?? "info@randerc3.com"}}

                                </a></li>
                            <li><a href="#"><i class="fa fa-phone-square"></i>

                                    {{field_content($settings,'Home Page', 'header-phone') ?? "+3234-7665545"}}

                                </a></li>
                            <li><a href="#"><i class="fa fa-clock-o"></i>



                                    {{field_content($settings,'Home Page', 'header-time') ?? "Mon - Fri: 10:00 - 18:00"}}

                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="top-social">
                        <ul>
                            <li><a href="{{field_content($settings,'Home Page', 'header-social')}}"><i class="fa fa-skype"></i></a></li>
                            <li><a href="{{field_content($settings,'Home Page', 'header-twitter')}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{field_content($settings,'Home Page', 'header-facebook')}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{field_content($settings,'Home Page', 'header-google')}}"><i class="fa fa-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End top bar -->
    <!-- header-area start -->
    <div id="sticker" class="header-area header-area-3 hidden-xs">
        <div class="container">
            <div class="row">
                <!-- logo start -->
                <div class="col-md-3 col-sm-3">
                    <div class="logo">
                        <!-- Brand -->
                        <a class="navbar-brand page-scroll white-logo" href="/">
                            <img src="{{asset('assets/logo/first-page-logo-white.png')}}" style="width: 167px;" alt="">
                        </a>
                        <a class="navbar-brand page-scroll black-logo" href="/">
                            <img src="{{asset('assets/logo/first-page-logo-black.png')}}" style="width: 167px;" alt="">
                        </a>

                        <li class="lang">
                            <ul>
                                {{!$lang=LaravelLocalization::getCurrentLocale()}}
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li class="{{ $localeCode == $lang ? 'hidden' : '' }}">

                                    <a class="redirection" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $localeCode }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                    </div>
                    <!-- logo end -->
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="header-right-link">
                        <!-- search option start -->
                        <div class="search-inner">
                            <form action="#">
                                <div class="search-option">
                                    <input type="text" placeholder="Search...">
                                    <button class="button" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                                <a class="main-search" href="#"><i class="fa fa-search"></i></a>
                            </form>
                        </div>
                        <a class="s-menu" href="login.html">It Consultant</a>
                    </div>
                    <!-- mainmenu start -->
                    <nav class="navbar navbar-default">
                        <div class="collapse navbar-collapse" id="navbar-example">
                            <div class="main-menu">
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                        <a href="{{route('website.home')}}">Home</a>
                                    </li>

                                    <li>
                                        <a class="pages" href="{{route('website.services')}}">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Service</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a class="pages" href="{{route('website.blogs')}}">Blogs</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Blog</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('website.contact')}}">Contacts</a></li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- mainmenu end -->
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <div class="logo">
                            <a href="/"><img src="{{asset('assets/img/logo/logo.png')}}" alt="" /></a>
                        </div>
                        <nav id="dropdown">
                            <ul>
                                <li>
                                    <a href="{{route('website.home')}}">Home</a>
                                </li>

                                <li>
                                    <a class="pages" href="{{route('website.services')}}">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Service</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a class="pages" href="{{route('website.blogs')}}">Blogs</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Blog</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{route('website.contact')}}">contacts</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->
</header>
<!-- header end -->