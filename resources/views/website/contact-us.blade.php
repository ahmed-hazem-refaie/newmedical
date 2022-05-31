@extends('layouts.website')


@section('content')

<!-- Start Bottom Header -->
<div class="page-area" style="background-image: url( {{field_content($settings ,'Contact Page' , 'image') ?? '/assets/img/background/bread.jpg'}})">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline text-center">
                        @if(session()->has('success') )
                        <div class="alert alert-success text-center" role="alert">
                            {{session()->get('success') }}
                        </div>
                        @endif
                        <h3>{{ __('website.contact') }}</h3>
                    </div>
                    <ul>
                        <li class="home-bread">{{ __('website.home') }}</li>
                        <li>{{ __('website.contact') }}</li>
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
                            <p class="rtl">
                                {{ __('website.call') }} :
                                {{field_content($settings,'Contact Page', 'section-contacts-phone') ?? "+0011-564-543"}}
                                <br>
                                <span>
                                    {{field_content($settings,'Contact Page', 'section-contacts-time_'.app()->getLocale()) ?? "Monday-Friday (10am-18pm)"}}
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="ti-email"></i>
                            <p class="rtl">
                                {{ __('website.email') }} :
                                {{field_content($settings,'Contact Page', 'section-contacts-email') ?? "Ragner3@gmail.com"}}
                                <br>
                                <span>
                                    {{ __('website.web') }}:
                                    {{field_content($settings,'Contact Page', 'section-contacts-website') ?? "www.rockstheme.com"}}
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="ti-location-pin"></i>
                            <p class="rtl">
                                {{ __('website.location') }} :
                                {{field_content($settings,'Contact Page', 'section-contacts-location_'.app()->getLocale()) ?? "Newyork city"}}
                                <br>
                                <span>
                                    {{field_content($settings,'Contact Page', 'section-contacts-location-road_'.app()->getLocale()) ?? "23 house/3 Road"}}
                                </span>
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
                    <!-- <div style="width:100%;height:420px;" id="googleMap" ></div> -->

                    <iframe style="width:100%;height:420px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3630.9239078659552!2d54.3725361!3d24.4880932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e6743548c24b1%3A0xeb597f97d52406aa!2sFirst%20page%20Management%20Solutions!5e0!3m2!1sen!2sae!4v1654040651858!5m2!1sen!2sae"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                <input name="name" type="text" id="name" class="form-control" placeholder="{{ __('website.name') }}" required>

                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input name="email" type="email" class="email form-control" id="email" placeholder="{{ __('website.email') }}" required>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input name="phone" type="text" class="email form-control" id="phone" placeholder="{{ __('website.phone') }}" required>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <input name="subject" type="text" id="msg_subject" class="form-control" placeholder="{{ __('website.subject') }}" required>

                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <textarea name="message" id="message" rows="7" placeholder="{{ __('website.message') }}" class="form-control" required></textarea>

                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                <button type="submit" class="add-contact">{{ __('website.sendmessage') }}</button>
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