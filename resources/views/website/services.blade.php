@extends('layouts.website')


@section('content')


<!-- Start Bottom Header -->
<div class="page-area" style="background-image: url( {{field_content($settings ,'Service Page' , 'section-header-image') ?? '/assets/img/background/bread.jpg'}})">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline text-center">
                        <h3>
                            {{__('website.services')}}
                        </h3>
                    </div>
                    <ul>
                        <li class="home-bread">
                        {{__('website.home')}}
                        </li>
                        <li>
                        {{__('website.services')}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->
<!-- Start service area -->

@include('includes.services')
<!-- End service area -->

@include('includes.tab')


@endsection