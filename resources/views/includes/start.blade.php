<section id="start" class="por" style="height: 70vh; overflow:hidden !important">

    @php
    $header_media = field_content($settings,'Home Page' , 'header_media');

    @endphp

    @if($header_media =='video')
    <video muted autoplay loop class="">
        <source src="https://shalabyrigs.com/storage/videos/jFjot5Acik2QUiKFJ9jkG6XpKBODJXFQHwsviOSP.mp4" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
        Your browser does not support the video tag.
    </video>
    <a href="#" class="read next3" style="z-index: 99;   position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    padding: 6px 18px;     background-color: #860a0e;">
        <span>Read More</span>
        <div class="bg-btn3"></div>
    </a>
    @endif

    <div class="contain por " style="height: 70vh;">
        <div class="med" style="position: relative !important; background:black">



            @if($header_media =='image')


            <img src="./assets/images/header1.png" alt="image">

            <a href="#" class="read next3" style="z-index: 99;   top: 46%;">
                <span>Read More</span>
                <div class="bg-btn3"></div>
            </a>
            @endif

        </div>




        



    </div>
</section>