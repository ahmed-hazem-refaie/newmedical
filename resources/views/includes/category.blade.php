@foreach ($categories as $category)
                    
    <div class="col-xl-3 col-lg-4 h my col-sm-6 col-6">


        <a href="{{route('website.single_category', str_replace(" ", "-", $category->name))}}">
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
                    <a href="{{route('website.single_category', str_replace(" ", "-", $category->name))}}">Read More >> </a>
                </div>
                <div class="read read2 pb-4">
                    <a href="{{route('website.single_category', str_replace(" ", "-", $category->name))}}" >Read More </a>
                </div>
            </div>
        </a>
    </div>

@endforeach