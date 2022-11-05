<?php
    echo'<!-- about section -->
        <section class="about_section about_bg_02 about_shape_img section_padding overflow-hidden">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="ag_img_box image_animation_style_01 mouse_move_animation overflow-visiable">
                            '.get_that_image($settings['image'], 'img-fluid').'
                            <div class="profile_thumb_shape wow fadeIn" data-wow-delay=".6s">
                                <div class="layer layer2" data-depth="0.20"><img src="'.($settings['image1']['url']).'" alt="#" ></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="ag_about_text_box">
                            <h2 class="title"> '.$settings['title'].'</h2>
                            <p class="description">'.$settings['info'].'</p>
                            <a '.ageland_get_that_link($settings['link']).' class="ag_btn btn_1">'.$settings['button'].'</a>
                        </div>
                    </div>
                </div>
            </div>';
if ($settings['icon_list']) {
    $loop=0;
    foreach ($settings['icon_list'] as $icon) {
        $loop++;
        if ($loop==1){
            $cls='shape-one';
        }elseif ($loop==2){
            $cls='shape-two';
        }else{
            $cls='shape-three';
        }
        echo ''.get_that_image($icon['iconnn'],'about_section_shape_0'.$loop.' '.$cls.'').'';
    }
}
echo '</section>
        <!-- about section end -->';