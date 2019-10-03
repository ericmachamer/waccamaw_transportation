(function ($) {
    function section1() {
        var makeFullscreen = function () {
            var extraHeight = $(".section.s2").outerHeight();
            $slideshow.find(".slide").height($(window).height() - $("#wpadminbar").height() - extraHeight);
        };

        var $section = $(".section.s1");
        var $slideshow = $section.find(".slideshow.home");

        if ($slideshow.hasClass("fullscreen")) {
            makeFullscreen();

            $(window).on("resize", function () {
                makeFullscreen();
            });
        }



    }

    function section4() {
        var $section = $(".section.s4");
        var $counters = $section.find(".counter");
        var duration = 2000;
        var interval = 50;
        var count = function ($item) {
            var goal = parseInt($item.attr("data-target"));
            var step = goal / (duration / interval);
            var delay;

            delay = window.setInterval(function () {
                var current = parseInt($item.text());
                if (current < goal) {
                    var following;
                    while (Math.ceil(step + current) > goal) {
                        step--;
                    }
                    following = Math.ceil(step + current);

                    current = following;
                    $item.text(current);
                }
                else {
                    window.clearInterval(delay);
                }

            }, interval);
        };

        $section.on("waypoint", function () {
            $counters.each(function (index, item) {
                count($(item));
            });
        });
    }

    function section7() {
        var $section = $(".section.s7");
        var $slideshow = $section.find(".carousel");
        $slideshow.owlCarousel({
            dots: true,
            nav: false,
            loop: true,
            autoplay: $slideshow.find(".item").length > 1,
            autoplayTimeout: 7000,
            items: 1,
            transitionStyle: "fade"
        });
    }

    function section9() {
        var $section = $(".section.s9");
        var $carousel = $section.find(".carousel");
        if ($carousel.length > 0) {
            $carousel.owlCarousel({
                dots: false,
                nav: true,
                loop: false,
                navText: [
                    '<i class="ion-ios-arrow-left"></i>',
                    '<i class="ion-ios-arrow-right"></i>'
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    480: {
                        items: 3
                    },
                    780: {
                        items: 4
                    },
                    1080: {
                        items: 5
                    }
                }
            });
        }
    }


    $(document).on("ready", function () {
        section1();
        section4();
        section7();
        section9();
    });
})(jQuery);