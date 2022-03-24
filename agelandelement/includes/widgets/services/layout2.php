<!--service provide-->
        <section class="service_provide_sec_home2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="service_title title text-center">
                            <h3><?php echo $settings['title'];?></h3>
                            <p><?php echo $settings['info'];?></p>
                        </div>
                        <!--/.title-->
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <ul class="nav nav-tabs" role="tablist">
                         <?php if ($wp_query1->have_posts()) {
                            $index = 0;
                            while ($wp_query1->have_posts()) {
                                $index++;
                                if ($index == 1){
                                    $act = 'active';
                                    $select = 'true';
                                }else{
                                    $act = '';
                                    $select = 'false';
                                }
                                $wp_query1->the_post();
                        ?>
                            <li class="nav-item">
                                <a class="nav-link <?php echo esc_attr($act);?>" data-toggle="tab" href="#tabs-<?php echo get_the_ID();?>" role="tab">
                                    <div class="single_two_in">
                                        <?php
                                        $meta = ageland_service_meta('service_icon');
                                        $met = isset($meta['id']) ? $meta['id'] : '';
                                        echo wp_get_attachment_image($met);
                                        ?>
                                        <h4><?php the_title();?></h4>
                                    </div>
                                    <!--/.single_two_in-->
                                </a>
                            </li>
                            <?php    }
                              wp_reset_postdata();
                          }?>
            </ul>
                    </div>

                    <div class="col-md-12">
                        <div class="tab-content">
                            <?php if ($wp_query1->have_posts()) {
                            $index2 = 0;
                            while ($wp_query1->have_posts()) {
                            $index2++;
                            if ($index2 == 1){
                                $act2 = 'show active';
                            }else{
                                $act2 = '';
                            }
                            $wp_query1->the_post();?>
                            <div class="tab-pane <?php echo esc_attr($act2);?>" id="tabs-<?php echo get_the_ID();?>" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="tab-images text-right">
                                            <?php the_post_thumbnail('full');?>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="tabs-content-in">
                                            <h3><?php the_title();?></h3>
                                            <p><?php echo get_the_excerpt();?></p>
                                            <a href="<?php the_permalink();?>" class="btn"><?php echo esc_html('Learn More')?></a>
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
            <!--/.container-->
        </section>
        <!--service provide-->