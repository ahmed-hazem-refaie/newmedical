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
                        @if(session()->has('success') )
                        <div class="alert alert-success" role="alert">
                            {{session()->get('success') }}

                        </div>
                        @endif




                        <h3>contact</h3>
                    </div>
                    <ul>

                        <li class="home-bread">Home</li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->
<!-- Start contact Area -->
<div class="contact-area area-padding">
    <div class="container">
        <div class="row">
            <div class="contact-inner">
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="ti-mobile"></i>
                            <p>
                                Call : +0011-564-543<br>
                                <span>Monday-Friday (10am-18pm)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="ti-email"></i>
                            <p>
                                Email : Ragner3@gmail.com<br>
                                <span>Web: www.rockstheme.com</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="ti-location-pin"></i>
                            <p>
                                Location : Newyork city<br>
                                <span>23 house/3 Road</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <!-- Start Map -->
                <div class="map-area">
                    <div id="googleMap" style="width:100%;height:420px;"></div>
                </div>
                <!-- End Map -->
            </div>
            <!-- Start Left contact -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="contact-form">
                    <div class="row">
                        <form method="POST" action="{{route('website.contact_post')}}" class="contact-form">

                            @csrf
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input name="name" type="text" id="name" class="form-control" placeholder="Name" required>

                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input name="email" type="email" class="email form-control" id="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input name="phone" type="text" class="email form-control" id="phone" placeholder="phone number" required>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <input name="subject" type="text" id="msg_subject" class="form-control" placeholder="Subject" required>

                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <textarea name="message" id="message" rows="7" placeholder="Massage" class="form-control" required></textarea>

                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                <button type="submit">Send Message</button>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Left contact -->
        </div>
    </div>
</div>
<!-- End Contact Area -->




@endsection