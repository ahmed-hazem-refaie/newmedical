@extends('layouts.website')


@section('content')


<!-- Start Bottom Header -->
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline text-center">
                        <h3>Services</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Home</li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->
<!-- Start service area -->
<div class="service-area bg-color area-padding-2 services2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>
                    {{field_content($settings,'Services Page', 'section-services-title') ?? "Professional services"}}    
   
                        
                    </h3>
                    <p>
                    {{field_content($settings,'Services Page', 'section-services-title') ?? "We help agencies to define their new business objectives and then create the road map"}}     
 
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="all-services">
                <!-- single dervices -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-icon">
                            <span class="flaticon-052-project-plan"></span>
                        </div>
                        <div class="service-inner">
                            <div class="service-content">
                                <h4>Product Design</h4>
                                <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu. independent agency, free from the internal demands.</p>
                                <a class="service-btn" href="#"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single dervices -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-icon">
                            <span class="flaticon-031-financial"></span>
                        </div>
                        <div class="service-inner">
                            <div class="service-content">
                                <h4>It management</h4>
                                <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu. independent agency, free from the internal demands.</p>
                                <a class="service-btn" href="#"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single dervices -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-icon">
                            <span class="flaticon-057-statistics"></span>
                        </div>
                        <div class="service-inner">
                            <div class="service-content">
                                <h4>Data security</h4>
                                <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu. independent agency, free from the internal demands.</p>
                                <a class="service-btn" href="#"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single dervices -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-icon">
                            <span class="flaticon-012-business"></span>
                        </div>
                        <div class="service-inner">
                            <div class="service-content">
                                <h4>It consultancy</h4>
                                <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu. independent agency, free from the internal demands.</p>
                                <a class="service-btn" href="#"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single dervices -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-icon">
                            <span class="flaticon-041-network"></span>
                        </div>
                        <div class="service-inner">
                            <div class="service-content">
                                <h4>Cloude services</h4>
                                <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu. independent agency, free from the internal demands.</p>
                                <a class="service-btn" href="#"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single dervices -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-icon">
                            <span class="flaticon-002-analysis"></span>
                        </div>
                        <div class="service-inner">
                            <div class="service-content">
                                <h4>It support helpdesk</h4>
                                <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu. independent agency, free from the internal demands.</p>
                                <a class="service-btn" href="#"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single dervices -->
            </div>
        </div>
    </div>
</div>
<!-- End service area -->
<!-- Start Tab Area -->
<div class="tab-area fix area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="tab-menu">
                    <!-- Start Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active">
                            <a href="#p-view-1" role="tab" data-toggle="tab">
                                <span class="cha-title">It maintenance</span>
                            </a>
                        </li>
                        <li>
                            <a href="#p-view-2" role="tab" data-toggle="tab">
                                <span class="cha-title">It Consultancy</span>
                            </a>
                        </li>
                        <li>
                            <a href="#p-view-3" role="tab" data-toggle="tab">
                                <span class="cha-title">Network support</span>
                            </a>
                        </li>
                        <li>
                            <a href="#p-view-4" role="tab" data-toggle="tab">
                                <span class="cha-title">It procurement</span>
                            </a>
                        </li>
                    </ul>
                    <!-- End Nav tabs -->
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="tab-content">
                    <!--Start Tab Content -->
                    <div class="tab-pane active" id="p-view-1">
                        <div class="tab-inner">
                            <div class="single-machine row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="tabe-img">
                                        <img src="{{asset('assets/img/services/s1.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="machine-text">
                                        <h3>Enterprise AI and data platform solutions</h3>
                                        <p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical. used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical</p>
                                        <ul>
                                            <li><a href="#">Innovation idea latest business tecnology</a></li>
                                            <li><a href="#">Digital content marketing online clients plateform</a></li>
                                            <li><a href="#">Safe secure services for you online email account</a></li>
                                            <li><a href="#">Innovation idea latest business tecnology</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Start Tab Content -->
                    <div class="tab-pane" id="p-view-2">
                        <div class="tab-inner">
                            <div class="single-machine row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="tabe-img">
                                        <img src="{{asset('assets/img/services/s2.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="machine-text">
                                        <h3>Design and development use latest technology</h3>
                                        <p>And in general the content of dummy text is nonsensical. used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical. Dummy text is also used to demonstrate the appearance of different typefaces and layouts</p>
                                        <ul>
                                            <li><a href="#">Innovation idea latest business tecnology</a></li>
                                            <li><a href="#">Digital content marketing online clients plateform</a></li>
                                            <li><a href="#">Safe secure services for you online email account</a></li>
                                            <li><a href="#">Innovation idea latest business tecnology</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Start Tab Content -->
                    <div class="tab-pane" id="p-view-3">
                        <div class="tab-inner">
                            <div class="single-machine row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="tabe-img">
                                        <img src="{{asset('assets/img/services/s3.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="machine-text">
                                        <h3>Innovation idea latest business tecnology</h3>
                                        <p>Used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical. text is also used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical</p>
                                        <ul>
                                            <li><a href="#">Innovation idea latest business tecnology</a></li>
                                            <li><a href="#">Digital content marketing online clients plateform</a></li>
                                            <li><a href="#">Safe secure services for you online email account</a></li>
                                            <li><a href="#">Innovation idea latest business tecnology</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Start Tab Content -->
                    <div class="tab-pane" id="p-view-4">
                        <div class="tab-inner">
                            <div class="single-machine row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="tabe-img">
                                        <img src="{{asset('assets/img/services/s4.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="machine-text">
                                        <h3>Digital content marketing online clients plateform</h3>
                                        <p>Dummy text is also used. used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensica to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical.</p>
                                        <ul>
                                            <li><a href="#">Innovation idea latest business tecnology</a></li>
                                            <li><a href="#">Digital content marketing online clients plateform</a></li>
                                            <li><a href="#">Safe secure services for you online email account</a></li>
                                            <li><a href="#">Innovation idea latest business tecnology</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Start Tab Content -->
                </div>
            </div>
        </div>
        <!-- end Row -->
    </div>
</div>
<!-- End Tab end -->

@endsection