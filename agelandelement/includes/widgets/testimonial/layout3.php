<?php
    echo'<!-- testimonial section -->
        <section class="testimonial_section overflow-hidden testimonial_bg_img grdient_overlay section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="swiper-container pb-0 client_slider_thumbs">
                            <div class="swiper-wrapper">';

if ($settings['testi_list']) {
    $loop=0;
    foreach ($settings['testi_list'] as $testi) {
        $loop++;
        if ($loop==1){
            $active='swiper-slide-thumb-active';
        }else {
            $active='';
        }
        echo ' <div class="swiper-slide '.$active.'">
                                    <div class="client_slider_thumb">
                                        '.ageland_get_that_image($testi['thumb']).'
                                    </div>
                                </div>';
    }
}
echo '</div>
                        </div>
                    </div>
                    <div class="col-lg-5 pl-lg-80">
                        <div class="swiper-container client_slider_content">
                            <div class="swiper-wrapper">';

if ($settings['testi_list']) {
    foreach ($settings['testi_list'] as $testi) {
        echo '<div class="swiper-slide">
                                    <div class="client_slider_content_wrapper">
                                        '.ageland_get_that_image($settings['quote'],'testimonial_quote_img').'
                                        <p class="client_speech">
                                            '.$testi['t_info'].'
                                        </p>
                                        <h4 class="client_name">'.$testi['t_title'].'</h4>
                                        <p class="client_position">'.$testi['t_subtitle'].'</p>
                                    </div>
                                </div>';
    }
}
echo '</div>
                        </div>
                    </div>
                </div>
            </div>
            '.ageland_get_that_image($settings['map_thum'],'testimonial_shape').'
        </section>
        <!-- testimonial section end -->';