<!-- Start Banner -->
<section class="banner-2">
    <div class="container">
        <div class="banner-2-wrap d-flex flex-column">
            <div class="bannerItem">
                <div class="row justify-content-center justify-content-lg-between">
                    <div class="col-lg-5">
                        <div class="bannerTwo-image">
                            <?php echo ageland_get_that_image($settings['left_image'])?>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="bannerTwo-content">
                            <h3 class="title"><?php echo esc_html($settings['title']);?><span class="bannerArrow">

                                </span> <?php echo esc_html($settings['title_two']);?><span
                                    class="bannerHighlight"><?php echo esc_html($settings['banner_Highlight_one']);?></span></h3>
                            <div class="time-clients d-flex align-items-center">
                                <div class="bTime">
                                    <p>5m</p>
                                </div>
                                <div class="clients">
                                    <ul class="customer d-flex align-items-center">
                                        <li><img src="assets/img/customers/customer_1.png" alt=""></li>
                                        <li><img src="assets/img/customers/customer_2.png" alt=""></li>
                                        <li><img src="assets/img/customers/customer_3.png" alt=""></li>
                                        <li><img src="assets/img/customers/customer_3.png" alt=""></li>
                                    </ul>
                                    <p>Our job is to find the simplest expression of your brand, and then amplify it with all the resources to us.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bannerItem">
                <div class="row justify-content-center justify-content-lg-between">
                    <div class="col-md-5">
                        <div class="bannerTwo-content">
                            <p class="info"><?php echo esc_html($settings['desc']);?></p>
                            <a <?php echo ageland_get_that_link($settings['learn_more_link']);?> class="get_started_btn"><?php echo esc_html($settings['learn_more']);?></a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="bannerTwo-image bannerTwo-image-alt">
                            <?php echo ageland_get_that_image($settings['right_image'])?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner -->