<?php

echo'<!-- services section -->
        <section class="services_section services_bg section_padding mouse_move_animation">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="ag_section_title mb_55 text-center">
                            <h2 class="title">'.$settings['title'].'</h2>
                            <p class="description">'.$settings['info'].'</p>
                        </div>
                    </div>
                </div>
                <div class="row">';
if ($wp_query1->have_posts()) {
    while ($wp_query1->have_posts()) {
        $wp_query1->the_post();
        echo '<div class="col-lg-4 col-sm-6">
                        <div class="ag_icon_box_inner icon_box_style_02">
                            <div class="services_icon">
                                <div class="services_icon_inner">
                                    ' . get_the_post_thumbnail() . '
                                </div>
                                '.get_that_image($settings['image'],'services_icon_shape').'
                            </div>
                            <h4 class="title"><a href="'.get_the_permalink().'">' . get_the_title() . '</a></h4>
                            <p class="description">' . get_the_excerpt() . '</p>
                        </div>
                    </div>';
    }
    wp_reset_postdata();
}
echo '</div>
            </div>';
if ($settings['shape_list']) {
    $loop=0;
    foreach ($settings['shape_list'] as $shape) {
        $loop++;
        if ($loop==1){
            $cls='two';
        }elseif ($loop==2){
            $cls='one';
        }elseif ($loop==3){
            $cls='two';
        }elseif ($loop==4){
            $cls='three';
        }elseif ($loop==5){
            $cls='four';
        }else {
            $cls='one';
        }
        echo '<div class="services_parallax_img_'.$loop.' wow slideInnew" data-wow-delay=".3s">
                <div class="layer layer2 shape-'.$cls.'" data-depth="0.10">'.get_that_image($shape['shape_image']).'</div>
            </div>';
    }
}
echo '</section>
        <!-- services section end -->';