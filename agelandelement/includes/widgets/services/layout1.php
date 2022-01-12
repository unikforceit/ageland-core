<?php

    echo'<!--service provide-->
        <section class="service_provide_sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="row h-100">
                            <div class="col-md-12 align-self-center">
                                <div class="service_title title">
                                    <h3>' . $settings['title'] . '</h3>
                                    <p>' . $settings['info'] . '</p>
                                    <a '.get_that_link($settings['link']).' class="btn">'.$settings['button'].'</a>
                                </div>
                                <!--/.title-->
                            </div>
                        </div>

                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6 mrtop-1">';
if ($wp_query1->have_posts()) {
    while ($wp_query1->have_posts()) {
        $wp_query1->the_post();
        echo '<div class="single_service_in bg1" data-aos="flip-down" data-aos-duration="1000">
                                    <div class="icon">
                                        <img src="img/icon/service1.png" alt="#" />
                                        <img src="img/icon/service1bg.png" class="show" alt="#" />
                                        <img src="img/icon/service3bg_hv.png" class="hide" alt="#" />
                                    </div>
                                    <h4><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h4>
                                    <p>' . get_the_excerpt() . '</p>
                                </div>
                                <!--/.single_service_in-->';
    }
    wp_reset_postdata();
}
echo '</div>
                            <div class="col-md-6">';
if ($wp_query->have_posts()) {
    while ($wp_query->have_posts()) {
        $wp_query->the_post();
        echo '<div class="single_service_in bg3" data-aos="flip-down" data-aos-duration="2000">
                                    <div class="icon">
                                        <img src="img/icon/service3.png" alt="#" />
                                        <img src="img/icon/service3bg.png" class="show" alt="#" />
                                        <img src="img/icon/service3bg_hv.png" class="hide" alt="#" />
                                    </div>
                                    <h4><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h4>
                                    <p>' . get_the_excerpt() . '</p>
                                </div>
                                <!--/.single_service_in-->';
    }
    wp_reset_postdata();
}
echo '</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
            <img src="img/shape/img1.png" alt="#" class="shape-one" />
            <img src="img/shape/img2.png" alt="#" class="shape-two" />
            <img src="img/shape/img3.png" alt="#" class="shape-three" />
            <img src="img/shape/img4.png" alt="#" class="shape-four" />
            <img src="img/shape/img5.png" alt="#" class="shape-five" />
            <img src="img/shape/img6.png" alt="#" class="shape-six" />
        </section>
        <!--service provide-->';