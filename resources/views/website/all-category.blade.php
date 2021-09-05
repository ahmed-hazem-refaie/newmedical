@extends('layouts.website')


@section('content')
    

<section id="title" class="por">
    <!-- <img src="./assets/images/layer.png" alt="layer" class="pos layer"> -->
    <div class="row h-100 p-0">
        <div class="col-md-6 h-100 min-h">
            <div
                class=" h-100 d-flex justify-content-center align-items-center align-content-center flex-column">
                <div class="con">
                    <h2>
                        Products
                    </h2>
                    <p class="desc">
                        Lorem ipsum dolor sit.
                    </p>
                    <p class="content">
                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. 

                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-0">
            <div class="por">
                <img src="{{asset('assets/images/circle.png')}}" alt="circle" class="circle pos">
                <img src="{{asset('assets/images/pro.png')}}" alt="main" class="main">
            </div>
        </div>
    </div>
</section>



<section id="services" class="text-center">
    <div class="top pos">
        <img src="{{asset('assets/images/shap.png')}}" alt="image" >
    </div>
    <div class="bottom  pos">
        <img src="{{asset('assets/images/shap.png')}}" alt="image" >
    </div>
    <div class="container wow fadeInUp" data-wow-duration="3s">
        <div class="row">

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
                            <a href="#">Read More >> </a>
                        </div>
                        <div class="read read2 pb-4">
                            <a href="#">Read More </a>
                        </div>
                    </div>
                </a>
            </div>
            
            @endforeach

        </div>
      

    </div>

</section>







@endsection