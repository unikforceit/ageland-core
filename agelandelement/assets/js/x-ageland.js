(function ($) {
    "use strict";

    var AgelandGlobal = function ($scope, $) {

        // Js Start
        $('[data-background]').each(function () {
            $(this).css('background-image', 'url(' + $(this).attr('data-background') + ')');
        });

        AOS.init();

        // Js End

    };


    var AgelandBrandOne = function ($scope, $) {

        $scope.find('.brand-logo').each(function () {
            var settings = $(this).data('ageland');

            // Js Start
            var swiperBannerSlider = new Swiper(".brandSlider", {
                slidesPerView: 4,
                loop: true,
                // autoplay: true,
                breakpoints: {
                    345: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    525: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 40,
                    },
                    992: {
                        slidesPerView: 4,
                        spaceBetween: 40,
                    },
                },
            });
            // Js End
        });

    };


    $(window).on('elementor/frontend/init', function () {
        if (elementorFrontend.isEditMode()) {
            console.log('Elementor editor mod loaded');
            elementorFrontend.hooks.addAction('frontend/element_ready/global', AgelandGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-brand.default', AgelandBrandOne);

        } else {
            console.log('Elementor frontend mod loaded');
            elementorFrontend.hooks.addAction('frontend/element_ready/global', AgelandGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-brand.default', AgelandBrandOne);
        }
    });
    console.log('addon js loaded');
})(jQuery);