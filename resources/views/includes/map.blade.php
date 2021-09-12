@php
if(!isset($settings))
$settings = collect([]);
@endphp

<section id="map" class="por fadeInRight" data-wow-duration="2s" data-wow-offset="150">


<img class="wave pos wow fadeInRight" data-wow-duration="2s" data-wow-offset="150" src="{{asset('assets/images/wave3.svg')}}"
    alt="wave">


<img class="pos layer" src="{{asset('assets/images/map.png')}}" alt="map">
<div class="over-layer pos">

</div>
<div class="container">
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 handle-map">
            <div class="fadeInRight wow" data-wow-duration="2s" data-wow-offset="150">
                <a class="head" href="#" class="mb-2 d-inline-block ">
                    {{field_content($settings,'footer section', 'right_title_word') ?? "MULTICARE"}}
                </a>
            </div>

            <div class="fadeInRight wow" data-wow-duration="2s" data-wow-offset="150">
                <a class="link" href="#" class="mb-2 d-inline-block ">
                    history
                </a>
            </div>

            <div class="fadeInRight wow" data-wow-duration="2s" data-wow-offset="150">
                <a class="link" href="#" class="mb-2 d-inline-block">
                    our team
                </a>
            </div>

            <div class="fadeInRight wow" data-wow-duration="2s" data-wow-offset="150">
                <a class="link" href="#" class="mb-2 d-inline-block">
                    brand guidliness
                </a>
            </div>
            <div class=" fadeInRight wow" data-wow-duration="2s" data-wow-offset="150">
                <a class="link" href="#" class="mb-2 d-inline-block">
                    Terms & Condition
                </a>
            </div>

            <div class="fadeInRight wow" data-wow-duration="2s" data-wow-offset="150">
                <a class="link" href="#" class="mb-2 d-inline-block">
                    Privacy Policy
                </a>
            </div>
        </div>
        <div class="col-xl-6 col-lg-7 col-md-9 map-desk d-none d-sm-block">
            <div class="por">

                <a href="{{field_content($settings, 'footer section' , 'poland_link') ?? ''}}">

                    <div class="poland pos d-flex justify-content-center flex-column align-content-center align-items-center my-icon wow fadeInRight"
                        data-wow-duration="2s" data-wow-offset="150">
                        <img src="{{asset('assets/images/icon.png')}}" class="icon" alt="icon">
                        <p class="country">
                            poland
                        </p>
                    </div>
                    </a>

                <a href="{{field_content($settings, 'footer section' , 'uae_link') ?? ''}}">

                    <div class="uae pos d-flex justify-content-center flex-column align-content-center align-items-center my-icon wow fadeInRight"
                        data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="150">
                        <img src="{{asset('assets/images/icon.png')}}" class="icon" alt="icon">
                        <p class="country">
                            uae
                        </p>
                    </div>
                </a>

                <a href="{{field_content($settings, 'footer section' , 'egypt_link') ?? ''}}">

                    <div class="egypt pos d-flex justify-content-center flex-column align-content-center align-items-center my-icon wow fadeInRight"
                        data-wow-duration="2s" data-wow-delay="1s" data-wow-offset="150">
                        <img src="{{asset('assets/images/icon.png')}}" class="icon" alt="icon">
                        <p class="country">
                            egypt
                        </p>
                    </div>
                </a>

                <a href="{{field_content($settings, 'footer section' , 'india_link') ?? ''}}">


                    <div class="india pos d-flex justify-content-center flex-column align-content-center align-items-center my-icon wow fadeInRight"
                        data-wow-duration="2s" data-wow-delay="1s" data-wow-offset="150">
                        <img src="{{asset('assets/images/icon.png')}}" class="icon" alt="icon">
                        <p class="country">
                            india
                        </p>
                    </div>
                </a>

                <a href="{{field_content($settings, 'footer section' , 'ksa_link') ?? ''}}">

                    <div class="ksa pos d-flex justify-content-center flex-column align-content-center align-items-center my-icon wow fadeInRight"
                        data-wow-duration="2s" data-wow-delay="1.5s" data-wow-offset="150">
                        <img src="{{asset('assets/images/icon.png')}}" class="icon" alt="icon">
                        <p class="country">
                            ksa
                        </p>
                    </div>
                </a>

                <a href="{{field_content($settings, 'footer section' , 'australia_link') ?? ''}}">

                    <div class="aus pos d-flex justify-content-center flex-column align-content-center align-items-center my-icon wow fadeInRight"
                        data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="60">
                        <img src="{{asset('assets/images/icon.png')}}" class="icon" alt="icon">
                        <p class="country">
                            Australia
                        </p>
                    </div>
                </a>


                <a href="{{field_content($settings, 'footer section' , 'newzeland_link') ?? ''}}">
                    <div class="newz pos d-flex justify-content-center flex-column align-content-center align-items-center my-icon wow fadeInRight"
                        data-wow-duration="2s" data-wow-delay="1s" data-wow-offset="60">
                        <img src="{{asset('assets/images/icon.png')}}" class="icon" alt="icon">
                        <p class="country">
                            Newzeland
                        </p>
                    </div>
                </a>

            </div>
        </div>
        <div class="col-xl-6 col-lg-7 col-md-9 map-mob d-sm-none d-block">
            <div class="por">

                <a href="{{field_content($settings, 'footer section' , 'poland_link')}}">
                <div class="poland pos d-flex justify-content-center flex-column align-content-center align-items-center my-icon  fadeInRight"
                    data-wow-duration="2s" data-wow-offset="150">
                    <img src="{{asset('assets/images/icon.png')}}" class="icon" alt="icon">
                    <p class="country">
                        poland
                    </p>
                </div>
                </a>

                <a href="{{field_content($settings, 'footer section' , 'uae_link')}}">
                <div class="uae pos d-flex justify-content-center flex-column align-content-center align-items-center my-icon  fadeInRight"
                    data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="150">
                    <img src="{{asset('assets/images/icon.png')}}" class="icon" alt="icon">
                    <p class="country">
                        uae
                    </p>
                </div>
                </a>


                <a href="{{field_content($settings, 'footer section' , 'egypt_link')}}">
                <div class="egypt pos d-flex justify-content-center flex-column align-content-center align-items-center my-icon  fadeInRight"
                    data-wow-duration="2s" data-wow-delay="1s" data-wow-offset="150">
                    <img src="{{asset('assets/images/icon.png')}}" class="icon" alt="icon">
                    <p class="country">
                        egypt
                    </p>
                </div>
                </a>


                <a href="{{field_content($settings, 'footer section' , 'india_link')}}">
                <div class="india pos d-flex justify-content-center flex-column align-content-center align-items-center my-icon  fadeInRight"
                    data-wow-duration="2s" data-wow-delay="1s" data-wow-offset="150">
                    <img src="{{asset('assets/images/icon.png')}}" class="icon" alt="icon">
                    <p class="country">
                        india
                    </p>
                </div>
                </a>


                <a href="{{field_content($settings, 'footer section' , 'ksa_link')}}">
                <div class="ksa pos d-flex justify-content-center flex-column align-content-center align-items-center my-icon  fadeInRight"
                    data-wow-duration="2s" data-wow-delay="1.5s" data-wow-offset="150">
                    <img src="{{asset('assets/images/icon.png')}}" class="icon" alt="icon">
                    <p class="country">
                        ksa
                    </p>
                </div>
                </a>


                <a href="{{field_content($settings, 'footer section' , 'australia_link')}}">
                <div class="aus pos d-flex justify-content-center flex-column align-content-center align-items-center my-icon  fadeInRight"
                    data-wow-duration="1s" data-wow-delay=".1s" data-wow-offset="10">
                    <img src="{{asset('assets/images/icon.png')}}" class="icon" alt="icon">
                    <p class="country">
                        Australia
                    </p>
                </div>
                </a>



                <a href="{{field_content($settings, 'footer section' , 'newzeland_link') }}">
                <div class="newz pos d-flex justify-content-center flex-column align-content-center align-items-center my-icon  fadeInRight"
                    data-wow-duration="1s" data-wow-delay=".1s" data-wow-offset="10">
                    <img src="{{asset('assets/images/icon.png')}}" class="icon" alt="icon">
                    <p class="country">
                        Newzeland
                    </p>
                </div>
                </a>


            </div>
        </div>
        <div class="col-xl-3 col-lg-12 col-md-3 handle-map2">
            <div class="margin-t wow fadeInRight" data-wow-duration="2s" data-wow-offset="150">
                <a class="head" href="#" class="mb-2 d-inline-block font-weight-bold ">
                    {{field_content($settings,'footer section', 'left_title_word') ?? "ABOUT MULTICARE"}}
                </a>
            </div>

            <div class=" wow fadeInRight" data-wow-duration="2s" data-wow-offset="150">
                <p class="text-white">



                    {!! nl2br(field_content($settings,'footer section', 'brief') )!!}
                    
                    
                    
                    
                </p>
            </div>
            <div>
                <p class="follow wow fadeInRight" data-wow-duration="2s" data-wow-offset="100">
                    Follow Us
                </p>
                <div class="wow fadeInRight" data-wow-duration="2s" data-wow-offset="100">
            
                    

                    <span class="social insta next2">
                        <div class="bg-btn2"></div>
                        <a href="{{field_content($settings,'footer section', 'contact-instgram')}}" class="">

                            <i class="fab fa-instagram"></i>
                        </a>
                    </span>
                    <span class="social next2">
                        <div class="bg-btn2"></div>
                        <a href="{{field_content($settings,'footer section', 'contact-facebook')}}" class="">

                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </span>
                    <span class="social next2">
                        <div class="bg-btn2"></div>
                        <a href="{{field_content($settings,'footer section', 'contact-twitter')}}" class="">

                            <i class="fab fa-twitter"></i>
                        </a>
                    </span>

                    <span class="social next2">
                        <div class="bg-btn2"></div>
                        <a href="{{field_content($settings,'footer section', 'contact-whatsapp')}}" class="">

                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>

</div>



<div class="p-4 text-center copy mt-5">
    <hr>
    <p class="mb-0 text-white">
        <div class="copyright-wrap">
            Copyright @2021 . Designed By   <a style="color: white;" href="http://www.it-gates.com/">  IT-Gates </a>
        </div>    </p>
</div>
</section>
