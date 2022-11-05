<?php
    echo'<!--pricing plane-->
        <section class="pricing_plan_sec home2">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="row h-100">
                            <div class="col-md-12 align-self-center">
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
                        </div>

                    </div>
                    <div class="col-md-5 offset-md-2">
                        <div id="price_tables">
                            <div class="monthly hide active">
                                <div class="swiper-container price">
                                    <div class="swiper-wrapper">';
                                    if ($settings['mlist']) {
                                        foreach ($settings['mlist'] as $monthly){
                                        echo '<div class="swiper-slide">
                                            <div class="table-inner-slider text-center">
                                                <h5>' . $monthly['rmtitle'] . '</h5>
                                                <h3 class="price">' . $monthly['rmprice'] . '</h3>
                                                <p class="phrase">' . $monthly['rmsub'] . '</p>
                                                <ul class="feature-list">';
                                        ageland_list_control($monthly['rmfeatures'], '');
                                        echo '</ul>
                                                <a ' . ageland_get_that_link($monthly['rmlink']) . ' class="btn btn-blue">' . $monthly['rmbutton'] . '</a>
                                            </div>
                                        </div>';}
                                    }
                                    echo '</div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            <div class="yearly hide">
                                <div class="swiper-container price">
                                    <div class="swiper-wrapper">';
                                    if ($settings['ylist']) {
                                        foreach ($settings['ylist'] as $yearly){
                                            echo '<div class="swiper-slide">
                                        <div class="table-inner-slider text-center">
                                            <h5>' . $yearly['rytitle'] . '</h5>
                                            <h3 class="price">' . $yearly['ryprice'] . '</h3>
                                            <p class="phrase">' . $yearly['rysub'] . '</p>
                                            <ul class="feature-list">';
                                        ageland_list_control($yearly['ryfeatures'], '');
                                        echo '</ul>
                                                <a ' . ageland_get_that_link($yearly['rylink']) . ' class="btn btn-blue">' . $yearly['rybutton'] . '</a>
                                            </div>
                                        </div>';}
                                    }
                                    echo '</div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </section>
        <!--pricing plane-->';
