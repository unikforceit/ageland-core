<!-- Start Banner -->
<section class="banner-3">
    <div class="container-fluid">
        <div class="row d-flex align-items-center">
            <div class="col-xl-6 col-lg-10">
                <div class="banner-left">
                    <div class="shape-13">
                        <?php echo ageland_get_that_image($settings['banner_left_shape'])?>
                    </div>
                    <h3 class="title"><?php echo esc_html($settings['title']);?><span>satisfaction</span></h3>
                    <p class="info"><?php echo esc_html($settings['desc']);?></p>
                </div>
                <div class="banner-btn">
                    <ul>
                        <li>
                            <a href="#" class="btn-default"><?php echo esc_html($settings['learn_more']);?><img
                                        src="assets/img/shape/right-arrow.png"></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/watch?v=pNje3bWz7V8"
                               class=" video-text item popup-youtube" data-fancybox="gallery"><i
                                        class="fas fa-play"></i><?php echo esc_html($settings['learn_more']);?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-5 col-lg-2">
                <div class="banner-wrapper">
                    <div class="banner_img">
                        <?php echo ageland_get_that_image($settings['right_shape'])?>
                    </div>
                </div>
                <div class="banner-mark-wrapper">
                    <div class="banner-mask">
                        <?php echo ageland_get_that_image($settings['center_shape'])?>
<!--                        <div class="banner-emo">-->
<!--                            <img class="rotate" src="assets/img/shape/emo.png" alt="">-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner -->