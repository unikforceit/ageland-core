<?php
    echo'<!--hero section-->
        <section class="ag_banner_part banner_bg_img mouse_move_animation">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="ag_banner_content_inner">
                            <h5 class="sub_title">'.$settings['sub_title'].'</h5>
                            <h2 class="banner_title">'.$settings['title'].'</h2>
                            <p class="description">'.$settings['info'].'</p>
                            <div class="btn_list">
                                <a '.get_that_link($settings['link1']).' class="ag_btn btn_1">'.$settings['button1'].'</a>
                                <a '.get_that_link($hero['link2']).' class="video_popup_btn">
                                    <span class="fa fa-play"></span> '.$settings['button2'].'
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
if ($settings['shape_list']) {
    $loop=0;
    foreach ($settings['shape_list'] as $shape) {
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
        echo '<div class="banner_parallax_img_'.$loop.' wow slideInnew" data-wow-delay=".3s">
                <div class="layer layer2 shape-'.$cls.'" data-depth="-0.10">'.get_that_image($shape['shape_image']).'</div>
            </div>';
    }
}
echo '</section>
        <!--hero section-->';