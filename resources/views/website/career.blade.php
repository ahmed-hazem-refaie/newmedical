@extends('layouts.website')


@section('content')

<section id="title" class="por">
    <div class="row h-100 p-0">
        <div class="col-md-6 h-100 min-h wow fadeInLeft" data-wow-duration="2s" data-wow-offset="70">
            <div class=" h-100 d-flex justify-content-center align-items-center align-content-center flex-column">
                <div class="con">
                    <h2>
                        Careers
                    </h2>
                    <p class="desc">
                        {{field_content($settings , 'all-contact-page', 'header-title') }}
                    </p>
                    <p class="content">

                        {!!
                        nl2br(field_content($settings , 'all-contact-page', 'header-description') ) ??


                        ""
                        !!}



                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-0">
            <div class="por">
                <img src="{{asset('/assets/images/circle.png')}}" alt="circle" class="circle pos">
                <img src="{{field_content($settings , 'all-contact-page', 'header-image') ??  asset('/assets/images/cccc.png')}}" alt="main" class="main">
            </div>
        </div>
    </div>
</section>



<section id="career" class="por o-h ">

<img class="pos pers" src="{{asset('assets/images/per.png')}}" alt="image" style="z-index: 9999;">

    <div class="row">
        <div class="col-lg-6 ">
            <div class="prod pro" style="top: -41px;position: relative;">

                <div class="bv pos bvt1">
                    <div class="bv2 bvt2">
                        <img src="{{asset('assets/images/salary.png')}}" alt="image">
                    </div>
                </div>

                <div class="bv pos bvt1 bvv1">
                    <div class="bv2 bvt2">
                    <img src="{{asset('assets/images/car.png')}}" alt="image">
                    </div>
                </div>
                <div class="bv pos bvt1 bvv2">
                    <div class="bv2 bvt2">
                    <img src="{{asset('assets/images/ph.png')}}" alt="image">
                    </div>
                </div>

                <div class="bv pos bvt1 bvv3">
                    <div class="bv2 bvt2">
                    <img src="{{asset('assets/images/pnc.png')}}" alt="image">
                    </div>
                </div>

                <img src="{{asset('assets/images/vector1.png')}}" alt="image" class="pos box-b vfd" style="left:40px">
                <img src="{{asset('assets/images/vector2.png')}}" alt="image" class="pos box-r vfd" style="left:0px">

                <div class="design1">
                    <img src="{{asset('assets/images/ve.png')}}" alt="image">
                </div>
               
                <img class="pos kite" src="{{asset('assets/images/kite.png')}}" alt="image">
            </div>

        </div>

        <div class="col-lg-6 pl-5">
            <p class="text-uppercase head-text pxna">

                <span class="red">
                    Qualified
                </span>
                <span class="blue">
                    staff
                </span>


            </p>
            <p class="text-muted col-10">
                The Multicare Standard Operation Procedures (S.O.P) helps the organizations recruit,develop, and retain a talented workforce so that they can concentrate on completingtime-sensitive product production and meeting strict quality standards from productiontill marketing with complete customer’s satisfaction. Multicare has the challenge ofremaining highly competitive while staying compliant with industry regulations,resulting in a need to retain the best-qualified employees for intense and complex jobs.
                Qualified staff helps to meet the company goals of compliance, increasing productivity,and increasing product safety.
            </p>
        </div>
    </div>



</section>


<section class="currency">
    <p class="text-uppercase head-text pxna text-center p-4">
        <span class="red">
            Current Job
        </span>
        <span class="blue">
            Vacancies
        </span>
    </p>

    <div class="container">
        <div class="row ">


            @foreach ($careers as $item)
                
            <div class="col-md-4 mt-4">
                <div class="d-flex job-c bg-white align-content-center align-items-center">
                    <div>
                        <div class="icon-j">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                    </div>

                    <div class="j-cont mx-2">
                        <p class="text-muted j-name text-uppercase">
                            {{$item->title}}
                        </p>

                    </div>

                    <div>

                        <img src="{{getImg($item->logo) ?? asset('assets/images/mn.png')}}" alt="image">
                    </div>

                </div>
            </div>
            @endforeach

            <div class="col-md-4 mt-4">
                <div class="d-flex job-c bg-white align-content-center align-items-center">
                    <div>
                        <div class="icon-j">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                    </div>

                    <div class="j-cont mx-2">
                        <p class="text-muted j-name text-uppercase">
                            job name
                        </p>

                    </div>

                    <div>

                        <img src="{{asset('assets/images/mn.png')}}" alt="image">
                    </div>

                </div>
            </div>


            <div class="col-md-4 mt-4">
                <div class="d-flex job-c bg-white align-content-center align-items-center">
                    <div>
                        <div class="icon-j">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                    </div>

                    <div class="j-cont mx-2">
                        <p class="text-muted j-name text-uppercase">
                            job name
                        </p>

                    </div>

                    <div>

                        <img src="{{asset('assets/images/mn.png')}}" alt="image">
                    </div>

                </div>
            </div>

            <div class="col-md-4 mt-4">
                <div class="d-flex job-c bg-white align-content-center align-items-center">
                    <div>
                        <div class="icon-j">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                    </div>

                    <div class="j-cont mx-2">
                        <p class="text-muted j-name text-uppercase">
                            job name
                        </p>

                    </div>

                    <div>

                        <img src="{{asset('assets/images/mn.png')}}" alt="image">
                    </div>

                </div>
            </div>

            <div class="col-md-4 mt-4">
                <div class="d-flex job-c bg-white align-content-center align-items-center">
                    <div>
                        <div class="icon-j">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                    </div>

                    <div class="j-cont mx-2">
                        <p class="text-muted j-name text-uppercase">
                            job name
                        </p>

                    </div>

                    <div>

                        <img src="{{asset('assets/images/mn.png')}}" alt="image">
                    </div>

                </div>
            </div>

            <div class="col-md-4 mt-4">
                <div class="d-flex job-c bg-white align-content-center align-items-center">
                    <div>
                        <div class="icon-j">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                    </div>

                    <div class="j-cont mx-2">
                        <p class="text-muted j-name text-uppercase">
                            job name
                        </p>

                    </div>

                    <div>

                        <img src="{{asset('assets/images/mn.png')}}" alt="image">
                    </div>

                </div>
            </div>

        </div>
    </div>

</section>









@endsection