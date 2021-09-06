
window.onload = function () {


    $(".preloader").fadeOut(2000)


    $(".service").on("mouseenter", function () {
        $(this).children().find(".desc").slideDown(500)
    })
    $(".service").on("mouseleave", function () {
        $(this).children().find(".desc").slideUp(500)
    })


    $(".parent").on("mouseenter", function () {

        $(this).children(".child").fadeIn(500)
    })
    $(".parent").on("mouseleave", function () {
        $(this).children(".child").slideUp(0)
    })

        ;



    // $(".child2").hover(function () { 
    //     $(".child3").hide();
    //     $(this).children(".child3").fadeIn(500)
    // } ,function(){
    //     $(".child3").hide();
    // })
    // $(".child2").on("mouseleave", function () {

    // })


    $(document).on("click", ".user-cart ", function () {
        $("#popup-cart").show()
        $(".cart-s").show()

    })
    $(document).on("click", "#popup-cart", function (event) {
        $(".cart-s").hide()
        $(this).hide()
        $("section").css("z-index", "1")
    })

    // $(".inner").addClass("h-c")

    $(document).on("mouseenter", ".c", function () {

        $(this).children().find(".tri").animate({
            width: '200%'
        }, 800)

        $(this).children().find(".tri2").animate({
            width: '200%'
        }, 800)

    })


    $(document).on("mouseleave", ".c", function () {

        $(this).children().find(".tri").animate({
            width: '0%'
        }, 800)

        $(this).children().find(".tri2").animate({
            width: '0%'
        }, 800)

    })




    $(".down").on("mouseenter", function () {

        $(this).children(".dv-red").animate({
            width: '120%'
        }, 400)

        $(this).children(".dv-red2").animate({
            width: '120%'
        }, 400)

        // $(".fa-chevron-down").addClass("handle-arrow")

    })


    $(".down").on("mouseleave", function () {

        $(this).children(".dv-red").animate({
            width: '50px'
        }, 400)

        $(this).children(".dv-red2").animate({
            width: '39px'
        }, 400)
        // setTimeout(() => {
        //     $(".fa-chevron-down").removeClass("handle-arrow")
        // }, 800)


    })









    /////////////// fixed menu on scroll
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.navbar2').addClass("fixed-top animate");
            $('.m-log').addClass("animate2");

            $('#scroll-top').addClass('show')

        } else {
            $('.navbar2').removeClass("fixed-top animate");
            $('.m-log').removeClass("animate2");

            $('#scroll-top').removeClass('show')
        }
    });


    $(window).scroll(function () {
        if ($(this).scrollTop() > 30) {
            $(".inner").addClass("h-c")
        }
    })


    // $(".ordered li").each(function () {
    //     $(this).prepend('<div><img src="../assets/images/fly.png" alt="image" class="fl mr-1"></div>')
    // })

    var swiper = new Swiper(".swiper", {
        loop: true,
        speed: 400,
        slidesPerView: 5,
        spaceBetween: 30,
        slidesPerGroup: 1,

        autoplay: {
            delay: 5000,

        },

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            991: {
                slidesPerView: 5,
                spaceBetween: 40,

            },
            // when window width is >= 320px
            280: {
                slidesPerView: 1,
                spaceBetween: 30,

            },
            320: {
                slidesPerView: 2,
                spaceBetween: 30,

            },
            700: {
                slidesPerView: 4,

            },

            640: {
                slidesPerView: 3,

            },
            500: {
                slidesPerView: 3,
                spaceBetween: 10,
            },

            400: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            // when window width is >= 640px

        },

    });



    var swiper = new Swiper(".product", {
        loop: true,
        speed: 400,
        slidesPerView: 5,
        spaceBetween: 30,
        slidesPerGroup: 1,

        autoplay: {
            delay: 5000,

        },

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            1200: {
                slidesPerView: 5,
                spaceBetween: 40,

            },
            991: {
                slidesPerView: 4,
                spaceBetween: 40,

            },
            // when window width is >= 320px
            280: {
                slidesPerView: 1,
                spaceBetween: 30,

            },
            320: {
                slidesPerView: 2,
                spaceBetween: 30,

            },
            700: {
                slidesPerView: 3,

            },

            640: {
                slidesPerView: 2,

            },
            500: {
                slidesPerView: 2,
                spaceBetween: 10,
            },

            400: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            // when window width is >= 640px

        },

    });

}