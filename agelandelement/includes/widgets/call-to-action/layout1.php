<?php
//echo '<!-- call to actio area start here  -->
//        <section class="callto-action-area mt-120">
//            <div class="container">
//                <div class="row">
//                    <div class="col-lg-12">
//                        <div class="callto-action-wrap">
//                            <h2>' . $settings['title'] . '</h2>
//                            <span class="section-divider"></span>
//                            <ul class="btn-lsit">
//                                <li>
//                                    <a ' . ageland_get_that_link($settings['link1']) . ' class="callto-btn watch-btn popup-video" data-autoplay="true" data-vbtype="video">' . $settings['button1'] . '</a>
//                                </li>
//                                <li>
//                                    <a ' . ageland_get_that_link($settings['link2']) . ' class="callto-btn demo-btn popup-video" data-autoplay="true" data-vbtype="video">' . $settings['button2'] . '</a>
//                                </li>
//                            </ul>
//                        </div>
//                    </div>
//                </div>
//            </div>
//        </section>
//        <!-- call to actio area end here  -->'; ?>

<?php echo '
<!-- Start Call to action -->
<section class="call_to_action">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div
                    class="call_to_action_content d-flex flex-column flex-lg-row flex-wrap justify-content-between align-items-center">
                    <p>' . $settings['info'] . '</p>
                    <h4>' . $settings['title1'] . '</h4>
                    <h4>' . $settings['title2'] . '</h4>
                    <a ' . ageland_get_that_link($settings['link1']) . ' class="apply_btn">' . $settings['button1'] . '</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Call to action -->
'; ?>