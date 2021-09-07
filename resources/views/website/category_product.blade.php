@extends('layouts.website')


@section('content')
    



<section id="title" class="por">
    <div class="row h-100 p-0">
        <div class="col-md-6 h-100 min-h">
            <div class=" h-100 d-flex justify-content-center align-items-center align-content-center flex-column">
                <div class="con">
                    <h2>
                        {{$category->name}}
                    </h2>
                    <p class="desc">
                        {{$category->title}}
                    </p>
                    <p class="content">

                        {!! nl2br( $category->description) !!}

                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-0">
            <div class="por">
                <img src="{{asset('assets/images/circle.png')}}" alt="circle" class="circle pos">
                <img src="{{getImg($category->image)}}" alt="main" class="main">
            </div>
        </div>
    </div>
</section>

<section id="cat">
    <div class="top t1 pos">
        <img src="{{asset('assets/images/shap.png')}}" alt="image" >
    </div>
    <div class="bottom b1 pos">
        <img src="{{asset('assets/images/shap.png')}}" alt="image" >
    </div>

    <div class="container">
        <div class="row justify-content-center">
            

            @foreach ($products as $product)
                
            <div class="col-xl-3 col-lg-4 h my col-sm-6 col-6">
                <a href="{{route('website.single_product', [$product, str_replace(" ", "-", $product->category->name ) ])}}">

                <div class="c wow fadeInUp" data-wow-duration="3s" data-wow-offset="70">
                    <div class="img-contain">
                        <img src="{{getImg($product->image)}}" alt="image" class="w-100 h-100">
                    </div>
                    <div class="plus por">
                        <p>
                            {{$product->name}}
                        </p>
                        <div class="tri pos"></div>
                        <div class="tri2 pos"></div>
                        <span class="p pos">+</span>
                    </div>
                </div>
                </a>
            </div>
            @endforeach



        </div>
    </div>


</section>





@endsection