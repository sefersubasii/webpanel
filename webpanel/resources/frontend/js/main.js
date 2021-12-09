$(document).ready(function () {
    var footer = document.querySelector(".footer");
    window.onscroll = function (event) {
        ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) ? footer.classList.add("visible"): footer.classList.remove("visible")
    };

    //lazy load
    $('.lazy').Lazy();

    var navbarToggle = document.querySelector(".navbar-toggler");


    //full page section scroll
    $('#homepage').fullpage({
        scrollingSpeed: 600,
        autoScrolling: true,
        fitToSection: false,
        fitToSectionDelay: 2000,
        anchors: ['1', '2', '3', '4', '5', '6', '7'],
        sectionsColor: ['#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff'],
        verticalCentered: false,
        navigation: false,
        responsiveWidth: 768,
        afterLoad: function (i, e) {
            setFooterHeight();
            if (e > 1 && e <= 6) {
                $('.new-logo').removeClass('d-none').fadeIn(100);
            } else {
                $('.new-logo').addClass('d-none').fadeOut(100);
            }
            $('.section.active .item-text-area').fadeIn(300);
            $('.section.active .home-image').addClass('home-image-effect');
            if (e == 1) {
                $('#go-top').css({
                    display: 'none'
                });
                $('.scroll-down-area').fadeIn();
            } else {
                $('#go-top').css({
                    display: 'block'
                });
                $('.scroll-down-area').fadeOut();
            }
            // if (e !== 7) {
            //     $('.scroll-down-area').fadeIn();
            // } else {
            //     $('.scroll-down-area').fadeOut();
            // }
            // if (e < 7) {
            //     $(".scroll-down-area a").attr("href", "#" + (e + 1));
            // }
        },
        onLeave: function (index, nextIndex, direction) {
            if (direction == "up") {
                $(".section").removeClass("down");
                $(".section").removeClass("next");
                $(".section").removeClass("prev");
                $("#homepage .section:nth-child(" + nextIndex + ")").addClass("up");
                $("#homepage .section:nth-child(" + nextIndex + ")").next().addClass("next up");
                $("#homepage .section:nth-child(" + nextIndex + ")").prev().addClass("prev up");
            } else {
                $(".section").removeClass("up");
                $(".section").removeClass("next");
                $(".section").removeClass("prev");
                $("#homepage .section:nth-child(" + nextIndex + ")").addClass("down");
                $("#homepage .section:nth-child(" + nextIndex + ")").next().addClass("next down");
                $("#homepage .section:nth-child(" + nextIndex + ")").prev().addClass("prev down");
            }
            setFooterHeight();

        },
        afterRender: function () {
            setFooterHeight();
        },
        afterResize: function () {
            setFooterHeight();
        },
        afterReBuild: null,
        afterSlideLoad: null,
        onSlideLeave: null
    });
    setFooterHeight();

    navbarToggle.addEventListener("click", function () {
        if (document.querySelector(".subPage")) {
            if (navbarToggle.className === "navbar-toggler pr-0 menu-open") {
                navbarToggle.classList.remove("menu-open");
                $("body").css("overflow-y", "auto");
            } else {
                navbarToggle.classList.add("menu-open");
                $("body").css("overflow-y", "hidden");
            }
        } else {
            if (navbarToggle.className === "navbar-toggler pr-0 menu-open") {
                navbarToggle.classList.remove("menu-open");
                $.fn.fullpage.setAllowScrolling(true);
                if (window.innerWidth <= 580) {
                    $("body").css("overflow-y", "auto");
                }
            } else {
                navbarToggle.classList.add("menu-open");
                $.fn.fullpage.setAllowScrolling(false);
                if (window.innerWidth <= 580) {
                    $("body").css("overflow-y", "hidden");
                }
            }
        }
    })

    //owl
    $('.main-owl').owlCarousel({
        loop: true,
        margin: 0,
        dots: false,
        nav: true,
        navSpeed: false,
        autoplay: true,
        autoplayTimeout: 6000,
        // animateIn:'zoomInRight',
        animateOut: 'zoomOutRight',
        items: 1,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ]
    });

    if ($("body").hasClass("findFilterProduct")) {
        $(".is-active").trigger("click");
    }

});

function setFooterHeight() {
    $('.footer').css({
        height: 'auto'
    });
    $('.footer .fp-tableCell').css({
        height: 'auto'
    });
}
//Main Menu
(function ($) {
    $('.navbar-toggler').on('click', function () {
        if ($('.navbar-collapse').hasClass('show')) {
            $('.navbar-toggler span').removeClass('fa-times').addClass('fa-bars');
        } else {
            $('.navbar-toggler span').removeClass('fa-bars').addClass('fa-times');
        }
    });
})(jQuery);
//Search
(function ($) {
    $('.search-area button').on('click', function () {
        let input = $('.search-area input');
        if (input.val() != '') {
            //post
        }
        input.toggle(1000);
        input.focus();
    });
})(jQuery);
//Left Menu
(function ($) {
    $('.panel-body .nav-link').on('click', function () {
        $('.panel-body .nav-link').each(function (el, i) {
            $(this).removeClass('active');
        });
    });
    $('#mobileMenu').on('click', function () {
        $('.rigthMenu').toggle();
    });
    $('.rigthMenu .mobile-link').on('click', function () {
        setTimeout(function () {
            $('.rigthMenu').toggle();
        }, 250);
    });
})(jQuery);

//Language
$('.dropdown-menu a').click(function () {
    $('#selected').html($(this).html());
});

//Product Detail Small Images Click Event
// (function ($) {
//     $('.figure-img').on('click', function () {
//         $('html,body').animate({
//             scrollTop: $("#main-product").offset().top
//         }, 'slow');
//     });
// })(jQuery);
