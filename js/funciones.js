$(document).ready(function () {

    //slides js
    $(function () {
        $('#slides').slidesjs({
            width: 940,
            height: 528,
            play: {
                active: false,
                // [boolean] Generate the play and stop buttons.
                // You cannot use your own buttons. Sorry.
                interval: 4000,
                // [number] Time spent on each slide in milliseconds.
                auto: true,
                // [boolean] Start playing the slideshow on load.
                swap: true,
                // [boolean] show/hide stop and play buttons
                pauseOnHover: true,
                // [boolean] pause a playing slideshow on hover
                restartDelay: 2500
                    // [number] restart delay on inactive slideshow
            },
            pagination: {
                effect: "slide"
            }, // slide o fade

            effect: {
                slide: {
                    speed: 2000,
                }
            } // velocidad de la transicion
        });
    });
    //jQuery to collapse the navbar on scroll
    $(window).scroll(function () {
        if ($(".navbar").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
    });

    //jQuery for page scrolling feature - requires jQuery Easing plugin
    $(function () {
        $('a.page-scroll').bind('click', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });
    });


});