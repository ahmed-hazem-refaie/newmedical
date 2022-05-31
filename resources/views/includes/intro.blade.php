<div class="intro-area intro-area-3">
    <div class="intro-carousel">
       

        @foreach ($slider as $slide)
        

        <div class="intro-content-2 slide-{{ $loop->index+1 }}">


            <div class="slider-images">
                <img src="{{ getImg( object_get($slide,'image_'.app()->getLocale()) ) ?? '/assets/img/slider/h3.jpg'}}" alt="">
            </div>
            <div class="slider-content">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- layer 1 -->
                                    <div class="layer-1 wow fadeInUp" data-wow-delay="0.3s">
                                        <h2 class="title2">

                                            {!! nl2br( object_get($slide,'lg_text_'.app()->getLocale()) ) !!}

                                        </h2>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-2 wow fadeInUp" data-wow-delay="0.5s">
                                        <p>

                                            {!! nl2br( object_get($slide,'sm_text_'.app()->getLocale()) ) !!}

                                        </p>
                                    </div>
                                    <!-- layer 3 -->
                                    <div class="layer-3 wow fadeInUp" data-wow-delay="0.7s">
                                        <a href="{{route('website.services')}}" class="ready-btn left-btn "> {{ __('website.Services Link') }} </a>
                                        <a href="{{route('website.contact')}}" class="ready-btn right-btn"> {{ __('website.contact') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @endforeach
       


        
    </div>
</div>