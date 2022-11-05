<?php
//
//    echo '<!--hero section-->
//        <section class="hero_banner home2" id="home_id">
//            <div class="container">
//                <div class="row">
//                    <div class="col-md-7">
//                        <div class="hero_inside_text">
//                            <h4>'.$settings['sub_title'].'</h4>
//                            <h1>'.$settings['title'].'</h1>
//                            <p>'.$settings['info'].'</p>
//                            <div class="hero-btn">
//                                <a '.ageland_get_that_link($settings['link1']).' class="btn">'.$settings['button1'].'</a>
//                            </div>
//                            <ul class="banner-social-circle ext">';
//if ($settings['icon_list']) {
//    $loop=0;
//    foreach ($settings['icon_list'] as $icon) {
//        $loop++;
//        if ($loop==1){
//            $cls='one';
//        }elseif ($loop==2){
//            $cls='two';
//        }elseif ($loop==3){
//            $cls='three';
//        }else {
//            $cls='four';
//        }
//        echo '<li><a '.ageland_get_that_link($icon['link11']).' class="'.$cls.'">';\Elementor\Icons_Manager::render_icon( $icon['icon1'], [ 'aria-hidden' => 'true' ] );echo'</a></li>
//<li><a '.ageland_get_that_link($icon['link11']).' class="'.$cls.'">';\Elementor\Icons_Manager::render_icon( $icon['icon1'], [ 'aria-hidden' => 'true' ] );echo'</a></li>
//<li><a '.ageland_get_that_link($icon['link11']).' class="'.$cls.'">';\Elementor\Icons_Manager::render_icon( $icon['icon1'], [ 'aria-hidden' => 'true' ] );echo'</a></li>';
//    }
//}
//echo '</ul>
//                        </div>
//                        <!--/.hero_inside_text-->
//                    </div>
//                    <div class="col-md-5">
//                        <div class="banner_dashboard_right">
//                            '.ageland_get_that_image($settings['image']).'
//                        </div>
//                        <!--/.banner_dashboard_right-->
//                    </div>
//                </div>
//            </div>
//            <!--/.container-->
//        </section>
//        <!--hero section-->';?>

<!-- Start Choose us -->
<section class="chooseUs pt-120 pb-160">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-lg-6">
                <div class="chooseUs-thumb">
                    <img src="assets/img/Banner/banner_2.png" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-header pb-48">
                    <span class="sub-title">Why choose us</span>
                    <h3 class="title">We are an Digital agency based on Bangladesh.</h3>
                    <p class="info">A full-cycle digital service agency. We do from design to end-to-end development
                        to maintenance. We have been worked with more than 50+ brands.</p>
                </div>
                <div class="chooseUs-content">
                    <div class="chooseUs-items">
                        <div class="chooseUs-item">
                            <h4>Worked with biggest brands.</h4>
                            <p>Ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit
                                mollit. Exercitation veniam consequat.</p>
                        </div>
                        <div class="chooseUs-item">
                            <h4>Awards winning team.</h4>
                            <p>Ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit
                                mollit. Exercitation veniam consequat.</p>
                        </div>
                    </div>
                    <a href="#" class="learn_btn">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Choose us -->
