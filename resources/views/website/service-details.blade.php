@extends('layouts.website')


@section('content')

        <!-- Start Bottom Header -->
        <div class="page-area" style="background: url({{field_content($settings,'service-details', 'header-image_'.app()->getLocale()) ?? ""}})">
            <div class="breadcumb-overlay" ></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>
                                    {{--  --}}
                                    {{field_content($settings,'service-details', 'title_'.app()->getLocale()) ?? ""}}
                                </h3>
                            </div>
                            <ul>
                                <li class="home-bread">
                                {{__('website.home')}}
                                </li>
                                <li>
                                {{__('website.service details')}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
        <!-- End services Area -->
        <div class="single-services-page area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="page-head-left">
                           <!-- strat single area -->
                            <div class="single-page-head">
                                <div class="left-menu">
                                    <ul>
                                        @foreach ($services as $one)
                                        <li class="{{ $loop->first?'active':'' }}"><a href="{{ route('website.service',[$one->id,$one->name_en]) }}"> {{ object_get( $one,'name_'.app()->getLocale()) }}</a></li>
                                        @endforeach
                         
                                    </ul>
                                </div>
                            </div>
                            <!-- strat single area -->
                            @if ($service->pdf)
                                
                            <div class="single-page-head">
                                <div class="download-btn">
                                    <div class="about-btn">
                                        <a download  href="{{ getImg($service->pdf) }}" class="down-btn">Download Brochure <i class="fa fa-file-pdf-o"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <!-- strat single area -->
                            {{-- <div class="single-page-head">
                                <div class="clients-testi">
                                    <div class="single-review text-center">
                                        <div class="review-img ">
                                            <img src="{{asset('assets/img/services/r1.jpg')}}" alt="">
                                        </div>
                                        <div class="review-text">
                                            <p>selection consists fully of lower-cased or capital letters text maintains the amount of lines. When replacing a selection.</p>
                                            <h4>Daniyel kreg</h4>
                                            <span class="guest-rev">Clients - <a href="#">Software</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- end single area -->
                        </div>
                    </div>
                    <!-- End left sidebar -->
                    <!-- Start service page -->
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        {{-- <div class="row">
                            <!-- single-well start-->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-well mar-well">
                                    <a href="#">
                                        <h3>It Consultancy services</h3>
                                    </a>
                                    <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-page mar-well">
                                    <div class="page-img elec-page">
                                        <img src="{{asset('assets/img/services/s1.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- End single page -->
                        </div>
                        <!-- end Row -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-well mar-well">
                                    <a href="#">
                                        <h4>What kind of business you have could investment</h4>
                                    </a>
                                    <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.</p>
                                </div>
                            </div>
                            <!-- End single page -->
                        </div>
                        <!-- end Row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-well mar-well">
                                    <a href="#">
                                        <h4>Data Security analyticks</h4>
                                    </a>
                                    <p>When replacing a multi-lined selection of text</p>
                                    <ul class="marker-list">
                                        <li>Words is roughly being maintained</li>
                                        <li>Letters or begins with a capital letter</li>
                                        <li>Previous casing is maintained</li>
                                        <li>Maintains the amount of lines</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-page mar-well">
                                    <div class="page-img elec-page">
                                        <img src="{{asset('assets/img/services/s2.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-well mar-well">
                                    <a href="#">
                                        <h4>It management system operating</h4>
                                    </a>
                                    <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="single-page">
                                    <div class="page-img elec-page">
                                        <img src="{{asset('assets/img/services/s4.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- End single page -->
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="single-well last-content">
                                    <a href="#">
                                        <h4>Cloude Services</h4>
                                    </a>
                                    <p>When replacing a multi-lined selection of text</p>
                                    <ul class="marker-list">
                                        <li>Words is roughly being maintained</li>
                                        <li>Letters or begins with a capital letter</li>
                                        <li>Previous casing is maintained</li>
                                        <li>Maintains the amount of lines</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end Row --> --}}
                        {!! object_get($service,'description_one_'.app()->getLocale()) !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Quote Area -->
@endsection