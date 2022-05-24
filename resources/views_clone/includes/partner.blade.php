
<section id="partners" class="text-center por">
    <h2 class="wow fadeInDown" data-wow-duration="2s" data-wow-offset="70">
        our partners
    </h2>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev bg-white shadow" > <i
            class="fas fa-arrow-left text-gray"></i></div>

    <div class="swiper-button-next bg-white shadow " > <i
            class="fas fa-arrow-right text-gray"></i></div>
            
    <div class="container">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper " >
                <!-- Slides -->
         
        @foreach ($partners as $partner)
             
            <div class="swiper-slide">
                <div class="content">
                    <div class="img-contain">
                        <img src="{{getImg($partner->image)}}" class=" w-100 h-100" alt="image">
                    </div>
                    <div class="desc">
                        <p>
                            {{$partner->name}}
                        </p>
                    </div>
                    <div class="arrow">
                        <a href="{{$partner->url}}">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>

                </div>

            </div>

        @endforeach


            </div>
        </div>
    </div>
</section>