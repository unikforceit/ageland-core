<?php
?><!--tab section -->
        <section class="services_section padding_top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="ag_section_title mb_55 text-center">
                            <h2 class="title">Start Your Journey with Naive Agency Providing <span>Services</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="ag_tab_section_wrapper">
                            <ul class="nav nav-tabs" role="tablist">
                                <?php if ($wp_query->have_posts()) {
                                $index = 0;
                                while ($wp_query->have_posts()) {
                                $index++;
                                if ($index == 1){
                                    $act = 'active';
                                    $select = 'true';
                                }else{
                                    $act = '';
                                    $select = 'false';
                                }
                                $wp_query->the_post();?>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo esc_attr($act);?>" id="ag_tab_<?php echo get_the_ID();?>" data-toggle="tab" href="#ag_tab_<?php echo get_the_ID();?>_content" role="tab" aria-controls="ag_tab_<?php echo get_the_ID();?>_content" aria-selected="<?php echo esc_attr($select);?>">
                                        <div class="nav_tab_wrapper">
                                            <div class="nav_tab_icon_wrapper">
                                                <?php
                                                $meta = ageland_service_meta('service_icon');
                                                echo wp_get_attachment_image($meta['id']);
                                                ?>
                                            </div>
                                            <?php echo get_that_image($settings['mshape1'], 'services_icon_shape');?>
                                        </div>
                                        <h4 class="nav_title"><?php the_title();?></h4>
                                    </a>
                                </li>
                                <?php    }
                                    wp_reset_postdata();
                                }?>
                            </ul>
                            <div class="tab-content">
                                <?php if ($wp_query->have_posts()) {
                                $index2 = 0;
                                while ($wp_query->have_posts()) {
                                $index2++;
                                if ($index2 == 1){
                                    $act2 = 'show active';
                                }else{
                                    $act2 = '';
                                }
                                $wp_query->the_post();?>
                                <div class="tab-pane fade <?php echo esc_attr($act2);?>" id="ag_tab_<?php echo get_the_ID();?>_content" role="tabpanel" aria-labelledby="ag_tab_<?php echo get_the_ID();?>">
                                    <div class="row align-items-center">
                                        <div class="col-lg-5">
                                            <div class="tab_content_thumb">
                                                <?php the_post_thumbnail('full');?>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="tab_content_wrapper">
                                                <h4 class="title"><?php the_title();?></h4>
                                                <p class="desc"><?php the_content();?></p>
                                                <a href="<?php the_permalink();?>" class="ag_btn btn_1">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php    }
                                    wp_reset_postdata();
                                }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--tab section end -->