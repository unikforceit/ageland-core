<?php
//
//echo '<!--service provide-->
//        <section class="service_provide_sec">
//            <div class="container">
//                <div class="row">
//                    <div class="col-md-5">
//                        <div class="row h-100">
//                            <div class="col-md-12 align-self-center">
//                                <div class="service_title title">
//                                    <h3>' . $settings['title'] . '</h3>
//                                    <p>' . $settings['info'] . '</p>
//                                    <a ' . ageland_get_that_link($settings['link']) . ' class="btn theme_btn">' . $settings['button'] . '</a>
//                                </div>
//                                <!--/.title-->
//                            </div>
//                        </div>
//
//                    </div>
//                    <div class="col-md-7">
//                        <div class="row">
//                            <div class="col-md-6 mrtop-1">';
//if ($wp_query1->have_posts()) {
//    $index1 = 0;
//    while ($wp_query1->have_posts()) {
//        $index1++;
//        if ($index1 == 1) {
//            $cls1 = 'bg1';
//        } else {
//            $cls1 = 'bg2';
//        }
//        $wp_query1->the_post();
//        echo '<div class="single_service_in ' . $cls1 . '" data-aos="flip-down" data-aos-duration="1000">
//                                    <div class="icon">';
//        $meta = ageland_service_meta('service_icon');
//        $met = isset($meta['id']) ? $meta['id'] : '';
//        echo wp_get_attachment_image($met);
//        echo '' . ageland_get_that_image($settings['shape22'], 'show') . '
//                                        ' . ageland_get_that_image($settings['shape33'], 'hide') . '
//                                    </div>
//                                    <h4><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h4>
//                                    <p>' . get_the_excerpt() . '</p>
//                                </div>
//                                <!--/.single_service_in-->';
//    }
//    wp_reset_postdata();
//}
//echo '</div>
//                            <div class="col-md-6">';
//if ($wp_query->have_posts()) {
//    $index2 = 0;
//    while ($wp_query->have_posts()) {
//        $index2++;
//        if ($index2 == 1) {
//            $cls2 = 'bg3';
//        } else {
//            $cls2 = 'bg4';
//        }
//        $wp_query->the_post();
//        echo '<div class="single_service_in ' . $cls2 . '" data-aos="flip-down" data-aos-duration="2000">
//                                    <div class="icon">';
//        $meta = ageland_service_meta('service_icon');
//        $met = isset($meta['id']) ? $meta['id'] : '';
//        echo wp_get_attachment_image($met);
//        echo '' . ageland_get_that_image($settings['shape2'], 'show') . '
//                                        ' . ageland_get_that_image($settings['shape3'], 'hide') . '
//                                    </div>
//                                    <h4><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h4>
//                                    <p>' . get_the_excerpt() . '</p>
//                                </div>
//                                <!--/.single_service_in-->';
//    }
//    wp_reset_postdata();
//}
//echo '</div>
//                        </div>
//                    </div>
//                </div>
//            </div>
//            <!--/.container-->
//            ' . ageland_get_that_image($settings['mshape1'], 'shape-one') . '
//            ' . ageland_get_that_image($settings['mshape2'], 'shape-two') . '
//            ' . ageland_get_that_image($settings['mshape3'], 'shape-three') . '
//            ' . ageland_get_that_image($settings['mshape4'], 'shape-four') . '
//            ' . ageland_get_that_image($settings['mshape5'], 'shape-five') . '
//            ' . ageland_get_that_image($settings['mshape6'], 'shape-six') . '
//        </section>
//        <!--service provide-->'; ?>

