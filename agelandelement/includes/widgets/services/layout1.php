<?php

echo '<!--service provide-->
        <section class="service_provide_sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="row h-100">
                            <div class="col-md-12 align-self-center">
                                <div class="service_title title">
                                    <h3>' . $settings['title'] . '</h3>
                                    <p>' . $settings['info'] . '</p>
                                    <a ' . get_that_link($settings['link']) . ' class="btn">' . $settings['button'] . '</a>
                                </div>
                                <!--/.title-->
                            </div>
                        </div>

                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6 mrtop-1">';
if ($wp_query1->have_posts()) {
    $index1 = 0;
    while ($wp_query1->have_posts()) {
        $index1++;
        if ($index1 == 1){
            $cls1 = 'bg1';
        }else{
            $cls1 = 'bg2';
        }
        $wp_query1->the_post();
        echo '<div class="single_service_in '.$cls1.'" data-aos="flip-down" data-aos-duration="1000">
                                    <div class="icon">';
                                        $meta = ageland_service_meta('service_icon');
                                        $met = isset($meta['id']) ? $meta['id'] : '';
                                        echo wp_get_attachment_image($met);
                                         echo '' . get_that_image($settings['shape22'], 'show') . '
                                        ' . get_that_image($settings['shape33'], 'hide') . '
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
    $index2 = 0;
    while ($wp_query->have_posts()) {
        $index2++;
        if ($index2 == 1){
            $cls2 = 'bg3';
        }else{
            $cls2 = 'bg4';
        }
        $wp_query->the_post();
        echo '<div class="single_service_in '.$cls2.'" data-aos="flip-down" data-aos-duration="2000">
                                    <div class="icon">';
                                        $meta = ageland_service_meta('service_icon');
                                        $met = isset($meta['id']) ? $meta['id'] : '';
                                        echo wp_get_attachment_image($met);
                                        echo '' . get_that_image($settings['shape2'], 'show') . '
                                        ' . get_that_image($settings['shape3'], 'hide') . '
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
            ' . get_that_image($settings['mshape1'], 'shape-one') . '
            ' . get_that_image($settings['mshape2'], 'shape-two') . '
            ' . get_that_image($settings['mshape3'], 'shape-three') . '
            ' . get_that_image($settings['mshape4'], 'shape-four') . '
            ' . get_that_image($settings['mshape5'], 'shape-five') . '
            ' . get_that_image($settings['mshape6'], 'shape-six') . '
        </section>
        <!--service provide-->';