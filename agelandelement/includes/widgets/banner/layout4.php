<!-- Start Banner -->
<section class="banner-4 pt-47 pb-160">
    <div class="container">
        <div class="banner-2-wrap d-flex flex-column">
            <div class="bannerItem">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="bannerTwo-content">
                            <h3 class="title"> <span class="bannerArrow"></span><?php echo esc_html($settings['title']);?><p
                                    class="bannerHighlight"><?php echo esc_html($settings['banner_Highlight_one']);?></p>
                                <p class="bannerHighlight bg-yellow"><?php echo esc_html($settings['banner_Highlight_two']);?></p><?php echo esc_html($settings['title']);?>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="banner-image-wrapper">
                            <?php echo ageland_get_that_image($settings['left_image'])?>
                            <?php echo ageland_get_that_image($settings['center_image'])?>
                            <?php echo ageland_get_that_image($settings['right_image'])?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner -->