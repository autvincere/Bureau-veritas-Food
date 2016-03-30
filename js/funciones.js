$(document).ready(function () {

    $('.flexslider').flexslider({
        animation: "slide"
    });

    //flexslider
    $(window).scroll(function () {
        var w = window.innerWidth;

        if ($(".navbar").offset().top >= 80) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
            $("img#movil").fadeIn();;
            $("img#desktop").hide();
//        }else if
//            ($(".navbar").offset().top < 80 & w >= 767){ 
//            $(".navbar-fixed-top").addClass("top-nav-collapse");
//            $("img#movil").fadeIn();;
//            $("img#desktop").hide();  
        }else{
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
            $("img#movil").hide();
            $("img#desktop").fadeIn();;
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
    
    // hover servicios
      $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 


});