<section id="start">
    <div class="contain por ">
        <div class="med">

            @php
            $header_media = field_content($settings,'Home Page' , 'header_media');

            @endphp

            @if ($header_media == 'video')
            <video  muted autoplay loop >
                <source src="https://shalabyrigs.com/storage/videos/jFjot5Acik2QUiKFJ9jkG6XpKBODJXFQHwsviOSP.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>


            @else
            <img src="{{field_content($settings,'Home Page' , 'header_image') ?? './assets/images/header1.png'}}" alt="image">
            @endif

        </div>



        <div class="container">
            <div class="row flex-row-reverse ">

                <a href="#" class="read next3">
                    <span>Read More</span>

                    <div class="bg-btn3"></div>
                </a>
            </div>
        </div>
    </div>
</section>