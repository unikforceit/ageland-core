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
    $loop =0;
    while ($the_query->have_posts()) {
        $loop++;
        $the_query->the_post();
        if($loop == 1){
            $size  = [570,478];
        }elseif($loop == 2){
            $size  = [570,350];
        }elseif($loop == 3){
            $size  = [246,311];
        }elseif($loop == 4){
            $size  = [270,342];
        }else{
            $size  = [570,478];
        }
        echo '<div class="grid-item">
                            <div class="grid-item-content">
                                <div class="item-inner">
                                    ' . get_the_post_thumbnail('', $size) . '
                                    <div class="overlay">
                                        <div class="view-list">
                                            <h4><a href="' . get_the_post_thumbnail_url() . '">' . get_the_title() . '</a></h4>
                                            <p>'.ageland_project_cat().'</p>
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