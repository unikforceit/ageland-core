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


    var Agelandvideo = function ($scope, $) {

        $scope.find('.hero_banner').each(function () {
            var settings = $(this).data('ageland');

            // Js Start
            var $videoSrc;
            $('.video-btn').on('click', function () {
                $videoSrc = $(this).data("src");
            });
            console.log($videoSrc);


            // when the modal is opened autoplay it
            $('#myModal').on('shown.bs.modal', function (e) {

                // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
                $("#video").attr('src', $videoSrc + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1");
            })


            // stop playing the youtube video when I close the modal
            $('#myModal').on('hide.bs.modal', function (e) {
                // a poor man's stop video
                $("#video").attr('src', $videoSrc);
            })
            // Js End
        });

    };
    var Agelandvideo1 = function ($scope, $) {

        $scope.find('.ag_banner_part').each(function () {
            var settings = $(this).data('ageland');

            // Js Start
            //popup gallery
            var video_popup_btn = $('.video_popup_btn');
            if (video_popup_btn.length) {
                video_popup_btn.magnificPopup({
                    type: 'iframe',
                    removalDelay: 160,
                    preloader: false,
                });
            }
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

    var Agelandblog2 = function ($scope, $) {

        $scope.find('.blog_sec').each(function () {
            var settings = $(this).data('ageland');

            // Js Start
            var owls = $(".blog_slider_2");
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
                        items: 1,
                    },
                    992: {
                        items: 2,
                        loop: true
                    }
                },
            });
            // Js End
        });

    };
    var Agelandtesti2 = function ($scope, $) {

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
    var Agelandtesti3 = function ($scope, $) {

        $scope.find('.testimonial_bg_img').each(function () {
            var settings = $(this).data('ageland');

            // Js Start
            var galleryThumbs = new Swiper('.client_slider_thumbs', {
                spaceBetween: 10,
                slidesPerView: 5,
                loopedSlides: 5, //looped slides should be the same
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
            });
            var galleryTop = new Swiper('.client_slider_content', {
                spaceBetween: 10,
                loop: true,
                loopedSlides: 5, //looped slides should be the same
                thumbs: {
                    swiper: galleryThumbs,
                },
            });
            // Js End
        });

    };
    var Agelandfaq = function ($scope, $) {

        $scope.find('.faq_section').each(function () {
            var settings = $(this).data('ageland');

            // Js Start
            // (Optional) Active an item if it has the class "is-active"
            $(".dl_accordion > .dl_accordion_item.is-active").children(".dl_accordion_panel").slideDown();

            $(".dl_accordion > .dl_accordion_item").on('click', function () {
                // Cancel the siblings
                $(this).siblings(".dl_accordion_item").removeClass("is-active").children(".dl_accordion_panel").slideUp();
                // Toggle the item
                $(this).toggleClass("is-active").children(".dl_accordion_panel").slideToggle("ease-out");
            });
            // Js End
        });

    };
    var Agelandcase = function ($scope, $) {

        $scope.find('.case_studies_sec').each(function () {
            var settings = $(this).data('ageland');

            // Js Start
            // (Optional) Active an item if it has the class "is-active"
            var owls = $("#case-slider-owl");
            owls.owlCarousel({

                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                items: 1,
                loop: true,
                center: false,
                margin: 15,
                stagePadding: 0,
                dots: true,
                nav: false,


                merge: false,
                mergeFit: true,
                autoWidth: false,
                animateOut: 'fadeOutRight',
                animateIn: 'fadeInLeft',
            });
            // Js End
        });

    };
    var Agelandworkgrid = function ($scope, $) {

        $scope.find('.latest_work_sec').each(function () {
            var settings = $(this).data('ageland');

            // Js Start
            // init Isotope
            var $grid = $('.grid').isotope({
                itemSelector: '.grid-item',
                percentPosition: true,
                masonry: {
                    columnWidth: '.grid-sizer'
                }
            });
            // Js End
        });

    };
    var Agelandcase5 = function ($scope, $) {

        $scope.find('.case_studies_section').each(function () {
            var settings = $(this).data('ageland');

            // Js Start
            var owls = $(".blog_slider_3");
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
                        items: 1,
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
    var Pricingtable = function ($scope, $) {

        $scope.find('.pricing_plan_sec').each(function () {
            var settings = $(this).data('ageland');

            // Js Starts
            var monthly_price_table = $('#price_tables').find('.monthly');
            var yearly_price_table = $('#price_tables').find('.yearly');


            $('.switch-toggles').find('.monthly').addClass('active');
            $('#price_tables').find('.monthly').addClass('active');

            $('.switch-toggles').find('.monthly').on('click', function () {
                $(this).addClass('active');
                $(this).closest('.switch-toggles').removeClass('active');
                $(this).siblings().removeClass('active');
                monthly_price_table.addClass('active');
                yearly_price_table.removeClass('active');
            });

            $('.switch-toggles').find('.yearly').on('click', function () {
                $(this).addClass('active');
                $(this).closest('.switch-toggles').addClass('active');
                $(this).siblings().removeClass('active');
                yearly_price_table.addClass('active');
                monthly_price_table.removeClass('active');
            });

            // Js End
        });

    };
    var Pricingtable2 = function ($scope, $) {

        $scope.find('.pricing_plan_sec.home2').each(function () {
            var settings = $(this).data('ageland');

            // Js Starts
            var swiper = new Swiper('.swiper-container.price', {
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                    clickable: true,
                },
                speed: 1000,
                effect: 'coverflow',
                loop: true,
                centeredSlides: true,
                slidesPerView: 'auto',
                coverflowEffect: {
                    rotate: 0,
                    stretch: 100,
                    depth: 180,
                    modifier: 2,
                    slideShadows: false,
                }
            });
            // Js End
        });

    };


    $(window).on('elementor/frontend/init', function () {
        if (elementorFrontend.isEditMode()) {
            console.log('Elementor editor mod loaded');
            elementorFrontend.hooks.addAction('frontend/element_ready/global', AgelandGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-banner.default', Agelandvideo);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-banner.default', Agelandvideo1);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-blog.default', Agelandblog);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-blog.default', Agelandblog2);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-testimonial.default', Agelandtesti2);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-testimonial.default', Agelandtesti3);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-faq.default', Agelandfaq);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-project.default', Agelandcase);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-project.default', Agelandcase5);
            elementorFrontend.hooks.addAction('frontend/element_ready/pricing-table.default', Pricingtable);
            elementorFrontend.hooks.addAction('frontend/element_ready/pricing-table.default', Pricingtable2);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-project.default', Agelandworkgrid);

        } else {
            console.log('Elementor frontend mod loaded');
            elementorFrontend.hooks.addAction('frontend/element_ready/global', AgelandGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-banner.default', Agelandvideo);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-banner.default', Agelandvideo1);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-blog.default', Agelandblog);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-blog.default', Agelandblog2);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-testimonial.default', Agelandtesti2);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-testimonial.default', Agelandtesti3);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-faq.default', Agelandfaq);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-project.default', Agelandcase);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-project.default', Agelandcase5);
            elementorFrontend.hooks.addAction('frontend/element_ready/pricing-table.default', Pricingtable);
            elementorFrontend.hooks.addAction('frontend/element_ready/pricing-table.default', Pricingtable2);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-project.default', Agelandworkgrid);
        }
    });
    console.log('addon js loaded');
})(jQuery);