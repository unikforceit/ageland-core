<?php

    echo '<!--hero section-->
        <section class="hero_banner home2" id="home_id">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="hero_inside_text">
                            <h4>'.$settings['sub_title'].'</h4>
                            <h1>'.$settings['title'].'</h1>
                            <p>'.$settings['info'].'</p>
                            <div class="hero-btn">
                                <a '.get_that_link($settings['link1']).' class="btn">'.$settings['button1'].'</a>
                            </div>
                            <div class="banner-social-circle">';
if ($settings['icon_list']) {
    $loop=0;
    foreach ($settings['icon_list'] as $icon) {
        $loop++;
        if ($loop==1){
            $cls='one';
        }elseif ($loop==2){
            $cls='two';
        }elseif ($loop==3){
            $cls='three';
        }else {
            $cls='four';
        }
        echo '<li><a '.get_that_link($icon['link11']).' class="'.$cls.'">';\Elementor\Icons_Manager::render_icon( $icon['icon1'], [ 'aria-hidden' => 'true' ] );echo'</a></li>
<li><a '.get_that_link($icon['link11']).' class="'.$cls.'">';\Elementor\Icons_Manager::render_icon( $icon['icon1'], [ 'aria-hidden' => 'true' ] );echo'</a></li>
<li><a '.get_that_link($icon['link11']).' class="'.$cls.'">';\Elementor\Icons_Manager::render_icon( $icon['icon1'], [ 'aria-hidden' => 'true' ] );echo'</a></li>';
    }
}
echo '</div>
                        </div>
                        <!--/.hero_inside_text-->
                    </div>
                    <div class="col-md-5">
                        <div class="banner_dashboard_right">
                            '.get_that_image($settings['image']).'
                        </div>
                        <!--/.banner_dashboard_right-->
                    </div>
                </div>
            </div>
            <!--/.container-->
        </section>
        <!--hero section-->';