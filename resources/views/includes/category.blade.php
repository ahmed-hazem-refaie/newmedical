
<section id="services" class="text-center">
    <h2 class="wow fadeInUp" data-wow-duration="3s" data-wow-offset="70">
        Our
        <span>
            Services
        </span>
    </h2>
    <p class="text-muted wow fadeInUp" data-wow-duration="3s" data-wow-offset="70">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, reiciendis cumque eligendi modi voluptate
        <br>
        deleniti enim praesentium nostrum cupiditate delectus. Iure commodi exercitationem tenetur incidunt est corporis
        <br>
        possimus ducimus deserunt?
    </p>
    <div class="container wow fadeInUp" data-wow-duration="3s">
        <div class="row">
          
            @foreach ($categories as $category)
                
            <div class="col-xl-3 col-lg-4 h my col-sm-6 col-6">
                <div class="service  wow fadeInUp" data-wow-duration="3s" data-wow-offset="70">
                    <div class="img-contain por">
                        <div class="m-icon pos">
                            <img src="{{getImg($category->logo)}}" alt="icon">
                        </div>
                        <div class="img-s">
                            <img src="{{getImg($category->image)}}" alt="image service" class="w-100 h-100 img-ser">
                        </div>
                    </div>
                    <div>
                        <p class="head mb-0 text-muted">
                            {{$category->name}}
                        </p>
                        <p class="  desc mb-0 ">
                            {{$category->description}}
                        </p>
                    </div>
                    <div class="read pb-4">
                        <a href="#">Read More >> </a>
                    </div>
                    <div class="read read2 pb-4">
                        <a href="#">Read More </a>
                    </div>
                </div>
            </div>

            @endforeach
            {{-- <div class="col-xl-3 col-lg-4 h my col-sm-6 col-6 col-6">
                <div class="service ">
                    <div class="img-contain por">
                        <div class="m-icon pos">
                            <img src="./assets/images/icon5.png" alt="icon">
                        </div>
                        <div class="img-s">
                            <img src="./assets/images/s2.png" alt="image service" class="w-100 h-100 img-ser">
                        </div>
                    </div>
                    <div>
                        <p class="head mb-0 text-muted">
                            Gastroenterology
                        </p>
                        <p class="  desc mb-0 ">
                            Lorem ipsum dolor sit amet consectetur adipisicing.
                        </p>
                    </div>
                    <div class="read pb-4">
                        <a href="#">Read More >> </a>
                    </div>
                    <div class="read read2 pb-4">
                        <a href="#">Read More </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 h my col-sm-6 col-6">
                <div class="service  wow fadeInUp" data-wow-duration="3s" data-wow-offset="70">
                    <div class="img-contain por">
                        <div class="m-icon pos">
                            <img src="./assets/images/icon1.png" alt="icon">
                        </div>
                        <div class="img-s">
                            <img src="./assets/images/s3.png" alt="image service" class="w-100 h-100 img-ser">
                        </div>
                    </div>
                    <div>
                        <p class="head mb-0 text-muted">
                            Neuropsychiatry
                        </p>
                        <p class="  desc mb-0 ">
                            Lorem ipsum dolor sit amet consectetur adipisicing.
                        </p>
                    </div>
                    <div class="read pb-4">
                        <a href="#">Read More >> </a>
                    </div>
                    <div class="read read2 pb-4">
                        <a href="#">Read More </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 h my col-sm-6 col-6">
                <div class="service  wow fadeInUp" data-wow-duration="3s" data-wow-offset="70">
                    <div class="img-contain por">
                        <div class="m-icon pos">
                            <img src="./assets/images/icon2.png" alt="icon">
                        </div>
                        <div class="img-s">
                            <img src="./assets/images/s4.png" alt="image service" class="w-100 h-100 img-ser">
                        </div>
                    </div>
                    <div>
                        <p class="head mb-0 text-muted">
                            Nephrology
                        </p>
                        <p class="  desc mb-0 ">
                            Lorem ipsum dolor sit amet consectetur adipisicing.
                        </p>
                    </div>
                    <div class="read pb-4">
                        <a href="#">Read More >> </a>
                    </div>
                    <div class="read read2 pb-4">
                        <a href="#">Read More </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 h my col-sm-6 col-6">
                <div class="service  wow fadeInUp" data-wow-duration="3s" data-wow-offset="70">
                    <div class="img-contain por">
                        <div class="m-icon pos">
                            <img src="./assets/images/icon3.png" alt="icon">
                        </div>
                        <div class="img-s">
                            <img src="./assets/images/s1.png" alt="image service" class="w-100 h-100 img-ser">
                        </div>
                    </div>
                    <div>
                        <p class="head mb-0 text-muted">
                            Gastroenterology
                        </p>
                        <p class="  desc mb-0 ">
                            Lorem ipsum dolor sit amet consectetur adipisicing.
                        </p>
                    </div>
                    <div class="read pb-4">
                        <a href="#">Read More >> </a>
                    </div>
                    <div class="read read2 pb-4">
                        <a href="#">Read More </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 h my col-sm-6 col-6">
                <div class="service  wow fadeInUp" data-wow-duration="3s" data-wow-offset="70">
                    <div class="img-contain por">
                        <div class="m-icon pos">
                            <img src="./assets/images/icon2.png" alt="icon">
                        </div>
                        <div class="img-s">
                            <img src="./assets/images/s6.png" alt="image service" class="w-100 h-100 img-ser">
                        </div>
                    </div>
                    <div>
                        <p class="head mb-0 text-muted">
                            Neuropsychiatry
                        </p>
                        <p class="  desc mb-0 ">
                            Lorem ipsum dolor sit amet consectetur adipisicing.
                        </p>
                    </div>
                    <div class="read pb-4">
                        <a href="#">Read More >> </a>
                    </div>
                    <div class="read read2 pb-4">
                        <a href="#">Read More </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 h my col-sm-6 col-6">
                <div class="service  wow fadeInUp" data-wow-duration="3s" data-wow-offset="70">
                    <div class="img-contain por">
                        <div class="m-icon pos">
                            <img src="./assets/images/icon3.png" alt="icon">
                        </div>
                        <div class="img-s">
                            <img src="./assets/images/s1.png" alt="image service" class="w-100 h-100 img-ser">
                        </div>
                    </div>
                    <div>
                        <p class="head mb-0 text-muted">
                            Gastroenterology
                        </p>
                        <p class="  desc mb-0 ">
                            Lorem ipsum dolor sit amet consectetur adipisicing.
                        </p>
                    </div>
                    <div class="read pb-4">
                        <a href="#">Read More >> </a>
                    </div>
                    <div class="read read2 pb-4">
                        <a href="#">Read More </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 h my col-sm-6 col-6">
                <div class="service  wow fadeInUp" data-wow-duration="3s" data-wow-offset="70">
                    <div class="img-contain por">
                        <div class="m-icon pos">
                            <img src="./assets/images/icon2.png" alt="icon">
                        </div>
                        <div class="img-s">
                            <img src="./assets/images/s6.png" alt="image service" class="w-100 h-100 img-ser">
                        </div>
                    </div>
                    <div>
                        <p class="head mb-0 text-muted">
                            Neuropsychiatry
                        </p>
                        <p class="  desc mb-0 ">
                            Lorem ipsum dolor sit amet consectetur adipisicing.
                            Lorem ipsum dolor sit amet consectetur adipisicing.
                            Lorem ipsum dolor sit amet consectetur adipisicing.
                        </p>
                    </div>
                    <div class="read pb-4">
                        <a href="#">Read More >> </a>
                    </div>
                    <div class="read read2 pb-4">
                        <a href="#">Read More </a>
                    </div>
                </div>
            </div> --}}
        </div>
        @isset($show_v)
            
        <div class="wow fadeInUp" data-wow-duration="3s" data-wow-offset="200">
            <a href="{{route('website.category')}}" class="text-center ">
                <img src="{{asset('assets/images/btn.png')}}" alt="btn" class="my-v">
            </a>
        </div>
        @endisset

    </div>

</section>