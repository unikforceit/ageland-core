<!-- services section -->
<section class="case_studies_section case_studies_bg section_padding overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="ag_section_title mb_55">
                    <h2 class="title"> <?php echo wp_kses_post($settings['title'])?></h2>
                    <p class="description"><?php echo wp_kses_post($settings['info'])?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div class="swiper_case_filter">
                    <?php
                    $index = 0;
                    foreach ($categories as $cats) {
                    $index++;
                    if ($index == 1){
                        $cls = 'swiper-active';
                    }else{
                        $cls = '';
                    }
                     $cat[] = '.'.$cats->slug;
                    $filter = implode(' ', $cat);
                    ?>
                        <a data-filter="<?php echo esc_attr($filter);?>" class="<?php echo esc_attr($cls);?>"><?php echo esc_html($cats->name);?></a>
                    <?php
                        }

                    ?>
                        <a class="view_all_btn" data-filter="all">View All <i class="fas fa-angle-right"></i> </a>
                    </div>
                </div>
                <div class="case_studies_section_wrapper">
                    <div class="swiper-container swiper_case_studies_wrapper">
                        <div class="swiper-wrapper">
                            <?php
                            if ($the_query->have_posts()) {
                            while ($the_query->have_posts()) {
                            $the_query->the_post();
                            foreach ($categories as $catss) {
                                $cate[] = $catss->slug;
                            }
                            $filter = implode(' ', $cate);
                            $cates = implode(', ', $cate);
                            ?>
                            <div class="swiper-slide <?php echo esc_attr($filter);?>">
                                <a href="#" class="case_studies_wrapper">
                                    <?php the_post_thumbnail(['class' => 'case_studies_thumb']);?>
                                    <div class="case_studies_content">
                                        <h2 class="title"><?php the_title();?></h2>
                                        <div class="portfolio_meta_list">
                                            <p><?php echo esc_html($cates);?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                <?php
                            }
                                wp_reset_postdata();
                            }
                            ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services section end -->