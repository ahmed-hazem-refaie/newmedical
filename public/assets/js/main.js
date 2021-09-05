
window.onload = function () {
    
    
    $(".preloader").fadeOut(2000)


 $(".service").on("mouseenter",function(){
    $(this).children().find(".desc").slideDown(500)
 })
 $(".service").on("mouseleave",function(){
    $(this).children().find(".desc").slideUp(500)
 })


 $(".parent").on("mouseenter",function(){
   
   $(this).children(".child").fadeIn(500)
})
$(".parent").on("mouseleave",function(){
   $(this).children(".child").slideUp(0)
})
     
   
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


    $(document).on("click", ".user-cart ", function () {
        $("#popup-cart").show()
        $(".cart-s").show()

    })
    $(document).on("click", "#popup-cart", function (event) {
        $(".cart-s").hide()
        $(this).hide()
        $("section").css("z-index", "1")
    })



    //============================================ calculate cart ================================
    function calculate() {
        let sum = 0;
        $(".ordering").each(function () {
            let price = $(this).children().find(".price").text();
            let quantity = $(this).children().find(".quantity").val();
            sum += parseFloat(price) * parseFloat(quantity);
        })
        $(".sum").text(sum)
        $(".all-sum").text(sum + parseFloat($(".taxes").text()) + parseFloat($(".charge").text()))
    }

    calculate()

    //============================================ favourite cart ================================

    $(document).on("click", ".fav2", function () {
        $(this).hide();
        $("i").show()
        $(this).siblings(".fav2").fadeOut(300).fadeIn(300).show();
    })

    //============================================ remove order from cart ================================
    $(document).on("click", ".r2", function () {
        $(this).parents(".ordering").remove()
        calculate()
    })


    //============================================ change quantity ================================
    $(document).on("change", ".quantity", function () {
        calculate()
    })

    //============================================ Add Rating  ================================
    $(document).on("click", ".rate-v .fa-star", function () {

        let reference = $(this);
        let valueRate = reference.data("value");

        let rateOutPut = "";

        for (var i = 1; i <= valueRate; i++) {

            rateOutPut += `<i data-value="${i}" class="fas fa-active fa-star fa-2x"></i>`
        }

        for (var i = valueRate + 1; i <= 5; i++) {
            rateOutPut += `<i data-value="${i}" class="fas fa-not-active fa-star fa-2x"></i>`
        }
        $(".rate-v").fadeOut(300).fadeIn(300)
        setTimeout(() => {

            $(".rate-v").html(rateOutPut)
        }, 300)

    })

    //============================================ active image  ================================

    $(document).on("click", ".img-sm", function () {

        let image = $(this).children("img");
        image.parent().addClass("active-img")
        image.parent().parent().siblings().children(".border").removeClass("active-img")
        $(".main-img").fadeOut(300).fadeIn(300);
        setTimeout(() => {
            $(".main-img").attr("src", image.attr("src"));
        }, 300)
    })


    //============================================ active heart  ================================

    $(document).on("click", ".fav i", function () {
        $(this).hide();
        $(this).siblings("i").fadeOut(300).fadeIn(300).show();
    })


    //============================================ show preview  ================================

    function showPreview(event) {
        let preview = event.target.previousElementSibling || event.target.parentElement.previousElementSibling

        if (event.target.files.length > 0) {
            let src = URL.createObjectURL(event.target.files[0]);
            preview.src = src
        }
    }

    //============================================ toggle password ================================

    $(".show-pass").on("click", function () {
        $(this).hide()
        $(".hide-pass").show()
        $(".pass").attr("type", "text")
    })

    $(".hide-pass").on("click", function () {
        $(this).hide()
        $(".show-pass").show()
        $(".pass").attr("type", "password")
    })

    //============================================ upload bill ================================

    $(".choose").on("click", function () {

        let target = '.' + $(this).val()

        $(target).show(700).siblings().hide(700)


    })


    //============================================ Start Slider ================================


    // hide Loader
    $('#loader').addClass('hidden');

    // check if document is RTL or LTR
    isRTL = $('html').attr("lang") === 'ar';




    //get current year
    // let d = new Date();
    // $('#current-year')[0].innerText = d.getFullYear()


    // isInViewport function
    $.fn.isInViewport = function () {
        let elementTop = $(this).offset().top;
        let elementBottom = elementTop + $(this).outerHeight();

        let viewportTop = $(window).scrollTop();
        let viewportBottom = viewportTop + $(window).height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
    };

    


    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');

    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });



    // Counter
    $(window).on('scroll', function () {
        $('.counter-number').each(function () {
            if ($(this).isInViewport()) {

                let $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                },
                    {
                        duration: 2000,
                        easing: 'swing',
                        step: function () {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.text(this.countNum);
                            //alert('finished');
                        }
                    });
            } else {
                this.innerText = '00'
            }
        });
    });



    // add .d-none class to selected option
    let selectedValue = $("input[name='payment']:checked").val()
    // add d-none class for both
    $('.monthly,.yearly').toggleClass('d-none')
    // remove d-none class from selected option
    $('.' + selectedValue).removeClass('d-none')


    // Packages type change
    $('#packages-payment input[type="radio"]').on('change', function () {
        $('.monthly,.yearly').toggleClass('d-none')
    })

    // Packages type change
    $('#packages-type').on('change', 'input[type="radio"]', function (e) {
        let val = e.target.value
        // console.log(val)
        $('#packages tbody tr').show();

        // If there is a value hide all the rows except the ones with a data-year of that value
        if (val !== 'all') {
            $('#packages tbody tr').not($('#packages tbody tr[data-pkg-type="' + val + '"]')).hide();
        }
        $("#packages tbody tr:visible").each(function (index) {
            $(this).css("background-color", !(index & 1) ? "rgba(0,0,0,.05)" : "rgba(0,0,0,0)");
        });
    })



    // captcha confirmation
    let recaptcha = document.querySelector('#g-recaptcha-response');

    if (recaptcha) {
        recaptcha.setAttribute("required", "required");
        recaptcha.oninvalid = function (e) {
            $("#not-robot").removeClass("d-none").addClass("d-block")
        }
    }

    $('[data-toggle="tooltip"]').tooltip()
};


/////////////// fixed menu on scroll
$(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
        $('.navbar2').addClass("fixed-top animate");
        $('.m-log').addClass("animate2");

        $('#scroll-top').addClass('show')

    }else{
        $('.navbar2').removeClass("fixed-top animate");
        $('.m-log').removeClass("animate2");

        $('#scroll-top').removeClass('show')
    }
});


function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    let charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
function recaptchaCallback() {
    $("#not-robot").removeClass("d-block").addClass("d-none")
};


// add class "active" to active route
const path = window.location.href; // because the 'href' property of the DOM element is the absolute path

$('nav li a').each((index, item) => {
    if (item.href === path) {
        item.parentElement.classList.add('active')
    }
});
$('#application-tabs a.single-tab').each((index, item) => {
    if (item.href === path) {
        item.classList.add('active')
        item.href = "#"
    }
});
$('#shipment-tabs a').each((index, item) => {
    if (item.href === path) {
        item.classList.add('btn-primary')
        item.classList.remove('btn-l-gray')
        item.href = "#"
    }
});
$("#switch-language").on("click", function () {
    if (isRTL) {
        $("html").attr("lang", "en")
        $("#switch-language").text("ar")
    } else {
        $("html").attr("lang", "ar")
        $("#switch-language").text("en")
    }
    isRTL = $('html').attr("lang") === 'ar'
});










