(function ($) {
"use strict";

    var AgelandGlobal = function ($scope, $) {

        // Js Start
            $('[data-background]').each(function() {
                $(this).css('background-image', 'url('+ $(this).attr('data-background') + ')');
            });

            AOS.init();

        // Js End

    };


    var Agelandvideo = function ($scope, $) {

        $scope.find('.hero_banner').each(function () {
            var settings = $(this).data('ageland');

        // Js Start
            var $videoSrc;
            $('.video-btn').on('click', function() {
                $videoSrc = $(this).data("src");
            });
            console.log($videoSrc);



            // when the modal is opened autoplay it
            $('#myModal').on('shown.bs.modal', function(e) {

                // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
                $("#video").attr('src', $videoSrc + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1");
            })


            // stop playing the youtube video when I close the modal
            $('#myModal').on('hide.bs.modal', function(e) {
                // a poor man's stop video
                $("#video").attr('src', $videoSrc);
            })
        // Js End
        });

    };

    var Agelandblog = function ($scope, $) {

        $scope.find('.blog_sec').each(function () {
            var settings = $(this).data('ageland');

        // Js Start
            var owls = $("#blog_slider_owl");
            owls.owlCarousel({

                autoplay: false,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                items: 3,
                loop: true,
                center: false,
                margin: 30,
                stagePadding: 0,
                dots: true,
                nav: false,


                merge: false,
                mergeFit: true,
                autoWidth: false,
                animateOut: 'fadeOutRight',
                animateIn: 'fadeInLeft',
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,

                    },
                    580: {
                        items: 1,

                    },
                    768: {
                        items: 2,

                    },
                    992: {
                        items: 3,

                        loop: true
                    }
                },
            });
        // Js End
        });

    };

    var Agelandtesti = function ($scope, $) {

        $scope.find('.testimonials_home2').each(function () {
            var settings = $(this).data('ageland');

        // Js Start
            var owls = $("#testimonials_home2_owl");
            owls.owlCarousel({

                autoplay: false,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                items: 1,
                loop: true,
                center: false,
                margin: 0,
                stagePadding: 0,
                dots: true,
                nav: true,


                merge: false,
                mergeFit: true,
                autoWidth: false,
            });
        // Js End
        });

    };



    $(window).on('elementor/frontend/init', function () {
        if (elementorFrontend.isEditMode()) {
            console.log('Elementor editor mod loaded');
            elementorFrontend.hooks.addAction('frontend/element_ready/global', AgelandGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-banner.default', Agelandvideo);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-blog.default', Agelandblog);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-testimonial.default', Agelandtesti);

        }
        else {
            console.log('Elementor frontend mod loaded');
            elementorFrontend.hooks.addAction('frontend/element_ready/global', AgelandGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-banner.default', Agelandvideo);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-blog.default', Agelandblog);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-testimonial.default', Agelandtesti);
        }
    });
console.log('addon js loaded');
})(jQuery);