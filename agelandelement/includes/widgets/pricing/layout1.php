<?php
//echo '<!--pricing plane-->
//<section class="pricing_plan_sec">
//    <div class="container">
//        <div class="row justify-content-between">
//            <div class="col-md-5">
//                <div class="pricing_title title">
//                    <h5>' . $settings['stitle'] . '</h5>
//                    <h3>' . $settings['ssubtitle'] . '</h3>
//                    <p>' . $settings['sinfo'] . '</p>
//                    <div class="toggle-container cf">
//                        <div class="switch-toggles">
//                            <div class="monthly">' . $settings['mlabel'] . '</div>
//                            <!-- active -->
//                            <div class="yearly">' . $settings['ylabel'] . '</div>
//                        </div>
//                    </div>
//                </div>
//                <!--/,.pricing_title-->
//            </div>
//            <div class="col-md-4 offset-md-3">
//                <div id="price_tables">
//                    <div class="monthly cf active">
//                        <div class="price-table highlighted">
//                            <div class="table-inner text-center">
//                                <h5>' . $settings['mtitle'] . '</h5>
//                                <h3 class="price">' . $settings['mprice'] . '</h3>
//                                <p class="phrase">' . $settings['msub'] . '</p>
//                                <ul class="feature-list">';
//ageland_list_control($settings['mfeatures'], '');
//echo '</ul>
//                                <a ' . ageland_get_that_link($settings['mlink']) . ' class="btn btn-blue">' . $settings['mbutton'] . '</a>
//                            </div>
//                        </div>
//                    </div>
//                    <!-- /monthly-p -->
//
//                    <div class="yearly cf">
//                        <div class="price-table highlighted">
//                            <div class="table-inner text-center">
//                                <h5>' . $settings['ytitle'] . '</h5>
//                                <h3 class="price">' . $settings['yprice'] . '</h3>
//                                <p class="phrase">' . $settings['ysub'] . '</p>
//                                <ul class="feature-list">';
//ageland_list_control($settings['yfeatures'], '');
//echo '</ul>
//                                <a ' . ageland_get_that_link($settings['ylink']) . ' class="btn btn-blue">' . $settings['ybutton'] . '</a>
//                            </div>
//                        </div>
//                    </div>
//                    <!-- /yearly-p -->
//                </div>
//            </div>
//        </div>
//    </div>
//    <!--/.container-->
//</section>
//<!--pricing plane-->'; ?>

<!-- Start Main content -->
<section class="main-content">
    <div class="archive-section">
        <div class="container">
            <div class="row justify-content-center">
                <?php if ($settings['plan_list']) {
                    foreach ($settings['plan_list'] as $plan) {
                        ?>
                        <div class="col-lg-4 col-md-6 wow animate__fadeInUp"
                             data-wow-duration="<?php echo esc_attr($plan['plan_animation_duration']); ?>">
                            <div class="pricing-item <?php echo esc_attr($plan['active_status']); ?>">
                                <p class="plan-type"><?php echo esc_html($plan['plan_title']); ?></p>
                                <p class="price">
                                    <span><?php echo esc_html($plan['plan_price']); ?></span><?php echo esc_html($plan['plan_price_label']); ?>
                                </p>
                                <p class="plan-des"><?php echo esc_html($plan['plan_des']); ?></p>
                                <div class="plan-info">
                                    <ul>
                                        <?php ageland_list_control($plan['plan_features'], ''); ?>
                                    </ul>
                                </div>
                                <a <?php echo ageland_get_that_link($plan['plan_btn_link']); ?>
                                        class="plan_btn"><?php echo esc_html($plan['plan_btn']); ?></a>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
        </div>
    </div>
</section>
<!-- End Main content -->