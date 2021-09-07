
<section id="services" class="text-center">
    <h2 class="wow fadeInUp" data-wow-duration="3s" data-wow-offset="70">
        Our
        <span>
            Services
        </span>
    </h2>
    <p class="text-muted wow fadeInUp" data-wow-duration="3s" data-wow-offset="70">
       
        @php
        if(!isset($settings))
        $settings = collect([]);
        @endphp
        {!! nl2br(field_content($settings,'Home Page', 'section-category-description') )!!}
        
    </p>
    <div class="container wow fadeInUp" data-wow-duration="3s">
        <div class="row justify-content-center">
            @include('includes.category')
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