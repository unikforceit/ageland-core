<?php

    echo'<!--latest-work-->
        <section class="latest_work_sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="title text-center">
                            <h3>' . $settings['title'] . '</h3>
                            <p>' . $settings['info'] . '</p>
                        </div>
                        <!--/.title-->
                    </div>
                    <div class="w-100"></div>
                    <div class="latest_work_grid">';
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
        echo '<div class="grid-item">
                            <div class="grid-item-content">
                                <div class="item-inner">
                                    ' . get_the_post_thumbnail('', $size) . '
                                    <div class="overlay">
                                        <div class="view-list">
                                            <h4><a href="' . get_the_post_thumbnail_url() . '" data-lity>' . get_the_title() . '</a></h4>
                                            <p>'.$filter.'</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
    }
    wp_reset_postdata();
}
echo '</div>
                </div>
            </div>
            <!--/.container-->
        </section>
        <!--latest-work-->';