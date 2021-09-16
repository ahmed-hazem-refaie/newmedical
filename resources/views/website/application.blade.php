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



<section id="partners2" class="por px-5 my-app o-h">
    <div class="top pos top2 wow fadeIn xz1" data-wow-duration="2s" data-wow-offset="70">
        <img src="{{asset('assets/images/shap.png')}}" alt="image">
    </div>
    <div class="bottom  bottom2 pos wow fadeIn xz1" data-wow-duration="2s" data-wow-offset="70">
        <img src="{{asset('assets/images/shap.png')}}" alt="image">
    </div>

    <div class="row">
        <div class="col-lg-5 por padm">
            <p class="text-uppercase head-text pxna">

                <span class="red">
                    Job
                </span>
                <span class="blue">
                    Name
                </span>


            </p>
            <p class="col-10 por pt-3" style="z-index: 9;">
                The Multicare Standard Operation Procedures (S.O.P) helps the organizations recruit,develop, and retain a talented workforce so that they can concentrate on completingtime-sensitive product production and meeting strict quality standards from productiontill marketing with complete customer’s satisfaction. Multicare has the challenge ofremaining highly competitive while staying compliant with industry regulations,resulting in a need to retain the best-qualified employees for intense and complex jobs.
                Qualified staff helps to meet the company goals of compliance, increasing productivity,and increasing product safety.
            </p>

            <img src="{{asset('assets/images/arrow.png')}}" alt="image" class="arrow-k pos">
        </div>

        <div class="col-lg-7">
            <p class="fill">
                Please fill all fields
            </p>
            <div>
                <form class="form-app shadow por">
                    <div class="my-ico pos">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                    <div class="form-row mt-2">
                        <div class="form-group px-4 col-md-6 d-flex justify-content-center align-items-center align-content-center">
                            <label class="mx-2 col-md-3">Name</label>
                            <input type="text" class="form-control nb col-md-9">
                        </div>
                        <div class="form-group px-4 col-md-6 d-flex justify-content-center align-items-center align-content-center">
                            <label class="mx-2 col-md-3">position</label>
                            <select name="" id="" class="form-control nb col-md-9">
                                <option value="">web developer</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-row mt-2">
                        <div class="form-group px-4 col-md-6 d-flex justify-content-center align-items-center align-content-center">
                            <label class="mx-2 col-md-3">E-mail</label>
                            <input type="email" class="form-control nb col-md-9">
                        </div>
                        <div class="form-group px-4 col-md-6 d-flex justify-content-center align-items-center align-content-center">
                            <label class="mx-2 col-md-3">faculty</label>
                            <input type="text" class="form-control nb col-md-9">
                        </div>
                    </div>

                    <div class="form-row mt-2">
                        <div class="form-group px-4 col-md-6 d-flex justify-content-center align-items-center align-content-center">
                            <label class="mx-2 col-md-3">telephone</label>
                            <input type="text" class="form-control nb col-md-9">
                        </div>
                        <div class="form-group px-4 col-md-6 d-flex justify-content-center align-items-center align-content-center">
                            <label class="mx-2 col-md-3">grade</label>
                            <input type="text" class="form-control nb col-md-9">
                        </div>
                    </div>

                    <div class="form-row mt-2">
                        <div class="form-group px-4 col-md-6 d-flex justify-content-center align-items-center align-content-center">
                            <label class="mx-2 col-md-3">Address</label>
                            <input type="text" class="form-control nb col-md-9">
                        </div>
                        <div class="form-group px-4 col-md-6 d-flex ff justify-content-center align-items-center align-content-center" style="position: relative; top:-15px">
                            <label class="mx-2 col-md-3">Gender</label>
                            <!-- <div class="form-check">
                                <input checked name="gender" type="checkbox" class="form-check-input cccs" id="exampleCheck1">
                                <label class="form-check-label mx-3" for="exampleCheck1 " style="top: 0;">Male</label>
                            </div>
                            <div class="form-check mx-5">
                                <input name="gender" type="checkbox" class="form-check-input cccs" id="exampleCheck1">
                                <label class="form-check-label mx-3" for="exampleCheck1" style="top:0">Female</label>
                            </div> -->

                            <div class="radio">
                                <label>
                                    <input type="radio" name="sampleRadio" id="" checked>
                                    <span class="custom-radio" style="position: relative; top:4px"></span>
                                    Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="sampleRadio" id="" >
                                    <span class="custom-radio mx-3" style="position: relative; top:4px"></span>
                                    Female
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class="form-row mt-2">
                        <div class="form-group px-4 col-md-6 d-flex " style="position: relative; left:-6px">
                            <label class="mx-2 col-md-3">city</label>
                            <input type="text" class="form-control nb col-md-9">
                        </div>
                        <div class="form-group px-4 col-md-6  " style="position: relative; top:-31px">
                            <label class="mx-2">Upload your cv</label>
                            <input type="text" class="form-control nb col-md-12">
                            <div class="d-flex mt-3">
                                <button class="btn browse por" type="button">
                                    <input type="file" class="file pos">
                                    Browse
                                </button>


                                <button class="btn upload mx-3">
                                    Upload
                                </button>

                            </div>
                        </div>
                    </div>

                    <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
                </form>
            </div>

        </div>

    </div>
</section>









@endsection