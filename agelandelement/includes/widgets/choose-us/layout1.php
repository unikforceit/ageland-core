<?php echo '
<!-- Start Choose us -->
<section class="chooseUs pt-120 pb-160">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-lg-6">
                <div class="chooseUs-thumb">
                    <img src="assets/img/Banner/banner_2.png" alt="">
                    ' . get_that_image($settings['image']) . '
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-header pb-48">
                    <span class="sub-title">' . $settings['subtitle'] . '</span>
                    <h3 class="title">' . $settings['title'] . '</h3>
                    <p class="info">' . $settings['info'] . '</p>
                </div>
                <div class="chooseUs-content">
                    <div class="chooseUs-items">';
                    if ($settings['cItem_list']) {
                        foreach ($settings['cItem_list'] as $cItem) {
                    echo '<div class="chooseUs-item">
                            <h4>' . $cItem['cItem_title'] . '</h4>
                            <p>' . $cItem['cItem_info'] . '</p>
                        </div>';
                            }
                        }
                        echo '
                    </div>
                    <a ' . ageland_get_that_link($settings['link1']) . ' class="learn_btn">' . $settings['button1'] . '</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Choose us -->
'; ?>