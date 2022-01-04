<?php

    echo '<!--measure business-->
        <section class="measure_business_sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="title text-center">
                            <h3>'.$settings['title'].'</h3>
                            <p>'.$settings['info'].'</p>
                        </div>
                        <!--/.title-->
                    </div>
                    <div class="w-100"></div>';
if ($settings['feature_list']) {
    foreach ($settings['feature_list'] as $feature) {
        echo '<div class="col-md-4">
                        <div class="business_single_in" data-aos="fade-up" data-aos-duration="1000">
                           '.get_that_image($feature['image']).'
                            <h4>'.$feature['feature_title'].'</h4>
                            <p>'.$feature['feature_info'].'</p>
                        </div>
                        <!--/.business_single_in-->
                    </div>';
    }
}
echo '</div>
            </div>
            <!--/.container-->
        </section>
        <!--measure business-->';