<!-- Start Service -->
<section class="service-section pt-160 pb-160">
    <div class="container">
        <div class="row justify-content-lg-between">
            <div class="col-lg-5 order-lg-0 order-1">
                <div class="section-header">
                    <span class="sub-title"><?php echo esc_html($settings['subtitle']); ?></span>
                </div>
                <div class="tab-content" id="myTabContent">
                    <?php if ($settings['tab_list']) {
                        $tabs = 0;
                        foreach ($settings['tab_list'] as $tab) {
                            $tabs++;
                            if ($tabs == 1) {
                                $tab_act = 'show active';
                            } else {
                                $tab_act = '';
                            }
                            ?>
                            <div class="tab-pane fade <?php echo esc_attr($tab_act); ?>"
                                 id="<?php echo esc_attr($tab['_id']); ?>-tab-pane" role="tabpanel"
                                 aria-labelledby="<?php echo esc_attr($tab['_id']); ?>-tab" tabindex="0">
                                <div class="section-header pb-48">
                                    <h3 class="title"><?php echo esc_html($tab['tab_details_title']); ?></h3>
                                    <p class="info"><?php echo esc_html($tab['tab_details_info']); ?></p>
                                    <?php echo ageland_get_that_image($tab['tab_thumb_image'],'pt-47')?>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-tabs">
                    <ul class="nav flex-column nav-tabs" id="myTab" role="tablist">
                        <?php if ($settings['tab_list']) {
                            $tab_btn = 0;
                            foreach ($settings['tab_list'] as $tab) {
                                $tab_btn++;
                                if ($tab_btn == 1) {
                                    $btn_act = 'active';
                                    $btn_true = 'true';
                                } else {
                                    $btn_act = '';
                                    $btn_true = 'false';
                                }
                                ?>
                                <li class="nav-item" role="presentation">
                                    <div class="service-tab <?php echo esc_attr($btn_act); ?>"
                                         id="<?php echo esc_attr($tab['_id']); ?>-tab" data-bs-toggle="tab"
                                         data-bs-target="#<?php echo esc_attr($tab['_id']); ?>-tab-pane" role="tab"
                                         aria-controls="<?php echo esc_attr($tab['_id']); ?>-tab-pane"
                                         aria-selected="<?php echo esc_attr($btn_true); ?>">
                                        <div class="icon">
                                            <svg width="36" height="26" viewBox="0 0 38 28" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                        d="M30.9 6.86666C31.3833 8.11666 32.5833 8.99999 34 8.99999C35.8333 8.99999 37.3333 7.49999 37.3333 5.66666C37.3333 3.83332 35.8333 2.33332 34 2.33332C32.5833 2.33332 31.3833 3.21666 30.9 4.46666C30.8166 4.44999 30.75 4.41666 30.6666 4.41666H24V3.16666C24 1.79999 22.8666 0.666656 21.5 0.666656H16.5C15.1333 0.666656 14 1.79999 14 3.16666V4.41666H7.33329C7.24996 4.41666 7.18329 4.44999 7.09996 4.46666C6.61663 3.21666 5.41663 2.33332 3.99996 2.33332C2.16663 2.33332 0.666626 3.83332 0.666626 5.66666C0.666626 7.49999 2.16663 8.99999 3.99996 8.99999C5.41663 8.99999 6.61663 8.11666 7.09996 6.86666C7.18329 6.88332 7.24996 6.91666 7.33329 6.91666H11.6166C8.19996 9.44999 6.08329 13.65 6.08329 18.1667C6.08329 18.45 6.09996 18.7167 6.13329 19H5.66663C4.28329 19 3.16663 20.1167 3.16663 21.5V24.8333C3.16663 26.2167 4.28329 27.3333 5.66663 27.3333H8.99996C9.36663 27.3333 9.69996 27.25 10.0166 27.1C10.8833 26.7333 11.5 25.85 11.5 24.8333V21.5C11.5 20.1167 10.3833 19 8.99996 19H8.61663C8.61663 18.95 8.63329 18.9 8.63329 18.85C8.59996 18.6167 8.59996 18.4 8.59996 18.1667C8.59996 14.05 10.7166 10.2833 14.0333 8.33332C14.1 9.61666 15.1833 10.6667 16.5 10.6667H21.5C22.8166 10.6667 23.9 9.61666 23.9833 8.33332C27.3 10.2833 29.4166 14.0667 29.4166 18.1667C29.4166 18.4 29.4 18.6167 29.3833 18.85C29.3833 18.9 29.4 18.95 29.4 19H29C27.6166 19 26.5 20.1167 26.5 21.5V24.8333C26.5 25.85 27.1166 26.7333 27.9833 27.1C28.3 27.25 28.6333 27.3333 29 27.3333H32.3333C33.7166 27.3333 34.8333 26.2167 34.8333 24.8333V21.5C34.8333 20.1167 33.7166 19 32.3333 19H31.8666C31.9 18.7167 31.9166 18.45 31.9166 18.1667C31.9166 13.65 29.8 9.44999 26.3833 6.91666H30.6666C30.75 6.91666 30.8166 6.88332 30.9 6.86666Z"
                                                        fill="#224259"/>
                                            </svg>
                                        </div>
                                        <div class="content">
                                            <h5><?php echo esc_html($tab['tab_title']); ?></h5>
                                            <p><?php echo esc_html($tab['tab_info']); ?></p>
                                        </div>
                                    </div>
                                </li>
                            <?php }
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Service -->