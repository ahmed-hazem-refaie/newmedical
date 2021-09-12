<section id="start" class="por" style="height: 70vh; overflow:hidden !important">

    @php
    $header_media = field_content($settings,'Home Page' , 'header_media');

    @endphp
    @if($header_media =='video')
    <video style="    width: 100% !important;
    height: 100%;
    object-fit: fill;" muted autoplay loop class="">
        <source src="{{field_content($settings , 'Home Page' , 'header-video')}}" type="video/mp4">

            Your browser does not support the video tag.
    </video>
   
    @endif

    <div class="contain por " style="height: 70vh;">
        <div class="med" style="position: relative !important; background:black">



            @if($header_media =='image')


            <img src="{{field_content($settings , 'Home Page' , 'header-image') ?? '/assets/images/header1.png' }}" alt="image">

            @endif

        </div>




        



    </div>
</section>