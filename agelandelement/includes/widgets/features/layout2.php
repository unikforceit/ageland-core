<?php
    echo'<!--measure business-->
        <section class="measure_business_sec home2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="title text-center">
                            <h3>Measure of Business</h3>
                            <p>Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, At vero eos et accusam et justo duo dolores.</p>
                        </div>
                        <!--/.title-->
                    </div>
                    <div class="w-100"></div>';
if ($settings['feature_list']) {
    $loop=0;
    foreach ($settings['feature_list'] as $feature) {
        $loop++;
        if ($loop==1){
            $cls='one1';
        }elseif ($loop==2){
            $cls='two';
        }else {
            $cls='three';
        }
        echo '<div class="col-md-4">
                        <div class="business_single_in '.$cls.'" data-aos="fade-up" data-aos-duration="1000">
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