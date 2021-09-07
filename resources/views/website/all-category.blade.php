@extends('layouts.website')


@section('content')
    

@php
if(!isset($settings))
$settings = collect([]);
@endphp


<section id="title" class="por">
    <!-- <img src="./assets/images/layer.png" alt="layer" class="pos layer"> -->
    <div class="row h-100 p-0">
        <div class="col-md-6 h-100 min-h">
            <div
                class=" h-100 d-flex justify-content-center align-items-center align-content-center flex-column">
                <div class="con">
                    <h2>
                        {{ field_content($settings,'all-category-page', 'title_1') }}
                    </h2>
                    <p class="desc">
                        {{ field_content($settings,'all-category-page', 'title_2') }}                    </p>
                    <p class="content">
                        {!! nl2br(field_content($settings,'all-category-page', 'description_1')) !!}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-0">
            <div class="por">
                <img src="{{asset('assets/images/circle.png')}}" alt="circle" class="circle pos">
                <img src="{{ field_content($settings,'all-category-page', 'header image') }}" alt="main" class="main">
            </div>
        </div>
    </div>
</section>



<section id="services" class="text-center">
    <div class="top t1 pos">
        <img src="{{asset('assets/images/shap.png')}}" alt="image" >
    </div>
    <div class="bottom b1 pos">
        <img src="{{asset('assets/images/shap.png')}}" alt="image" >
    </div>
    <div class="container wow fadeInUp" data-wow-duration="3s">
        <div class="row justify-content-center">


            @include('includes.category')

        </div>
      

    </div>

</section>







@endsection