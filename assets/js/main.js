$(function () {

    $('a.iframe').fancybox()

    // Notification Close Button
    $(".notification-close").on("click", function () {
        $("#notification").animate({
            height: "toggle"
        }, 500);
    });


    // Mobile Menu
    $(".menu-toggle").on("click", function () {
        $(".mobile-menu").animate({
            height: "toggle"
        }, 500, function() {
            $(".mobile-menu").css({
                "height" : "100vh"
            })
        });
    });


    // Hero Slider
    $('.slider').owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        autoplay: false,
        smartSpeed: 500,
        dotsEach: true,
        navText: [
            '<img src="/assets/img/hero-slider-left-arrow.png" />',
            '<img src="/assets/img/hero-slider-right-arrow.png" />'
        ]
    })

    // Product Slider
    $('.product-slider').owlCarousel({
        items: 1,
        loop: false,
        nav: true,
        autoplay: true,
        smartSpeed: 500,
        dotsEach: false,
        margin: 30,
        navText: [
            '<img src="/assets/img/hero-slider-left-arrow.png" />',
            '<img src="/assets/img/hero-slider-right-arrow.png" />'
        ],
        responsive: {
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    })


})