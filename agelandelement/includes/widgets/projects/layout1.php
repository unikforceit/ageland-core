<?php

echo '<!--case-studies-sec-->
        <section class="case_studies_sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="owl-carousel" id="case-slider-owl">';
if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
        $the_query->the_post();
        $project_id = get_the_ID();
        $post_categories = get_the_terms($project_id, 'project_cat');
        foreach ($post_categories as $cats) {
            $cat[] = $cats->slug;
        }
        $filter = implode(' ', $cat);
        echo '<div>
                                <div class="imgase">
                                    ' . get_the_post_thumbnail() . '
                                </div>
                            </div>';
    }
    wp_reset_postdata();
}
echo '</div>
                    </div>
                    <div class="col-md-5">
                        <div class="case_title title">
                            <h3>' . $settings['title'] . '</h3>
                            <p>' . $settings['info'] . '</p>
                        </div>
                        <!--/.title-->
                        <div class="case-feature-info">
                            <h4>'.$settings['feature_title'].'</h4>
                            <ul>';
if ($settings['feature_list']) {
    foreach ($settings['feature_list'] as $feature) {
        echo '<li>
                                    <p><i class="fas fa-angle-right"></i> '.$feature['feature_title'].'</p>
                                </li>';
    }
}
echo '</ul>
                            <a '.get_that_link($settings['link']).' class="btn">'.$settings['button'].'</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </section>
        <!--case-studies-sec-->';