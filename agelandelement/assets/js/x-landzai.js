(function ($) {
"use strict";

    var AgelandGlobal = function ($scope, $) {

        // Js Start
            $('[data-background]').each(function() {
                $(this).css('background-image', 'url('+ $(this).attr('data-background') + ')');
            });
        if($('.wow').length){
            new WOW({
                offset: 100,
                mobile: true
            }).init()
        }
        jQuery(window).on('scroll', function() {
            if (jQuery(window).scrollTop() > 250) {
                jQuery('.ageland-sticky-header').addClass('sticky-on')
            } else {
                jQuery('.ageland-sticky-header').removeClass('sticky-on')
            }
        });
        $(".ageland-icon-lightbox a, .popup-video").magnificPopup({
            type: 'iframe',
            iframe: {
                patterns: {
                    youtube: {
                        index: 'youtube.com/',
                        id: 'v=',
                        src: 'https://www.youtube.com/embed/%id%?autoplay=1'
                    },
                    vimeo: {
                        index: 'vimeo.com/',
                        id: '/',
                        src: '//player.vimeo.com/video/%id%?autoplay=1'
                    },
                    gmaps: {
                        index: '//maps.google.',
                        src: '%id%&output=embed'
                    }
                },
                srcAction: 'iframe_src',
            }
        });
        // Js End

    };

    var AgelandNav = function ($scope, $) {

        $scope.find('.ageland-builder-nav').each(function () {
            var settings = $(this).data('ageland');

        // Js Start
            jQuery(".menu-bar span").on("click", function () {
                jQuery('.mobile-menu').addClass('open-menu');
                jQuery('.menu-overlay').addClass('open')
            });

            jQuery('.menu-overlay').on('click', function () {
                jQuery('.mobile-menu').removeClass('open-menu')
                jQuery('.menu-overlay').removeClass('open')
            });
            /* Sub Menu Toggle*/
            if($('.mobile-menu li.menu-item-has-children ul').length){
                $('.mobile-menu li.menu-item-has-children').append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');
                $('.mobile-menu li.menu-item-has-children .dropdown-btn').on('click', function() {
                    $(this).prev('ul').slideToggle(500);
                });
            }
        // Js End
        });

    };

    var AgelandBrand = function ($scope, $) {

        $scope.find('.brands-areas').each(function () {
            var settings = $(this).data('ageland');

        // Js Start
            $(".slide-brands").slick({
                infinite: true,
                speed: 500,
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                dots: false,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                        },
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 3,
                        },
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                ],
            });
        // Js End
        });

    };
    var AgelandWork = function ($scope, $) {

        $scope.find('.work-area').each(function () {
            var settings = $(this).data('ageland');

        // Js Start
            var slider = $(".work-slide");
            var scrollCount = null;
            var scroll = null;
            slider.slick({
                dots: true,
                arrows: false,
                vertical: true,
                infinite: true,
                speed: 500,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
            });
            slider.on("wheel", function (e) {
                e.preventDefault();
                clearTimeout(scroll);
                scroll = setTimeout(function () {
                    scrollCount = 0;
                }, 200);
                if (scrollCount) return 0;
                scrollCount = 1;

                if (e.originalEvent.deltaY < 0) {
                    $(this).slick("slickNext");
                } else {
                    $(this).slick("slickPrev");
                }
            });

            // Js End
        });

    };
    var AgelandScreenshot = function ($scope, $) {

        $scope.find('.app-screens-area').each(function () {
            var settings = $(this).data('ageland');

        // Js Start
            $(".app-screens-slide").slick({
                infinite: true,
                speed: 500,
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                dots: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                        },
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                ],
            });

            // Js End
        });

    };

    var AgelandTestimonial = function ($scope, $) {

        $scope.find('.testimonial-area').each(function () {
            var settings = $(this).data('ageland');

        // Js Start
            $(".testimonial-slide").slick({
                infinite: true,
                speed: 500,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                dots: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                ],
            });
            // Js End
        });

    };

    var AgelandTestimonial2 = function ($scope, $) {

        $scope.find('.testimonial-two-area').each(function () {
            var settings = $(this).data('ageland');

        // Js Start
    $(".testimonial-slide-two").slick({
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        arrows: true,
        prevArrow: '<i class="arow-prev fas fa-chevron-left"></i>',
        nextArrow: '<i class="arow-next fas fa-chevron-right"></i>',
      });
            // Js End
        });

    };

    var AgelandTestimonial3 = function ($scope, $) {

        $scope.find('.testimonial-three-area').each(function () {
            var settings = $(this).data('ageland');

        // Js Start
        $(".testimonial-three-active").slick({
            infinite: true,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            dots: true,
            arrows: false,
            responsive: [
              {
                breakpoint: 992,
                settings: {
                  slidesToShow: 2,
                },
              },
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 2,
                },
              },
              {
                breakpoint: 576,
                settings: {
                  slidesToShow: 1,
                },
              },
            ],
          });
            // Js End
        });

    };

    var AgelandTestimonial4 = function ($scope, $) {

        $scope.find('.testimonial-four-area').each(function () {
            var settings = $(this).data('ageland');

        // Js Start
        $(".testimonial-slide-four").slick({
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            dots: true,
            arrows: true,
            prevArrow: '<i class="arow-prev fas fa-chevron-left"></i>',
            nextArrow: '<i class="arow-next fas fa-chevron-right"></i>',
          });
            // Js End
        });

    };
    var AgelandTestimonial5 = function ($scope, $) {

        $scope.find('.testimonial-five-area').each(function () {
            var settings = $(this).data('ageland');

            // Js Start
            /*-------------------------------------------
    testimonial-slide-five active
    --------------------------------------------- */
            $(".testimonial-slide-five").slick({
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                dots: false,
                arrows: true,
                prevArrow: '<i class="arow-prev fas fa-chevron-left"></i>',
                nextArrow: '<i class="arow-next fas fa-chevron-right"></i>',
            });
            // Js End
        });

    };
    var Agelandsinglecounter = function ($scope, $) {

        $scope.find('.counter-area').each(function () {
            var settings = $(this).data('ageland');

            // Js Start
            jQuery(".counter-list").appear(function () {
                jQuery(".counter").counterUp({
                    delay: 10,
                    time: 1000,
                });
            });
            // Js End
        });

    };
    var AgelandProject = function ($scope, $) {

        $scope.find('.portfolio-area').each(function () {
            var settings = $(this).data('ageland');

            // Js Start
            /*---------------------------------
    isotope activation
    -----------------------------------*/
            $('.grid').appear(function() {
                // filter items on button click
                $('.filtering-button').on('click', 'li', function () {
                    var filterValue = $(this).attr('data-filter');
                    $grid.isotope({ filter: filterValue });
                });
                var $grid = $('.grid').isotope({
                    // set itemSelector so .grid-sizer is not used in layout
                    itemSelector: '.grid-item',
                    percentPosition: true,
                    animationOptions: {
                        duration: 500,
                        easing: 'zoom-in'
                    },
                    masonry: {
                        // use element for option
                        columnWidth: '.grid-item'
                    },
                    transitionDuration: '.9s'
                })
                $('.filtering-button li').on('click',  function () {
                    $('.filtering-button li').removeClass('active');
                    $(this).addClass('active');
                });
            });

            // Js End
        });

    };

    var AgelandContactus = function ($scope, $) {

        $scope.find('.contact-area, .contact-area-v2').each(function () {
            var settings = $(this).data('ageland');

            // Js Start
            /*----------------------------
    google-map
    ------------------------------*/
            if ($('#gmap').length > 0) {
                var latitude = $(this).data('latitude');
                var longitude = $(this).data('longitude');
                new GMaps({
                    div: '#gmap',
                    lat: latitude, // 23.7947172,90.3971412
                    lng: longitude,
                    scrollwheel: false,
                    styles: [
                        {
                            "featureType": "landscape",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#dddddd"
                                },
                                {
                                    "lightness": 20
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 17
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 29
                                },
                                {
                                    "weight": 0.2
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 18
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#dddddd"
                                },
                                {
                                    "lightness": 16
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 21
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 21
                                }
                            ]
                        },
                        {
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 16
                                }
                            ]
                        },
                        {
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "on"
                                }
                            ]
                        }
                    ]
                }).addMarker({
                    lat: latitude, //23.792930, 90.403798
                    lng: longitude,
                    infoWindow: {
                        content: '<div class="map-marker-box"><h2 class="title">Headquarter</h2> <p>9541 Brightwell Dr, <br /> Indianapolis, IN 46260</p></div>',
                    }
                });
            };
            // Js End
        });

    };


    $(window).on('elementor/frontend/init', function () {
        if (elementorFrontend.isEditMode()) {
            console.log('Elementor editor mod loaded');
            elementorFrontend.hooks.addAction('frontend/element_ready/global', AgelandGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/nav-builder.default', AgelandNav);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-brand.default', AgelandBrand);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-howwork.default', AgelandWork);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-sslider.default', AgelandScreenshot);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-testimonial.default', AgelandTestimonial);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-testimonial.default', AgelandTestimonial2);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-testimonial.default', AgelandTestimonial3);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-testimonial.default', AgelandTestimonial4);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-testimonial.default', AgelandTestimonial5);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-counter-step.default', Agelandsinglecounter);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-project.default', AgelandProject);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-contactus.default', AgelandContactus);
        }
        else {
            console.log('Elementor frontend mod loaded');
            elementorFrontend.hooks.addAction('frontend/element_ready/global', AgelandGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-brand.default', AgelandBrand);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-howwork.default', AgelandWork);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-sslider.default', AgelandScreenshot);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-testimonial.default', AgelandTestimonial);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-testimonial.default', AgelandTestimonial2);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-testimonial.default', AgelandTestimonial3);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-testimonial.default', AgelandTestimonial4);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-testimonial.default', AgelandTestimonial5);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-counter-step.default', Agelandsinglecounter);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-project.default', AgelandProject);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-contactus.default', AgelandContactus);
        }
    });
console.log('addon js loaded');
})(jQuery);