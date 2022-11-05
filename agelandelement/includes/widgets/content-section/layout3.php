<?php

                        echo '<!--get plan-->
        <section class="get_plan_sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="plan_img">
                            '.ageland_get_that_image($settings['image']).'
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row h-100">
                            <div class="col-md-12 align-self-center">
                                <div class="plan_title title">
                                    <h3>'.$settings['title'].'</h3>
                                    <p>'.$settings['info'].'</p>
                                    <ul>';
if ($settings['content_list3']) {
    foreach ($settings['content_list3'] as $list3) {
        echo ' <li><i class="fas fa-caret-right"></i>'.$list3['title3'].'</li>';
    }
}
echo'</ul>
                                </div>
                                <!--/.title-->
                            </div>
                        </div>
                     </div>
                </div>
            </div>
            <!--/.container-->
        </section>
        <!--get plan-->';