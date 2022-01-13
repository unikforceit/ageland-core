<?php

    echo'<!--case studies two-->
        <section class="case_studies_home2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="title text-center">
                            <h3>' . $settings['title'] . '</h3>
                            <p>' . $settings['info'] . '</p>
                        </div>
                        <!--/.title-->
                    </div>
                    <div class="w-100"></div>';
if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
        $the_query->the_post();
        $project_id = get_the_ID();
        $post_categories = get_the_terms($project_id, 'project_cat');
        foreach ($post_categories as $cats) {
            $cat[] = $cats->name;
        }
        $filter = implode(', ', $cat);
        $size  = [100,100];
        echo '<div class="col-md-4">
                        <div class="single_case_two" data-aos="fade-up" data-aos-duration="1000">
                            <div class="card">
                                ' . get_the_post_thumbnail() . '
                                <div class="card-body">
                                    <h4><a href="'.get_the_permalink().'">' . get_the_title() . '</a></h4>
                                    <p>'.$filter.'</p>
                                </div>
                            </div>
                        </div>
                        <!--/.single_case_two-->
                    </div>';
    }
    wp_reset_postdata();
}
echo '</div>
            </div>
            <!--/.container-->
        </section>
        <!--case studies two-->';