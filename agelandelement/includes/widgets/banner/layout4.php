<?php
    echo'<!--hero section-->
        <section class="ag_banner_part banner_bg_img_shape overflow-hidden">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="ag_banner_content_inner banner_style_02">
                            <h5 class="sub_title">'.$settings['sub_title'].'</h5>
                            <h2 class="banner_title">'.$settings['title'].'</h2>
                            <p class="description">'.$settings['info'].'</p>
                            <div class="btn_list">
                                <a '.get_that_link($settings['link1']).' class="ag_btn btn_1 ">'.$settings['button1'].'</a>

                                <a '.get_that_link($settings['link2']).' class=" video_popup_btn">
                                    <span class="fa fa-play btn_box_shadow_1"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="ag_img_box pr-0 image_animation_style_01 mouse_move_animation overflow-visiable">
                            '.get_that_image($settings['image'],'img-fluid').'
                            <div class="profile_thumb_shape wow fadeIn" data-wow-delay=".6s">';?>
                                <div class="layer layer2" data-depth="0.20"><img src="<?php echo esc_url($settings['image4']['url']);?>" alt="#" data-parallax='{"x": 0, "y": 0, "rotateZ": -40 }'></div>
                          <?php  echo '</div>
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
        }elseif ($loop==4){
            $cls='four';
        }elseif ($loop==5){
            $cls='two';
        }else {
            $cls='one';
        }
        echo ''.get_that_image($shape['shape_image'],'home_four_banner_shape_0'.$loop.' shape-'.$cls.'').'';
    }
}
echo '</section>
        <!--hero section-->';