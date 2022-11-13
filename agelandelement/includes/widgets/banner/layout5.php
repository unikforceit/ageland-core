<!-- Start Banner -->
<section class="banner-5">
    <div class="container">
        <div class="shape-2">
            <img src="/assets/img/Banner/banner_shape.png" alt="">
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-xl-7 col-lg-6">
                <div class="banner-left">
                    <div class="shape-1">
                        <?php echo ageland_get_that_image($settings['banner_left_shape'])?>
                    </div>
                    <h3 class="title"><?php echo esc_html($settings['title']);?></h3>
                    <p class="info"><?php echo esc_html($settings['desc']);?></p>
                </div>
                <div class="counter-wrapper">
                    <div class="counterContent">
                        <div class="icon">
                            <img src="/assets/img/shape/like.png" alt="">
                        </div>
                        <span class="odometer" data-count="100">00</span>
                        <span>%</span>
                        <p>Client Satisfaction</p>
                    </div>
                    <div class="counterContent">
                        <div class="icon">
                            <img src="/assets/img/shape/directbox-notif.png" alt="">
                        </div>
                        <span class="odometer" data-count="1200">00</span>
                        <span>+</span>
                        <p>Complete Project</p>
                    </div>
                    <div class="counterContent">
                        <div class="icon">
                            <img src="/assets/img/shape/pen-tool-2.png" alt="">
                        </div>
                        <span class="odometer" data-count="1800">00</span>
                        <span>+</span>
                        <p>Design Resource</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="banner-5-wrapper">
                    <div class="banner_img">
                        <?php echo ageland_get_that_image($settings['right_image'])?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner -->