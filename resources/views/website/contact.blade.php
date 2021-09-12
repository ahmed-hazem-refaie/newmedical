@extends('layouts.website')


@section('content')

<section id="title" class="por">
    <div class="row h-100 p-0">
        <div class="col-md-6 h-100 min-h wow fadeInLeft" data-wow-duration="2s" data-wow-offset="70">
            <div class=" h-100 d-flex justify-content-center align-items-center align-content-center flex-column">
                <div class="con">
                    <h2>
                        Contact Us
                    </h2>
                    <p class="desc">
                        Lorem ipsum dolor sit.
                    </p>
                    <p class="content">
                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Quis ipsum suspendisse ultrices gravida.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-0">
            <div class="por">
                <img src="{{asset('/assets/images/circle.png')}}" alt="circle" class="circle pos">
                <img src="{{asset('/assets/images/main.png')}}" alt="main" class="main">
            </div>
        </div>
    </div>
</section>
<section id="contact">
    <div class="top t1 t3 pos">
        <img src="{{asset('/assets/images/shap.png')}}" alt="image">
    </div>

    <div class="map-contact por">
        <img src="{{asset('/assets/images/map-contact.png')}}" class="w-100 h-100 m-p-c pos" alt="map">
        <div class="cont1 pos csa wow fadeInRight" data-wow-duration="2s" data-wow-delay=".5s"  data-wow-offset="60">
            <img src="{{asset('/assets/images/vt1.png')}}" alt="vector">
            <div class="my-egy por">
                <div class="radius">
                    Egypt
                </div>
                <div class="d-flex">
                    <div>
                        <i class="fas fa-map-marker-alt loc"></i>
                    </div>
                    <div>
                        <p>
                            flat 39 industrial area , New cairo , Cairo , Egypt
                        </p>
                    </div>
                </div>
                <div class="d-flex">
                    <div>
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div>
                        <p>
                            01149548702
                        </p>
                    </div>
                </div>
                <div class="d-flex">
                    <div>
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <p>
                            INFO@MULTICARE.COM
                        </p>
                    </div>
                </div>




            </div>
        </div>
        <div class="cont2 pos csa wow fadeInRight" data-wow-duration="2s" data-wow-delay=".8s"  data-wow-offset="60">
            <img src="{{asset('/assets/images/vt2.png')}}" alt="vector">
            <div class="my-egy por">
                <div class="radius">
                    Egypt
                </div>
                <div class="d-flex">
                    <div>
                        <i class="fas fa-map-marker-alt loc"></i>
                    </div>
                    <div>
                        <p>
                            flat 39 industrial area , New cairo , Cairo , Egypt
                        </p>
                    </div>
                </div>
                <div class="d-flex">
                    <div>
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div>
                        <p>
                            01149548702
                        </p>
                    </div>
                </div>
                <div class="d-flex">
                    <div>
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <p>
                            INFO@MULTICARE.COM
                        </p>
                    </div>
                </div>




            </div>
        </div>
        <div class="cont3 pos csa wow fadeInRight" data-wow-duration="2s" data-wow-delay="1.2s"  data-wow-offset="60">
            <img src="{{asset('/assets/images/vt3.png')}}" alt="vector">
            <div class="my-egy por">
                <div class="radius">
                    Egypt
                </div>
                <div class="d-flex">
                    <div>
                        <i class="fas fa-map-marker-alt loc"></i>
                    </div>
                    <div>
                        <p>
                            flat 39 industrial area , New cairo , Cairo , Egypt
                        </p>
                    </div>
                </div>
                <div class="d-flex">
                    <div>
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div>
                        <p>
                            01149548702
                        </p>
                    </div>
                </div>
                <div class="d-flex">
                    <div>
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <p>
                            INFO@MULTICARE.COM
                        </p>
                    </div>
                </div>




            </div>
        </div>
        <div class="cont4 pos csa wow fadeInRight" data-wow-duration="2s" data-wow-delay="1.7s"  data-wow-offset="60">
            <img src="{{asset('/assets/images/vt4.png')}}" alt="vector">
            <div class="my-egy por animate-csa">
                <div class="radius">
                    Egypt
                </div>
                <div class="d-flex">
                    <div>
                        <i class="fas fa-map-marker-alt loc"></i>
                    </div>
                    <div>
                        <p>
                            flat 39 industrial area , New cairo , Cairo , Egypt
                        </p>
                    </div>
                </div>
                <div class="d-flex">
                    <div>
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div>
                        <p>
                            01149548702
                        </p>
                    </div>
                </div>
                <div class="d-flex">
                    <div>
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <p>
                            INFO@MULTICARE.COM
                        </p>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex align-items-center align-content-center w-100">
            <p class="text-uppercase head-text mr-4 wow fadeInLeft" data-wow-duration="2s" data-wow-offset="70">
                <span class="red">
                    Get in
                </span>
                <span class="blue">
                    Touch
                </span>
            </p>
            <div class="w-75 htr wow fadeInRight" data-wow-duration="2s" data-wow-offset="70">
                <hr class="my-hr">
            </div>
        </div>

        <form action="{{route('website.contact_post')}}" method="post">
            @csrf

            <div class="form-row">

                <div class="form-group mt-3 mb-5 mr-5 por w-100 wow fadeInLeft" data-wow-duration="2s" data-wow-offset="70">
                    <select required name="country" id="country" class="form-control">
                        <option value="" selected>Please select country</option>
                        <option>Egypt</option>
                        <option>USA</option>
                        <option>AUSTRALIA</option>
                        <option>NEWZELAND</option>
                        <option>POLAND</option>
                        <option>INDIA</option>
                        <option>Saudi Arabia</option>

                    </select>
                    <div class="dv-red2"></div>

                    <div class="dv-red">
                        <i class="fas fa-chevron-down text-white"></i>
                    </div>
                </div>

            </div>
            <div class="form-row">
                <div class="col-md-3">
                    <div class="form-group wow fadeInLeft" data-wow-duration="2s" data-wow-offset="70">
                        <label class="text-dark" for="name">Name</label>
                        <input required id="name" name="name" type="text" class="form-control shadow" placeholder="">
                    </div>
                    <div class="form-group wow fadeInLeft" data-wow-duration="2s" data-wow-offset="70">
                        <label class="text-dark" for="phone">Phone</label>
                        <input required type="text" name="phone" class="form-control shadow" id="phone" placeholder="">
                    </div>

                    <div class="form-group wow fadeInLeft" data-wow-duration="2s" data-wow-offset="70">
                        <label class="text-dark" for="email">E-mail</label>
                        <input required type="email" name="email" class="form-control shadow" id="email" placeholder="">
                    </div>

                </div>
                
                <div class="col-md-9">
                    
                    <div class="form-group mx-5 wow fadeInRight" data-wow-duration="2s" data-wow-offset="70">
                        <label class="text-dark" for="message">Message</label>
                        <textarea required name="message" class="form-control shadow" id="message" rows="10"></textarea>
                    </div>
                 
                    <div class="mx-5 d-flex flex-row-reverse wow fadeInUp" data-wow-duration="2s" data-wow-offset="70">
                        <button type="submit" class="btn btn-primary text-uppercase">Submit</button>
                    </div>
                </div>

            </div>

            <div class="row text-center ">

            
                @include('includes.captcha')
            </div>

         

        </form>
    </div>

</section>









@endsection