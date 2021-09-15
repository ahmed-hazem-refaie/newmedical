window.onload = function () {




    $(".accordion .card-header").on("click", function () {
        $(this).next().slideToggle();
        $(this).children(".deps").toggleClass("trans")

    })


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

    if ($(".inner").length > 0) {

        $(window).scroll(function () {

            if ($(window).scrollTop() > $(".inner").offset().top - 600) {

                $(".inner").addClass("h-c")

            }

        });

        if ($(window).scrollTop() > $(".inner").offset().top - 600) {

            $(".inner").addClass("h-c")

        }
    }

    if ($(".inner2").length > 0) {

        $(window).scroll(function () {

            if ($(window).scrollTop() > $(".inner2").offset().top - 600) {

                $(".inner2").addClass("h-c")

            }

        });

        if ($(window).scrollTop() > $(".inner2").offset().top - 600) {

            $(".inner2").addClass("h-c")

        }
    }


    if ($(".inner3").length > 0) {

        $(window).scroll(function () {

            if ($(window).scrollTop() > $(".inner3").offset().top - 600) {

                $(".inner3").addClass("h-c")

            }

        });

        if ($(window).scrollTop() > $(".inner3").offset().top - 600) {

            $(".inner3").addClass("h-c")

        }
    }


    if ($(".inner4").length > 0) {

        $(window).scroll(function () {

            if ($(window).scrollTop() > $(".inner4").offset().top - 600) {

                $(".inner4").addClass("h-c")

            }

        });

        if ($(window).scrollTop() > $(".inner4").offset().top - 600) {

            $(".inner4").addClass("h-c")

        }
    }

    // $(window).scroll(function () {
    //     if ($(this).scrollTop() > 30) {

    //     }
    // })

    // $(".my-icon").each(function(){
    //     let leftTarget= parseInt($(this).css("left")) -130;

    //     $(this).css({transition:"all 1s", transform : 'translate(-140px,20px)' })

    // })


    function slideMenu() {
        var activeState = $("#menu-container .menu-list").hasClass("active");
        $("#menu-container .menu-list").animate({ left: activeState ? "0%" : "-100%" }, 400);
    }
    $("#hamburger-menu").click(function (event) {
        event.stopPropagation();
        $("#hamburger-menu").toggleClass("open");
        $("#menu-container .menu-list").toggleClass("active");
        slideMenu();

        $("body").toggleClass("overflow-hidden");
    });

    $(".menu-list").find(".accordion-toggle").click(function () {
        $(this).next().toggleClass("open").slideToggle("fast");
        $(this).toggleClass("active-tab").find(".menu-link").toggleClass("active");

        $(".menu-list .accordion-content").not($(this).next()).slideUp("fast").removeClass("open");
        $(".menu-list .accordion-toggle").not(jQuery(this)).removeClass("active-tab").find(".menu-link").removeClass("active");
    });


    $(".csa img").hover(function () {
        $(".my-egy").removeClass("animate-csa")
        $(this).next().toggleClass("animate-csa")
    })

    let infoUrl = window.location.href
    let infoUrlTarget = infoUrl.split('/')

    $("." + infoUrlTarget[3]).addClass('active');


    var swiper = new Swiper(".swiper", {

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
            390: {
                slidesPerView: 1,
                spaceBetween: 80,

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




    //==================================== Start Loader animation ============================



    const elts = {
        text1: document.getElementById("text1"),
        text2: document.getElementById("text2")
    };


    const texts = ["M", "U", "L", "T", "I", "C", "A", "R", "E"];


    const morphTime = 1;
    const cooldownTime = 0.25;

    let textIndex = texts.length - 1;
    let time = new Date();
    let morph = 0;
    let cooldown = cooldownTime;

    elts.text1.innerHTML = texts[textIndex % texts.length];
    elts.text2.innerHTML = texts[(textIndex + 1) % texts.length];

    function doMorph() {
        morph -= cooldown;
        cooldown = 0;

        let fraction = morph / morphTime;

        if (fraction > 1) {
            cooldown = cooldownTime;
            fraction = 1;
        }

        setMorph(fraction);
    }

    function setMorph(fraction) {

        elts.text2.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
        elts.text2.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

        fraction = 1 - fraction;
        elts.text1.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
        elts.text1.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

        elts.text1.innerHTML = texts[textIndex % texts.length];
        elts.text2.innerHTML = texts[(textIndex + 1) % texts.length];
    }

    function doCooldown() {
        morph = 0;

        elts.text2.style.filter = "";
        elts.text2.style.opacity = "100%";

        elts.text1.style.filter = "";
        elts.text1.style.opacity = "0%";
    }

    // Animation loop, which is called every frame.
    function animate() {
        requestAnimationFrame(animate);

        let newTime = new Date();
        let shouldIncrementIndex = cooldown > 0;
        let dt = (newTime - time) / 240;
        time = newTime;

        cooldown -= dt;

        if (cooldown <= 0) {
            if (shouldIncrementIndex) {
                textIndex++;
            }

            doMorph();
        } else {
            doCooldown();
        }


    }

    animate();

    // setTimeout(() => {
    //     $(".loader").hide(2700)
    // }, 3000)
    hidePreloder()



    function hidePreloder() {
        let preloader = document.querySelector("#container");
        let opacityValue = 100;
        let opacityPrloader;

        setTimeout(() => {

            opacityPrloader = setInterval(() => {
                preloader.style.height = opacityValue + "vh";
                opacityValue -= 5;
            }, 100);
            setTimeout(() => {
                $(".loader , #container").remove()


                clearTimeout(opacityPrloader);
            }, 2000);
        }, 800)


    }


    $(".child2").hover(function () {
        let x = $(this).children(".child3").clone()
        $(".d").removeClass("animate-r")
        $(this).children(".d").addClass("animate-r")

        $(".target-link").html(x)
    }, function () {

        // $(".target-link").html("")
    })


    $(".target-link").hover(function () {
        $(".child").show()
    })

    $(".navbar1 , .navbar2 , #start , a").hover(function () {

        $(".target-link").html("")
        $(".d").removeClass("animate-r")

    })

    $(".target-link").css({
        background: " #5c9ad5",
        height: "75vh"

    })


    $(".my-sub").on("click", function () {

        $(this).next().slideToggle(400)
    })


    $(".misx").on("click", function () {



        $(this).animate({
            right: "800px",
            width: "71%",
         
        }, 1500, function () {

            $(this).css({
                transition: "all 2s",
                transform: " rotate(360deg) scale(.9) rotate(360deg)  scale(.9) rotate(360deg)  scale(.9)   rotate(360deg)  scale(.9) rotate(360deg)  scale(.9)   scale(.9)     scale(.9)  scale(.9)   scale(.9)     scale(.9)  scale(.9)   scale(.9)     scale(.9)  scale(.9)   scale(.9)  "
            })

            $(this).fadeOut(1000)
            setTimeout(() => {
                $(this).css({
                    "right": "-170px",
                    "top": "157px",
                   
                    "width": "72%",
                    "transform":" rotate(90deg) scale(1)"
                })
                $(".vission-content").hide()
                $(".vis").show()
                $(".mission-content").slideToggle(1000)
            }, 1000);
        })
    })


    $(".vis").on("click", function () {
        $(this).animate({
            right: "800px",
            width: "71%",
         
        }, 1500, function () {
            $(this).css({
                transition: "all 2s",
                transform: " rotate(360deg) scale(.9) rotate(360deg)  scale(.9) rotate(360deg)  scale(.9)   rotate(360deg)  scale(.9) rotate(360deg)  scale(.9)   scale(.9)     scale(.9)  scale(.9)   scale(.9)     scale(.9)  scale(.9)   scale(.9)     scale(.9)  scale(.9)   scale(.9)  "
            })
            $(this).fadeOut(1000)
            setTimeout(() => {


                $(this).css({
                    "right": "-170px",
                    "top": "157px",
                    
                    "width": "72%",
                    "transform":"rotate(90deg) scale(1) "

                })

                $(".mission-content").hide()
                $(".misx").show()
                $(".vission-content").slideToggle(1000)
            }, 1000);
        })
    })


    $(".elx").hover(function(){
        $(this).css({
            "transition":"all 1s",
            "transform":"rotate(360deg)",
            "z-index":"99!important"
        })
    },function(){
        $(this).css({
            "transition":"all 1s",
            "transform":"rotate(-360deg)",
            "z-index":"99!important"
        })
    })

}