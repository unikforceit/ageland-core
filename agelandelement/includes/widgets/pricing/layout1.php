<?php
echo '<!--pricing plane-->
<section class="pricing_plan_sec">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-5">
                <div class="pricing_title title">
                    <h5>' . $settings['stitle'] . '</h5>
                    <h3>' . $settings['ssubtitle'] . '</h3>
                    <p>' . $settings['sinfo'] . '</p>
                    <div class="toggle-container cf">
                        <div class="switch-toggles">
                            <div class="monthly">' . $settings['mlabel'] . '</div>
                            <!-- active -->
                            <div class="yearly">' . $settings['ylabel'] . '</div>
                        </div>
                    </div>
                </div>
                <!--/,.pricing_title-->
            </div>
            <div class="col-md-4 offset-md-3">
                <div id="price_tables">
                    <div class="monthly cf active">
                        <div class="price-table highlighted">
                            <div class="table-inner text-center">
                                <h5>' . $settings['mtitle'] . '</h5>
                                <h3 class="price">' . $settings['mprice'] . '</h3>
                                <p class="phrase">' . $settings['msub'] . '</p>
                                <ul class="feature-list">';
                                    ageland_list_control($settings['mfeatures'], '');
                                    echo '</ul>
                                <a '.get_that_link($settings['mlink']).' class="btn btn-blue">' . $settings['mbutton'] . '</a>
                            </div>
                        </div>
                    </div>
                    <!-- /monthly-p -->

                    <div class="yearly cf">
                        <div class="price-table highlighted">
                            <div class="table-inner text-center">
                                <h5>' . $settings['ytitle'] . '</h5>
                                <h3 class="price">' . $settings['yprice'] . '</h3>
                                <p class="phrase">' . $settings['ysub'] . '</p>
                                <ul class="feature-list">';
                                    ageland_list_control($settings['yfeatures'], '');
                                    echo '</ul>
                                <a '.get_that_link($settings['ylink']).' class="btn btn-blue">' . $settings['ybutton'] . '</a>
                            </div>
                        </div>
                    </div>
                    <!-- /yearly-p -->
                </div>
            </div>
        </div>
    </div>
    <!--/.container-->
</section>
<!--pricing plane-->';