<section id="start">
    <div class="contain por ">
        <div class="med">

            @php
               $header_media =  field_content($settings,'Home Page' , 'header_media');

               @endphp
            
            @if ($header_media == 'video')
                <video muted autoplay loop width="320" height="240" controls>
                    <source src="http://localhost:8000/storage/videos/oCOLuW2TBvJ6qPcJ19NqAaGWXBZwFvYaiIEuKnlX.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
                </video>
            

            @else
            <img src="./assets/images/header1.png" alt="image">
            @endif

            </div>

      
            
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="over-layer"></div>
                <div class="col-md-5   fadeInUp" data-wow-duration="3s" data-wow-delay="1s">
                 
                    
          
                    
                    <a href="#" class="read next3">
                        <span>Read More</span>

                        <div class="bg-btn3"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>