(function ($) {
    "use strict";
    // Spinner
    let spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();

    // Initiate the wowjs
    new WOW().init();

    // Fixed Navbar
    $(window).scroll(function () {
        if ($(window).width() < 992) {
            if ($(this).scrollTop() > 45) {
                $('nav').addClass('shadow py-2');
            } else {
                $('nav').removeClass('shadow py-2');
            }
        } else {
            if ($(this).scrollTop() > 45) {
                $('nav').addClass('py-2').css('top', $(".top-bar").height);
            } else {
                $('nav').removeClass('py-2').css('top', 0);
            }
        }
    });
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1200) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });
    $("#s1").css("display","flex");

    (function(){
        window.addEventListener("mousemove", func);

        function func(e) {
            let xpos = e.clientX;
            let ypos = e.clientY;

            let imgAnimate = document.querySelectorAll('.js-anim-img');

            imgAnimate.forEach(item => {
                item.style.bottom = `${- 0 + (ypos/80)}px`;
                item.style.right = `${- 0 + (xpos/80)}px`;
            });
        };
    })();



})(jQuery);

