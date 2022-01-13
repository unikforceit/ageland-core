<?php

    echo'<!-- services section -->
        <section class="case_studies_section case_studies_bg section_padding overflow-hidden">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="ag_section_title mb_55 text-center">
                            <h2 class="title"> ' . $settings['title'] . '</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel blog_slider_3">';
if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
        $the_query->the_post();
        $project_id = get_the_ID();
        $post_categories = get_the_terms($project_id, 'project_cat');
        foreach ($post_categories as $cats) {
            $cat[] = $cats->slug;
        }
        $filter = implode(', ', $cat);
        echo '<a href="#" class="case_studies_wrapper">
                                ' . get_the_post_thumbnail() . '
                                <div class="case_studies_content">
                                    <h2 class="title"><a href="'.get_the_permalink().'">' . get_the_title() . '</a></h2>
                                    <div class="portfolio_meta_list">
                                        <p>'.$filter.'</p>
                                    </div>
                                </div>
                            </a>';
    }
    wp_reset_postdata();
}
echo '</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services section end -->';