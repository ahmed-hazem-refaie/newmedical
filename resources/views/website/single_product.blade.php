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


<section id="detail">
    <div class="bottom  bottom2 pos bt3" data-wow-duration="2s" data-wow-offset="70">
        <img src="{{asset('assets/images/shap.png')}}" alt="image">
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="prod pro  inner">
                <img src="{{asset('assets/images/vector1.png')}}" alt="image" class="pos box-b">
                <img src="{{asset('assets/images/vector2.png')}}" alt="image" class="pos box-r">
                <div class="pos bd wow fadeInRight" data-wow-duration="3.5s" data-wow-delay="3.5s" data-wow-offset="160">
                    <img src="{{asset('assets/images/b.png')}}" alt="image">
                </div>

                <div class="img-c wow fadeInRight" data-wow-duration="2.5s" data-wow-delay="2.5s" data-wow-offset="160">
                    <img src="{{getImg($product->image)}}" alt="image" class="w-100 h-100 box">
                </div>
            </div>

            <div class="med mt-5 ">
                <p class="text-uppercase head-text">

                    <span class="red">
                        Product
                    </span>
                    <span class="blue">
                        Media
                    </span>


                </p>

                <div class="row">


                    @foreach ($product->media as $media)

                    <div class="col-md-4 col-sm-6 col-6 mt-3">
                        <div class="por xs border shadow wow fadeInUp" data-wow-duration="2s" data-wow-offset="70">
                            <img src="{{getImg($media->image)}}" alt="" class="w-100 h-100 fg">
                            <div class="bv pos">
                                @if ($media->type == 0)



                                <a href="{{getImg($media->video)}}" class="popup-youtube">
                                    <div class="bv2">
                                        <i class="fas fa-caret-right arr r mx-1"></i>

                                    </div>
                                </a>
                                @endif

                                @if ($media->type == 1)

                                <a href="{{getImg($media->image)}}" class="popup-youtube">
                                    <div class="bv2">

                                        <img src="{{asset('assets/images/gallery.png')}}" alt="img">
                                    </div>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>

            </div>
        </div>

        <div class="col-md-5">

            <p class="text-uppercase head-text wow fadeInRight" data-wow-duration="2s" data-wow-offset="70">

                <span class="blue">
                    {{$product->name}}
                </span>
            </p>

            <div>
                <div class="d-flex align-content-center align-items-center fadeInRight" data-wow-duration="2s" data-wow-offset="70">
                    <div class="mr-4">
                        <img src="{{asset('assets/images/sar.png')}}" alt="image">
                    </div>
                    <div>
                        <p class="tm font-24 mb-0   wow fadeInRight" data-wow-duration="2s" data-wow-offset="70">
                            {{$product->title}}
                        </p>
                    </div>
                </div>

                <div class="wow fadeInRight" data-wow-duration="2s" data-wow-offset="70">
                    <p>

                        {!! nl2br($product->description) !!}
                    </p>
                </div>
                <div class="por  down wow fadeInRight" data-wow-duration="2s" data-wow-offset="70">
                    <a href="{{getImg($product->pdf)}}" download="" class="text-uppercase">
                        download pdf
                    </a>
                    <div class="dv-red2">

                    </div>

                    <div class="dv-red">
                        <i class="fas fa-chevron-down text-white"></i>
                    </div>

                </div>

                <div class="more por wow fadeInUp" data-wow-duration="2s" data-wow-offset="70">
                    <img src="{{asset('assets/images/dos.png')}}" alt="image" class="pos dos">
                    <p class="redx mb-1 ">
                        More details

                    </p>
                    <p class="gray">

                        {!! $product->content !!}

                    </p>

                    <div class="accordion">

                        @foreach ($product->faq as $faq)
                        <div class="card mt-3">
                            <div class="card-header por">
                                <a class="btn btn-link btn-block text-left"  >
                                    {{$faq->title}}
                                </a>


                                <img src="{{asset('assets/images/sh.png')}}" alt="" class="pos sh">

                                <div class="pos deps ">
                                    <i class="fas fa-chevron-right"></i>
                                </div>

                            </div>

                            <div id="collapse{{$loop->index + 1}}" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">

                                    <!-- ================= in multi faq ==================-->
                                    <div class="ordered m-multi-faq">
                                        {!!$faq->description!!}
                                    </div>


                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>


                </div>

            </div>



        </div>
    </div>
</section>

<section id="related" class="w-100">
    <div class="d-flex align-items-center align-content-center w-100">
        <p class="text-uppercase head-text mr-4">
            <span class="red">
                Related
            </span>
            <span class="blue">
                Products
            </span>
        </p>
        <div class="w-75 htr">
            <hr class="my-hr">
        </div>

    </div>

    <section id="partners2" class="text-center por">
        <div class="top pos top2 wow fadeIn" data-wow-duration="2s" data-wow-offset="70">
            <img src="{{asset('assets/images/shap.png')}}" alt="image">
        </div>
        <div class="bottom  bottom2 pos wow fadeIn" data-wow-duration="2s" data-wow-offset="70">
            <img src="{{asset('assets/images/shap.png')}}" alt="image">
        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev bg-white shadow"> <i class="fas fa-arrow-left text-gray"></i></div>
        <div class="swiper-button-next bg-white shadow "> <i class="fas fa-arrow-right text-gray"></i></div>
        <div class="container">
            <div class="swiper product">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper ">
                    <!-- Slides -->

                    @foreach ($product->relatedproducts as $r_product)

                    <div class="swiper-slide">
                        <a href="{{route('website.single_product', [$r_product->id, str_replace(" ", "-", $r_product->category->name ) ])}}">
                            <div class="c wow fadeInUp" data-wow-duration="3s" data-wow-offset="70">
                                <div class="img-contain">
                                    <img src="{{getImg($r_product->logo)}}" alt="image" class="w-100 h-100">
                                </div>
                                <div class="plus por">
                                    <p>
                                        {{$r_product->name}}
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
        </div>
    </section>

</section>




@endsection

@push('header')
<style>

</style>
@endpush


@push('footer')
<script>
    $(".ordered li").each(function() {
        $(this).prepend("<div><img src='{{ asset('assets/images/fly.png') }}' alt='image' class='fl mr-1'></div>")
    })

    $(".ordered ul , .ordered ol").each(function() {
        if ($(this).children().length == 1) {
            $(this).children('li').css({
                'width': "100%"
            })
        }
    })
</script>
@endpush